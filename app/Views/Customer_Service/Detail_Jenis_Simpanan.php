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
                    <li class="breadcrumb-item active">Jenis Simpanan</li>
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
                        <h3 class="card-title">Jenis Simpanan</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        $id_jenis_simpanan = $_GET['id'];
                        $sql = "SELECT * FROM jenis_simpanan WHERE id_jenis_simpanan  = '$id_jenis_simpanan'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table id='example2' class='table table-bordered table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>ID</th>";
                            echo "<th>Nama Jenis Simpanan</th>";
                            echo "<th>Potongan/Bulan</th>";
                            echo "<th>File</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row["id_jenis_simpanan"] . "</td>";
                                echo "<td>" . $row["nama_jenis_simpanan"] . "</td>";
                                echo "<td>" . $row["potongan_per_bulan"] . "</td>";
                                echo "<td>" . $row["file"] . "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "<tfoot>";
                            echo "<tr>";
                            echo "<th>ID</th>";
                            echo "<th>Nama Jenis Simpanan</th>";
                            echo "<th>Potongan/Bulan</th>";
                            echo "<th>File</th>";
                            echo "</tr>";
                            echo "</tfoot>";
                            echo "</table>";
                        } else {
                            echo "Tidak ada data.";
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