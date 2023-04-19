<?php
// buat koneksi ke database
include '../../../database/config.php';
// cek apakah parameter id terdapat pada URL
if (isset($_GET["id"])) {
    // ambil id dari parameter URL
    $id = $_GET["id"];

    // query untuk menghapus data berdasarkan id
    $sql = "DELETE FROM users WHERE id=$id";

    // jalankan query hapus data
    if (mysqli_query($conn, $sql)) {
        // redirect ke halaman list data
        header("Location: ../../Views/Dashboard.php?page=Hak_Akses");
        exit();
    } else {
        echo "Error deleting data: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
