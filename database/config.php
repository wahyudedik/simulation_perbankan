<?php
// informasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbbankdigital";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
