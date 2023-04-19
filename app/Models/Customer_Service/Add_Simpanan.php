<?php
ob_start(); // start output buffering
if (isset($_POST['submit_add_cif_simpanan'])) {
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $nama_alias = $_POST['nama_alias'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $status_pernikahan = $_POST['status_pernikahan'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $nama_gadis_ibu_kandung = $_POST['nama_gadis_ibu_kandung'];
    $tanda_pengenal = $_POST['tanda_pengenal'];
    $no_tanda_pengenal = $_POST['no_tanda_pengenal'];
    $berlaku_sd = $_POST['berlaku_sd'];
    $tempat_diterbitkan = $_POST['tempat_diterbitkan'];
    $tgl_diterbitkan = $_POST['tgl_diterbitkan'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $agama = $_POST['agama'];
    $npwp = $_POST['npwp'];
    $no_npwp = $_POST['no_npwp'];
    $tempat_diterbitkan_npwp = $_POST['tempat_diterbitkan_npwp'];
    $tgl_diterbitkan_npwp = $_POST['tgl_diterbitkan_npwp'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kota = $_POST['kota'];
    $kodepos = $_POST['kodepos'];
    $provinsi = $_POST['provinsi'];
    $negara = $_POST['negara'];
    $status_tempat_tinggal = $_POST['status_tempat_tinggal'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $pendidikan = $_POST['pendidikan'];
    $pekerjaan = $_POST['pekerjaan'];
    
    $created_at = date('Y-m-d H:i:s'); // format datetime: yyyy-mm-dd hh:mm:ss
    $update_at = date('Y-m-d H:i:s'); // format datetime: yyyy-mm-dd hh:mm:ss

    $namaFoto = $_FILES['foto']['name'];
    $ukuranFoto = $_FILES['foto']['size'];
    $tmpFoto = $_FILES['foto']['tmp_name'];

    $extFoto = pathinfo($namaFoto, PATHINFO_EXTENSION);
    $extFoto = strtolower($extFoto);

    $allowedExt = array('jpg', 'jpeg', 'png');
    if (in_array($extFoto, $allowedExt)) {
        if ($ukuranFoto < 5000000) {
            $namaBaru = uniqid() . '.' . $extFoto;
            $folderUpload = "../../resources/Uploads/" . $namaBaru;
            move_uploaded_file($tmpFoto, $folderUpload);
            $sql = "INSERT INTO data_nasabah (id_nasabah, nama_depan, nama_belakang, nama_alias, jenis_kelamin, status_pernikahan, tempat_lahir, tgl_lahir, nama_gadis_ibu_kandung, tanda_pengenal, no_tanda_pengenal, berlaku_sd, tempat_diterbitkan, tgl_diterbitkan, kewarganegaraan, agama, npwp, no_npwp, tempat_diterbitkan_npwp, tgl_diterbitkan_npwp, alamat, rt, rw, desa, kecamatan, kota, kodepos, provinsi, negara, status_tempat_tinggal, no_hp, email, pendidikan, pekerjaan, foto, created_at, updated_at) 
                    VALUES ('','$nama_depan','$nama_belakang','$nama_alias','$jenis_kelamin','$status_pernikahan','$tempat_lahir','$tgl_lahir','$nama_gadis_ibu_kandung','$tanda_pengenal','$no_tanda_pengenal','$berlaku_sd','$tempat_diterbitkan','$tgl_diterbitkan','$kewarganegaraan','$agama','$npwp','$no_npwp','$tempat_diterbitkan_npwp','$tgl_diterbitkan_npwp','$alamat','$rt','$rw','$desa','$kecamatan','$kota','$kodepos','$provinsi','$negara','$status_tempat_tinggal','$no_hp','$email','$pendidikan','$pekerjaan','$namaBaru', '$created_at', '$update_at')";
            if (mysqli_query($conn, $sql)) {
                $id = mysqli_insert_id($conn);
                echo "<script>
                        $(function() {
                            var Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000
                            });
                    
                            toastr.info('Data Berhasil di Simpan.', '', {
                                onHidden: function() {
                                    window.location.href = 'Dashboard.php?page=Detail_Tambah_Cif&id_nasabah=$id';
                                }
                            });
                        });
                    </script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
                            onHidden: function() {
                                window.location.href = 'Dashboard.php?page=Tambah_Cif';
                            }
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
                            onHidden: function() {
                                window.location.href = 'Dashboard.php?page=Tambah_Cif';
                            }
                        });
                    });
                </script>";
    }
}
ob_end_flush(); // send output to browser
