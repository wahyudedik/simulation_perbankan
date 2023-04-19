<?php

if (isset($_GET['id_nasabah'])) {
    $id = $_GET['id_nasabah'];

    $sql = "SELECT * FROM data_nasabah WHERE id_nasabah='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
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
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Simpanan</a></li>
                    <li class="breadcrumb-item active">Tambah Data CIF</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="../Models/Customer_Service/Generate_Cif.php" method="post" enctype="multipart/form-data">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">File Informasi</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>ID Nasabah</label>
                            <input type="hidden" class="form-control" placeholder="ID Nasabah" name="id_nasabah" value="<?php echo $id ?>" >
                            <input type="text" class="form-control" placeholder="ID Nasabah" name="" value="<?php echo $id ?> | <?php echo $row['nama_depan']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label>ID Jenis Simpanan</label>
                            <select class="select2bs4" multiple="multiple" data-placeholder="ID Jenis Simpanan" style="width: 100%;" name="id_jenis_simpanan" required>
                                <?php
                                $sql = "SELECT * FROM jenis_simpanan";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='" . $row['id_jenis_simpanan'] . "'>" . $row['id_jenis_simpanan'] . ' | ' . $row['nama_jenis_simpanan'] . "</option>";
                                    }
                                } else {
                                    echo "Tidak ada data.";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Rekening</label>
                            <input type="text" class="form-control" placeholder="Nama Rekening" name="nama_rekening">
                        </div>
                        <div class="form-group col-md-6">
                            <label>PIN</label>
                            <input type="text" class="form-control" placeholder="Masukkan PIN" name="pin">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit_generate_cif" value="Simpan" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
