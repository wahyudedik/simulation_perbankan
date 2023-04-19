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
                      <li class="breadcrumb-item active">Tabungan</li>
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
                          <div class="row">
                          <div class="col-6">
                            <a href="Dashboard.php?page=Deposit_Simpanan" type='button' class='btn btn-primary btn-block'><i class='fa fa-plus'></i> Deposit</a>
                          </div>
                          <div class="col-6">
                            <a href="Dashboard.php?page=Withdraw_Simpanan" type='button' class='btn btn-primary btn-block'><i class='fa fa-minus'></i> Withdraw</a>
                          </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <?php

                            $sql = "SELECT * FROM transaksi_simpanan";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                echo "<table id='simpanan' class='table table-bordered table-striped'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>No</th>";
                                echo "<th>ID CIF Simpanan</th>";
                                echo "<th>Nama Rekening</th>";
                                echo "<th>Nomor Rekening</th>";
                                echo "<th>Jumlah</th>";
                                echo "<th>Jenis Transaksi</th>";
                                echo "<th>Waktu Transaksi</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $no . "</td>";
                                    echo "<td>" . $row["id_cif_simpanan"] . "</td>";
                                    echo "<td>" . $row["nama_rekening"] . "</td>";
                                    echo "<td>" . $row["account_number"] . "</td>";
                                    echo "<td>" . $row["jumlah"] . "</td>";
                                    echo "<td>" . $row["jenis_transaksi"] . "</td>";
                                    echo "<td>" . $row["waktu_transaksi"] . "</td>";
                                    echo "</tr>";
                                    $no++;
                                }
                                echo "</tbody>";
                                echo "<tfoot>";
                                echo "<tr>";
                                echo "<th>No</th>";
                                echo "<th>ID CIF Simpanan</th>";
                                echo "<th>Nama Rekening</th>";
                                echo "<th>Nomor Rekening</th>";
                                echo "<th>Jumlah</th>";
                                echo "<th>Jenis Transaksi</th>";
                                echo "<th>Waktu Transaksi</th>";
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