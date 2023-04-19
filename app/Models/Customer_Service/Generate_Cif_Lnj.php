<?php
if (isset($_POST['submit_generate_cif_lnj'])) {
    include '../../../database/config.php';
    $id_cif_simpanan = $_POST['id_cif_simpanan'];
    $id_nasabah  = $_POST['id_nasabah'];
    $id_jenis_simpanan = $_POST['id_jenis_simpanan'];
    $nama_rekening = $_POST['nama_rekening'];
    $pin = $_POST['pin'];
    $account_number = $_POST['account_number'];
    $saldo = $_POST['saldo'];
    $update_at = date('Y-m-d H:i:s'); // format datetime: yyyy-mm-dd hh:mm:ss
    $namaFoto = $_FILES['foto']['name'];
    $ukuranFoto = $_FILES['foto']['size'];
    $tmpFoto = $_FILES['foto']['tmp_name'];

    $extFoto = pathinfo($namaFoto, PATHINFO_EXTENSION);
    $extFoto = strtolower($extFoto);

    $allowedExt = array('jpg', 'jpeg', 'png');
    if (in_array($extFoto, $allowedExt)) {
        if ($ukuranFoto < 5000000) {
            if ($namaFoto != '') {
                $namaBaru = uniqid() . '.' . $extFoto;
                $folderUpload = "../../../resources/Uploads/" . $namaBaru;
                move_uploaded_file($tmpFoto, $folderUpload);

                $sql = "UPDATE cif_simpanan SET id_nasabah ='$id_nasabah', id_jenis_simpanan ='$id_jenis_simpanan', nama_rekening ='$nama_rekening', pin ='$pin', account_number ='$account_number', saldo ='$saldo', foto ='$namaBaru', updated_at ='$update_at' WHERE id_cif_simpanan = '$id_cif_simpanan'";
            } else {
                $sql = "UPDATE cif_simpanan SET id_nasabah ='$id_nasabah', id_jenis_simpanan ='$id_jenis_simpanan', nama_rekening ='$nama_rekening', pin ='$pin', account_number ='$account_number', saldo ='$saldo', updated_at ='$update_at' WHERE id_cif_simpanan = '$id_cif_simpanan'";
            }
            if (mysqli_query($conn, $sql)) {
                header('location:../../Views/Dashboard.php?page=Simpanan');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
            }
        } else {
            echo "<script>
                    $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                
                        toastr.info('Ukuran file terlalu besar, maksimal 5MB', '', {
                        });
                    });
                </script>";
        }
    } else {
        echo "<script>
                $(function() {
                    var Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });
            
                    toastr.info('Format file tidak didukung, hanya mendukung format JPG, JPEG, dan PNG', '', {
                    });
                });
            </script>";
    }
}
