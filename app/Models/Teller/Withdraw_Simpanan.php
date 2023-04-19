<?php
if(isset($_POST['withdraw_simpanan'])){
    include '../../../database/config.php';
    $account_number = $_POST['account_number'];
    $jumlah = $_POST['jumlah'];

    $sql = "SELECT * FROM cif_simpanan WHERE account_number = '$account_number'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $id_cif_simpanan = $row['id_cif_simpanan'];
    $nama_rekening = $row['nama_rekening'];
    $waktu_transaksi = date('Y-m-d H:i:s'); // format datetime: yyyy-mm-dd hh:mm:ss
    $create_at = date('Y-m-d H:i:s'); // format datetime: yyyy-mm-dd hh:mm:ss
    $update_at = date('Y-m-d H:i:s'); // format datetime: yyyy-mm-dd hh:mm:ss

    if ($row) {
        // Update saldo CIF SIMPANAN
        $transaksi = $row['saldo'] - $jumlah;
        $query = "UPDATE cif_simpanan SET saldo='$transaksi', updated_at = '$update_at' WHERE account_number = '$account_number'";
        mysqli_query($conn, $query);
    
        // Tambahkan transaksi ke database
        $query = "INSERT INTO transaksi_simpanan(id_cif_simpanan, `nama_rekening`, `account_number`, `jumlah`, `jenis_transaksi`, `waktu_transaksi`, `create_at`, `update_at`) 
        VALUES ('$id_cif_simpanan','$nama_rekening','$account_number','$jumlah','Withdraw','$waktu_transaksi','$create_at','$update_at')";
        mysqli_query($conn, $query);
        echo "Transaksi simpanan berhasil.";
        header('location:../../Views/Dashboard.php?page=Tabungan');
    } else {
        echo "Data nasabah tidak ditemukan.";
        header('location:../../Views/Dashboard.php?page=Tabungan');
    }

}