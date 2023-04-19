<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM data_nasabah WHERE id_nasabah = '$id'";
    $result = mysqli_query($conn, $sql);
}
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="Dashboard.php?page=Home">Home</a></li>
                    <li class="breadcrumb-item"><a href="Dashboard.php?page=Simpanan">Simpanan</a></li>
                    <li class="breadcrumb-item active">Detail_Nasabah</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Nasabah</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id_nasabah'])) {
                            $id = $_GET['id_nasabah'];

                            $sql = "SELECT * FROM data_nasabah WHERE id_nasabah = '$id'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                echo "<table id='example2' class='table table-bordered table-striped'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>ID</th>";
                                echo "<th>Nama Depan</th>";
                                echo "<th>Nama Belakang</th>";
                                echo "<th>Nama Alias</th>";
                                echo "<th>Jenis Kelamin</th>";
                                echo "<th>Status Pernikahan</th>";
                                echo "<th>Tempat Lahir</th>";
                                echo "<th>Tanggal Lahir</th>";
                                echo "<th>Nama Ibu</th>";
                                echo "<th>Tanda Pengenal</th>";
                                echo "<th>No</th>";
                                echo "<th>Berlaku</th>";
                                echo "<th>Di Terbitkan</th>";
                                echo "<th>Tanggal</th>";
                                echo "<th>Kewarganegaraan</th>";
                                echo "<th>Agama</th>";
                                echo "<th>NPWP</th>";
                                echo "<th>No</th>";
                                echo "<th>Di Terbitkan</th>";
                                echo "<th>Tanggal</th>";
                                echo "<th>Alamat</th>";
                                echo "<th>RT</th>";
                                echo "<th>RW</th>";
                                echo "<th>Desa</th>";
                                echo "<th>Kecamatan</th>";
                                echo "<th>Kota</th>";
                                echo "<th>Kode Pos</th>";
                                echo "<th>Provinsi</th>";
                                echo "<th>Negara</th>";
                                echo "<th>Status Tempat Tinggal</th>";
                                echo "<th>No HP</th>";
                                echo "<th>Email</th>";
                                echo "<th>Pendidikan</th>";
                                echo "<th>Pekerjaan</th>";
                                echo "<th>Foto</th>";
                                echo "<td>Generate</td>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row["id_nasabah"] . "</td>";
                                    echo "<td>" . $row["nama_depan"] . "</td>";
                                    echo "<td>" . $row["nama_belakang"] . "</td>";
                                    echo "<td>" . $row["nama_alias"] . "</td>";
                                    echo "<td>" . $row["jenis_kelamin"] . "</td>";
                                    echo "<td>" . $row["status_pernikahan"] . "</td>";
                                    echo "<td>" . $row["tempat_lahir"] . "</td>";
                                    echo "<td>" . $row["tgl_lahir"] . "</td>";
                                    echo "<td>" . $row["nama_gadis_ibu_kandung"] . "</td>";
                                    echo "<td>" . $row["tanda_pengenal"] . "</td>";
                                    echo "<td>" . $row["no_tanda_pengenal"] . "</td>";
                                    echo "<td>" . $row["berlaku_sd"] . "</td>";
                                    echo "<td>" . $row["tempat_diterbitkan"] . "</td>";
                                    echo "<td>" . $row["tgl_diterbitkan"] . "</td>";
                                    echo "<td>" . $row["kewarganegaraan"] . "</td>";
                                    echo "<td>" . $row["agama"] . "</td>";
                                    echo "<td>" . $row["npwp"] . "</td>";
                                    echo "<td>" . $row["no_npwp"] . "</td>";
                                    echo "<td>" . $row["tempat_diterbitkan_npwp"] . "</td>";
                                    echo "<td>" . $row["tgl_diterbitkan_npwp"] . "</td>";
                                    echo "<td>" . $row["alamat"] . "</td>";
                                    echo "<td>" . $row["rt"] . "</td>";
                                    echo "<td>" . $row["rw"] . "</td>";
                                    echo "<td>" . $row["desa"] . "</td>";
                                    echo "<td>" . $row["kecamatan"] . "</td>";
                                    echo "<td>" . $row["kota"] . "</td>";
                                    echo "<td>" . $row["kodepos"] . "</td>";
                                    echo "<td>" . $row["provinsi"] . "</td>";
                                    echo "<td>" . $row["negara"] . "</td>";
                                    echo "<td>" . $row["status_tempat_tinggal"] . "</td>";
                                    echo "<td>" . $row["no_hp"] . "</td>";
                                    echo "<td>" . $row["email"] . "</td>";
                                    echo "<td>" . $row["pendidikan"] . "</td>";
                                    echo "<td>" . $row["pekerjaan"] . "</td>";
                                    echo "<td> <a href='../../resources/Uploads/". $row["foto"] ."' <img src='../../resources/Uploads/". $row["foto"] ."'>" . $row["foto"] . "</td>";
                                    echo "<td><a href='Dashboard.php?page=Generate_Cif&id_nasabah=" . $row["id_nasabah"] . "' class='btn btn-primary'>Generate</a></td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                echo "<tfoot>";
                                echo "<tr>";
                                echo "<th>ID</th>";
                                echo "<th>Nama Depan</th>";
                                echo "<th>Nama Belakang</th>";
                                echo "<th>Nama Alias</th>";
                                echo "<th>Jenis Kelamin</th>";
                                echo "<th>Status Pernikahan</th>";
                                echo "<th>Tempat Lahir</th>";
                                echo "<th>Tanggal Lahir</th>";
                                echo "<th>Nama Ibu</th>";
                                echo "<th>Tanda Pengenal</th>";
                                echo "<th>No</th>";
                                echo "<th>Berlaku</th>";
                                echo "<th>Di Terbitkan</th>";
                                echo "<th>Tanggal</th>";
                                echo "<th>Kewarganegaraan</th>";
                                echo "<th>Agama</th>";
                                echo "<th>NPWP</th>";
                                echo "<th>No</th>";
                                echo "<th>Di Terbitkan</th>";
                                echo "<th>Tanggal</th>";
                                echo "<th>Alamat</th>";
                                echo "<th>RT</th>";
                                echo "<th>RW</th>";
                                echo "<th>Desa</th>";
                                echo "<th>Kecamatan</th>";
                                echo "<th>Kota</th>";
                                echo "<th>Kode Pos</th>";
                                echo "<th>Provinsi</th>";
                                echo "<th>Negara</th>";
                                echo "<th>Status Tempat Tinggal</th>";
                                echo "<th>No HP</th>";
                                echo "<th>Email</th>";
                                echo "<th>Pendidikan</th>";
                                echo "<th>Pekerjaan</th>";
                                echo "<th>Foto</th>";
                                echo "<th>Generate</th>";
                                echo "</tr>";
                                echo "</tfoot>";
                                echo "</table>";
                            } else {
                                echo "Tidak ada data.";
                            }
                        }


                        mysqli_close($conn);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

