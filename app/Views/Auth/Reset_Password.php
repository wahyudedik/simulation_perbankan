<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bank | Digital</title>

    <?php include 'Patch/css.php'; ?>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Bank</b>Digital</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

                <?php
                // Koneksi ke database
                include '../../../database/config.php';

                // Validasi data yang diinput
                $email = mysqli_real_escape_string($conn, $_GET['email']);
                $token = mysqli_real_escape_string($conn, $_GET['token']);
                if (empty($email) || empty($token)) {
                    echo "Link reset password tidak valid.";
                } else {
                    // Cari data pengguna berdasarkan email dan token
                    $query  = "SELECT * FROM user WHERE email='$email' AND reset_token='$token'";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) == 1) {
                        // Jika pengguna ditemukan, tampilkan form reset password
                ?>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="hidden" class="form-control" placeholder="email" value="<?php echo $email ?>" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="hidden" class="form-control" placeholder="token" value="<?php echo $token ?>" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block" name="submit">Change password</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                <?php
                    } else {
                        echo "Link reset password tidak valid.";
                    }
                }
                ?>

                <p class="mt-3 mb-1">
                    <a href="Login.php">Login</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <?php include 'Patch/js.php'; ?>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
  // Koneksi ke database
  include '../../../database/config.php';

  // Validasi data yang diinput
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $token = mysqli_real_escape_string($conn, $_POST['token']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  if (empty($email) || empty($token) || empty($password)) {
    echo "Data tidak lengkap.";
  } else {
    // Cari data pengguna berdasarkan email dan token
    $query  = "SELECT * FROM users WHERE email='$email' AND reset_token='$token'";
    $result = mysqli_query($conn, $query);
    $update_at = date('Y-m-d H:i:s'); // format datetime: yyyy-mm-dd hh:mm:ss

    if (mysqli_num_rows($result) == 1) {
      // Jika pengguna ditemukan, simpan password baru ke database
      $password = password_hash($password, PASSWORD_DEFAULT);
      $query  = "UPDATE users SET password='$password', reset_token='', update_at='$update_at'  WHERE email='$email'";
      mysqli_query($conn, $query);

      echo "Password baru berhasil disimpan.";
    } else {
      echo "Link reset password tidak valid.";
    }
  }
}
?>