<?php
// Koneksi ke database
include '../../../database/config.php';

// Validasi data yang diinput
if (isset($_POST['login'])) {
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($email) || empty($password)) {
        echo "Mohon isi semua kolom.";
    } else {
        // Cari data pengguna berdasarkan email
        $query  = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            // Verifikasi password
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user['password'])) {
                // Buat session
                session_start();
                $_SESSION['user_id']   = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_level'] = $user['level'];

                // Arahkan ke halaman dashboard yang sesuai dengan level akses
                if ($user['level'] == 'Manager') {
                    header('Location: ../../Views/Dashboard.php?page=Home');
                } else if ($user['level'] == 'Admin') {
                    header('Location: ../../Views/Dashboard.php?page=Home');
                } else if ($user['level'] == 'Teller') {
                    header('Location: ../../Views/Dashboard.php?page=Home');
                } else if ($user['level'] == 'CS') {
                    header('Location: ../../Views/Dashboard.php?page=Home');
                } else if ($user['level'] == 'Marketing') {
                    header('Location: ../../Views/Dashboard.php?page=Home');
                } else if ($user['level'] == 'Surveyor') {
                    header('Location: ../../Views/Dashboard.php?page=Home');
                } else {
                    header('Location: ../../Views/Dashboard.php?page=Home');
                }
            } else {
                echo "<script>$(function() {var Toast = Swal.mixin({toast: true,position: 'top-end',showConfirmButton: false,timer: 3000});
                toastr.info('Email atau password salah.', '', {onHidden: function() {window.location.href = 'Login.php';}});});</script>";
            }
        } else {
            echo "<script>$(function() {var Toast = Swal.mixin({toast: true,position: 'top-end',showConfirmButton: false,timer: 3000});
            toastr.info('Email atau password salah.', '', {onHidden: function() {window.location.href = 'Login.php';}});});</script>";
        }
    }
}
?>
