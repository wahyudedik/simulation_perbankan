<?php
if (isset($_POST['submit'])) {
  // Koneksi ke database
  include '../../../database/config.php';

  // Validasi data yang diinput
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  if (empty($email)) {
    echo "Mohon isi alamat email Anda.";
  } else {
    // Cari data pengguna berdasarkan email
    $query  = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
      // Generate token reset password
      $token = bin2hex(random_bytes(32));
      $update_at = date('Y-m-d H:i:s'); // format datetime: yyyy-mm-dd hh:mm:ss

      // Simpan token ke database
      $query  = "UPDATE users SET reset_token='$token', update_at='$update_at' WHERE email='$email'";
      mysqli_query($conn, $query);

      // Kirim email dengan link reset password
      $to = $email;
      $subject = 'Reset Password';
      $message = 'Silakan klik link berikut untuk reset password: http://localhost:8080/native/simulation_perbankan/app/Views/Auth/Reset_Password.php?email=' . $email . '&token=' . $token;
      $headers = 'From: wdedyk@gmail.com' . "\r\n" .
                 'Reply-To: wdedyk@gmail.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

      if (mail($to, $subject, $message, $headers)) {
        echo "Email dengan link reset password sudah dikirim ke alamat email Anda.";
      } else {
        echo "<script>$(function() {var Toast = Swal.mixin({toast: true,position: 'top-end',showConfirmButton: false,timer: 3000});
        toastr.info('Gagal Mengirimkan Email.', '', {onHidden: function() {window.location.href = 'Reset.php';}});});</script>";
      }
    } else {
      echo "<script>$(function() {var Toast = Swal.mixin({toast: true,position: 'top-end',showConfirmButton: false,timer: 3000});
      toastr.info('Alamat Email Tidak di Temukan.', '', {onHidden: function() {window.location.href = 'Reset.php';}});});</script>";
    }
  }
}
?>
