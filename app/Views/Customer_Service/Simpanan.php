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
                      <li class="breadcrumb-item active">Simpanan</li>
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
                          <h3 class="card-title">Data Nasabah Simpanan</h3>
                      </div>
                      <div class="card-header">
                          <a href="Dashboard.php?page=Tambah_Cif" type='button' class='btn btn-primary btn-block col-md-2'><i class='fa fa-plus'></i> Tambah</a>
                      </div>
                      <div class="card-body">
                          <?php

                            $sql = "SELECT * FROM cif_simpanan";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                echo "<table id='simpanan' class='table table-bordered table-striped'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>No</th>";
                                echo "<th>ID Nasabah</th>";
                                echo "<th>ID Jenis Simpanan</th>";
                                echo "<th>Nama Rekening</th>";
                                echo "<th>File</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $no . "</td>";
                                    echo "<td><a href='Dashboard.php?page=Detail_Nasabah&id={$row['id_nasabah']}'>" . $row["id_nasabah"] . "</a></td>";
                                    echo "<td><a href='Dashboard.php?page=Detail_Jenis_Simpanan&id={$row['id_jenis_simpanan']}'>" . $row["id_jenis_simpanan"] . "<a/></td>";
                                    echo "<td>" . $row["nama_rekening"] . "</td>";
                                    echo "<td><a href='../../resources/Uploads/". $row["foto"] ."' <img src='../../resources/Uploads/". $row["foto"] ."'>" . $row["foto"] . "</td>";
                                    echo "</tr>";
                                    $no++;
                                }
                                echo "</tbody>";
                                echo "<tfoot>";
                                echo "<tr>";
                                echo "<th>No</th>";
                                echo "<th>ID Nasabah</th>";
                                echo "<th>ID Jenis Simpanan</th>";
                                echo "<th>Nama Rekening</th>";
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