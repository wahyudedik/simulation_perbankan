<?php
// Menerima input dari URL
$page = isset($_GET['page']) ? $_GET['page'] : 'Home';

// Menentukan halaman yang akan ditampilkan berdasarkan input
switch ($page) {
    case 'Home':
        // Tampilkan halaman home
        include 'Home.php';
        break;
    case 'bm':
        // Tampilkan halaman home
        include 'Branch_Manager/bm.php';
        break;
    case 'Hak_Akses':
        include 'Branch_Manager/Hak_Akses.php';
        break;
    case 'cs':
        include 'Customer_Service/cs.php';
        break;
    case 'Simpanan':
        include 'Customer_Service/Simpanan.php';
        break;
    case 'Detail_Nasabah':
        include 'Customer_Service/Detail_Nasabah.php';
        break;
    case 'Detail_Jenis_Simpanan':
        include 'Customer_Service/Detail_Jenis_Simpanan.php';
        break;
    case 'Tambah_Cif':
        include 'Customer_Service/Tambah_Cif.php';
        break;
    case 'Detail_Tambah_Cif':
        include 'Customer_Service/Detail_Tambah_Cif.php';
        break;
    case 'Generate_Cif':
        include 'Customer_Service/Generate_Cif.php';
        break;
    case 'Detail_Generate_Cif':
        include 'Customer_Service/Detail_Generate_Cif.php';
        break;
    case 'Teller':
        include 'Teller/Teller.php';
        break;
    case 'Tabungan':
        include 'Teller/Transaksi_Simpanan.php';
        break;
    case 'Deposit_Simpanan':
        include 'Teller/Deposit_Simpanan.php';
        break;
    case 'Withdraw_Simpanan':
        include 'Teller/Withdraw_Simpanan.php';
        break;
    case 'Marketing':
        include 'Marketing/Marketing.php';
        break;
    case 'Produk_Simpanan':
        include 'Marketing/Produk_Simpanan.php';
        break;
    case 'Produk_SimpananBerjangka':
        include 'Marketing/Produk_SimpananBerjangka.php';
        break;
    case 'Produk_Pinjaman':
        include 'Marketing/Produk_Pinjaman.php';
        break;
    default:
        // Jika input tidak valid, tampilkan halaman error
        include 'Error.php';
        break;
}
