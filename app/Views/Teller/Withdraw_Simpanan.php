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
                      <li class="breadcrumb-item"><a href="#">Tabungan</a></li>
                      <li class="breadcrumb-item active">Withdraw</li>
                  </ol>
              </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <form action="../Models/Teller/Withdraw_Simpanan.php" method="post" enctype="multipart/form-data">
              <div class="card card-default">
                  <div class="card-header">
                      <h3 class="card-title">Data Diri</h3>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="form-group col-md-6">
                              <label>Masukkan Nomor Rekening</label>
                              <select class="select2bs4" multiple="multiple" data-placeholder="Masukkan Nomor Rekening" style="width: 100%;" name="account_number" required>
                                  <?php
                                    $sql = "SELECT * FROM cif_simpanan";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='" . $row['account_number'] . "'>" . $row['account_number'] . ' | ' . $row['nama_rekening'] . "</option>";
                                        }
                                    } else {
                                        echo "Tidak ada data.";
                                    }
                                    ?>
                              </select>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Jumlah Transaksi</label>
                              <input type="text" class="form-control" placeholder="Jumlah Transaksi" name="jumlah" required>
                          </div>
                      </div>
                  </div>
                  <div class="card-footer">
                      <button type="submit" name="withdraw_simpanan" value="Simpan" class="btn btn-primary">Simpan</button>
                  </div>
              </div>
          </form>
      </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->