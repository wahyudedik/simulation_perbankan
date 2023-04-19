<?php

if (isset($_GET['id_cif_simpanan'])) {
    $id = $_GET['id_cif_simpanan'];

    $sql = "SELECT * FROM cif_simpanan WHERE id_cif_simpanan ='$id'";
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
                    <li class="breadcrumb-item active">Detail CIF</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="../Models/Customer_Service/Generate_Cif_Lnj.php" method="post" enctype="multipart/form-data">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">File Informasi</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-2">
                            <label>ID CIF</label>
                            <input type="hidden" class="form-control" placeholder="ID CIF" name="id_cif_simpanan" value="<?php echo $row['id_cif_simpanan']; ?>" >
                            <input type="text" class="form-control" value="<?php echo $row['id_cif_simpanan']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-2">
                            <label>ID Nasabah</label>
                            <input type="hidden" class="form-control" placeholder="ID Nasabah" name="id_nasabah" value="<?php echo $row['id_nasabah']; ?>" >
                            <input type="text" class="form-control" value="<?php echo $row['id_nasabah']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-2">
                            <label>ID Jenis Simpanan</label>
                            <input type="hidden" class="form-control" placeholder="ID Jenis Simpanan" name="id_jenis_simpanan" value="<?php echo $row['id_jenis_simpanan']; ?>" >
                            <input type="text" class="form-control" value="<?php echo $row['id_jenis_simpanan']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Rekening</label>
                            <input type="hidden" class="form-control" placeholder="Nama Rekening" name="nama_rekening" value="<?php echo $row['nama_rekening']; ?>" >
                            <input type="text" class="form-control" value="<?php echo $row['nama_rekening']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-2">
                            <label>PIN</label>
                            <input type="hidden" class="form-control" placeholder="PIN" name="pin" value="<?php echo $row['pin']; ?>" >
                            <input type="text" class="form-control" value="<?php echo $row['pin']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Nomor Rekening</label>
                            <input type="hidden" class="form-control" placeholder="Nomor Rekening" name="account_number" value="<?php echo $row['account_number']; ?>" >
                            <input type="text" class="form-control" value="<?php echo $row['account_number']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Saldo</label>
                            <input type="hidden" class="form-control" placeholder="Saldo" name="saldo" value="<?php echo $row['saldo']; ?>" >
                            <input type="text" class="form-control" value="<?php echo $row['saldo']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-12">
                            <label>File CIF</label>
                            <input type="file" placeholder="Foto CIF" name="foto">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit_generate_cif_lnj" value="Simpan" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->