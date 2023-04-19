buatkan tutorial membuat sistem login dan register multi level dengan php 8 prosedural
<script>
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        toastr.info('Silakan Isi Semua Kolom', '', {
            onHidden: function() {
                window.location.href = 'Register.php';
            }
        });
    });
</script>

BUG :
1. MENU OPEN SIDEBAR
2. link dashboard.php berantakan
3. Login Seasone

Fitur :
1.	Modul BM (Read, Update, Delete)
<!--•	Login dan Logout-->
•	Laporan Harian Bulanan dan Tahunan untuk semua modul (Simpanan, Simpanan Berjangka, Pinjaman)
•	Manajemen admin
•	Manajemen teler
•	Manajemen cs
•	Manajemen marketing
•	Manajemen surveyor
<!--•	Hak Akses (Read, Create, Delete)-->

2.	Modul Admin (Read, Update, Delete)
•	Login dan Logout
•	Manajemen Nasabah
•	Manajemen Transaksi
•	Berita

3.	Modul Teller (Create, Read)
<!--•	Login dan Logout-->
<!--•	Membuat transaksi simpanan (Create, Read)-->
•   Membuat transaksi simpanan berjangka
•	Membuat transaksi pinjam

4.	Modul CS (Create, Read)
<!--•	Login dan Logout-->
<!--•	Simpanan (1) (Create, Read)-->
•	Simpanan Berjangka (1. deposito)
•	Pinjaman (1)

5.	Modul Nasabah (Read, Update)
•	Login dan Logout
•	Melihat Saldo
•	Mengirim Saldo
•	Berita
•	Mutasi 

6.	Modul Marketing (Read, Create)
<!--•	Login dan Logout-->
•	Membuat Penawaran Produk bank atau Kredit
•	Membuat Pengajuan Nasabah pinjaman
•	Laporan Nasabah Kredit
•	Fag/Berita

7.	Modul Surveyor (Read, Update)
•	Login dan Logout
•	Formulir survei
•	Laporan nasabah yang harus di Survey
