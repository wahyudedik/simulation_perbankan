<?php
if (isset($_POST['submit_generate_cif'])) {
    include '../../../database/config.php';
    include '../../Controllers/Generate_Nomor_Rekening.php';
    $id_nasabah = $_POST['id_nasabah'];
    $id_jenis_simpanan  = $_POST['id_jenis_simpanan'];
    $nama_rekening = $_POST['nama_rekening'];
    $pin = $_POST['pin'];
    $created_at = date('Y-m-d H:i:s'); // format datetime: yyyy-mm-dd hh:mm:ss
    $update_at = date('Y-m-d H:i:s'); // format datetime: yyyy-mm-dd hh:mm:ss
    $isUnique = false;

    // Hash password
    $password_hashed = password_hash($pin, PASSWORD_DEFAULT);
    // Tambahkan pengguna baru ke dalam tabel user
    $query_users = "INSERT INTO users (name, email, password, level, create_at, update_at) 
      VALUES ('$nama_rekening', '$accountNumber', '$password_hashed', 'Nasabah', '$created_at', '$update_at')";
    mysqli_query($conn, $query);

    while (!$isUnique) {
        $accountNumber = generateAccountNumber();

        if (!isAccountNumberExists($conn, $accountNumber)) {
            $isUnique = true;
        }
    }
    
    // Hash password
    $password_hashed = password_hash($pin, PASSWORD_DEFAULT);
    // Tambahkan pengguna baru ke dalam tabel user
    $query_users = "INSERT INTO users (name, email, password, level, create_at, update_at) 
    VALUES ('$nama_rekening', '$accountNumber', '$password_hashed', 'Nasabah', '$created_at', '$update_at')";
    mysqli_query($conn, $query);

    // Simpan nomor rekening ke dalam database
    $query = "INSERT INTO cif_simpanan (id_nasabah, id_jenis_simpanan, nama_rekening, `pin`, `account_number`, `saldo`, `foto`, `created_at`, `updated_at`) 
    VALUES ('$id_nasabah','$id_jenis_simpanan','$nama_rekening','$pin','$accountNumber','','','$created_at','$update_at')";
    if (mysqli_query($conn, $query)) {
        $id = mysqli_insert_id($conn);
        header("location: ../../Views/Dashboard.php?page=Detail_Generate_Cif&id_cif_simpanan=$id");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
