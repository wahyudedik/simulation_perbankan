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
                      <li class="breadcrumb-item active">Hak Akses</li>
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
              <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">Data Hak Akses</h3>
                  </div>
                  <div class="card-header">
                      <button type='button' class='btn btn-primary btn-block col-md-2' data-toggle='modal' data-target='#modal-default'><i class='fa fa-plus'></i> Tambah</button>
                  </div>
                  <div class="card-body">
                      <?php

                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            echo "<table id='example1' class='table table-bordered table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>No</th>";
                            echo "<th>Nama</th>";
                            echo "<th>Email</th>";
                            echo "<th>Password</th>";
                            echo "<th>Level</th>";
                            echo "<th>Aksi</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $no . "</td>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["password"] . "</td>";
                                echo "<td>" . $row["level"] . "</td>";
                                echo "<td>";
                                echo "<a href='../Models/Branch_Manager/Del_User.php?id=" . $row['id'] . "' class='btn btn-danger btn-block' onclick=\"return confirm('Anda yakin akan menghapus data ini?')\"><i class='fa fa-eraser'></i></a>";
                                echo "</td>";
                                echo "</tr>";
                                $no++;
                            }
                            echo "</tbody>";
                            echo "<tfoot>";
                            echo "<tr>";
                            echo "<th>No</th>";
                            echo "<th>Nama</th>";
                            echo "<th>Email</th>";
                            echo "<th>Password</th>";
                            echo "<th>Level</th>";
                            echo "<th>Aksi</th>";
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
      </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->