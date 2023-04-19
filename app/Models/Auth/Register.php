<?php
// Koneksi ke database
include '../../../database/config.php';
include '../../Views/Auth/Patch/css.php';
include '../../Views/Auth/Patch/js.php';

// Validasi data yang diinput
if (isset($_POST['register'])) {
  $name     = mysqli_real_escape_string($conn, $_POST['name']);
  $email    = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $level = mysqli_real_escape_string($conn, $_POST['level']);

  // Query untuk memeriksa apakah data sudah ada di database
  $check_query = mysqli_query($conn, "SELECT * FROM users WHERE name='$name' OR email='$email'");

  if (mysqli_num_rows($check_query) > 0) {
    // Jika data sudah ada di database, tampilkan pesan error
    echo "<script>$(function() {var Toast = Swal.mixin({toast: true,position: 'top-end',showConfirmButton: false,timer: 3000});
    toastr.error('Data Sudah Ada | Harap Masukkan Email dan Nama Lain', '', {onHidden: function() {window.location.href = 'Register.php';}});});</script>";
  } else {
    // Jika data belum ada di database, lakukan proses registrasi
    if (empty($name) || empty($email) || empty($password) || empty($level)) {
      echo "<script>$(function() {var Toast = Swal.mixin({toast: true,position: 'top-end',showConfirmButton: false,timer: 3000});
            toastr.info('Silakan Isi Semua Kolom', '', {onHidden: function() {window.location.href = 'Register.php';}});});</script>";
    } else {
      // Hash password
      $password_hashed = password_hash($password, PASSWORD_DEFAULT);
      $created_at = date('Y-m-d H:i:s'); // format datetime: yyyy-mm-dd hh:mm:ss
      $update_at = date('Y-m-d H:i:s'); // format datetime: yyyy-mm-dd hh:mm:ss


      // Tambahkan pengguna baru ke dalam tabel user
      $query = "INSERT INTO users (name, email, password, level, create_at, update_at) 
            VALUES ('$name', '$email', '$password_hashed', '$level', '$created_at', '$update_at')";
      mysqli_query($conn, $query);

      echo "<script>$(function() {var Toast = Swal.mixin({toast: true,position: 'top-end',showConfirmButton: false,timer: 3000});
              toastr.success('Registrasi Berhasil | Tunggu Sebentar....', '', {onHidden: function() {window.location.href = 'Login.php';}});});</script>";
    }
  }
}
