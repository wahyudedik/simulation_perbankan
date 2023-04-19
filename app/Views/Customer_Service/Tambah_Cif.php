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
<?php include '../Models/Customer_Service/Add_Simpanan.php'; ?>
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <form action="" method="post" enctype="multipart/form-data">
              <div class="card card-default">
                  <div class="card-header">
                      <h3 class="card-title">Data Diri</h3>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="form-group col-md-4">
                              <label>Nama Depan</label>
                              <input type="text" class="form-control" placeholder="Nama Depan" name="nama_depan" required>
                          </div>
                          <div class="form-group col-md-4">
                              <label>Nama Belakang</label>
                              <input type="text" class="form-control" placeholder="Nama Belakang" name="nama_belakang" required>
                          </div>
                          <div class="form-group col-md-4">
                              <label>Nama Alias</label>
                              <input type="text" class="form-control" placeholder="Nama Alias" name="nama_alias" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Jenis Kelamin</label>
                              <select class="select2bs4" multiple="multiple" data-placeholder="Jenis Kelamin" style="width: 100%;" name="jenis_kelamin" required>
                                  <option value="Laki-laki">Laki-laki</option>
                                  <option value="Perempuan">Perampuan</option>
                              </select>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Status Pernikahan</label>
                              <select class="select2bs4" multiple="multiple" data-placeholder="Status Pernikahan" style="width: 100%;" name="status_pernikahan" required>
                                  <option value="Menikah">Menikah</option>
                                  <option value="Lajang">Lajang</option>
                                  <option value="Janda/Duda">Janda/Duda</option>
                              </select>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Tempat Lahir</label>
                              <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Tanggal Lahir</label>
                              <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" required>
                          </div>
                          <div class="form-group col-md-4">
                              <label>Kewarganegaraan</label>
                              <select class="select2bs4" multiple="multiple" data-placeholder="Kewarganegaraan" style="width: 100%;" name="kewarganegaraan" required>
                                  <option value="WNI">WNI</option>
                                  <option value="WNA">WNA</option>
                              </select>
                          </div>
                          <div class="form-group col-md-4">
                              <label>Agama</label>
                              <select class="select2bs4" multiple="multiple" data-placeholder="Agama" style="width: 100%;" name="agama" required>
                                  <option value="Islam">Islam</option>
                                  <option value="Budha">Budha</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Kristen">Kristen</option>
                                  <option value="Katholik">Katholik</option>
                                  <option value="Kong Hu Cu">Kong Hu Cu</option>
                              </select>
                          </div>
                          <div class="form-group col-md-4">
                              <label>Nama Ibu Kandung</label>
                              <input type="text" class="form-control" placeholder="Nama Ibu Kandung" name="nama_gadis_ibu_kandung" required>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card card-default">
                  <div class="card-header">
                      <h3 class="card-title">ID Card</h3>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="form-group col-md-6">
                              <label>Tanda Pengenal</label>
                              <select class="select2bs4" multiple="multiple" data-placeholder="Tanda Pengenal" style="width: 100%;" name="tanda_pengenal" required>
                                  <option value="KTP">KTP</option>
                                  <option value="KITAS/KITAP">KITAS/KITAP</option>
                                  <option value="Paspor">Paspor</option>
                              </select>
                          </div>
                          <div class="form-group col-md-6">
                              <label>No.</label>
                              <input type="text" class="form-control" placeholder="No Tanda Pengenal" name="no_tanda_pengenal" required>
                          </div>
                          <div class="form-group col-md-4">
                              <label>Berlaku s/d</label>
                              <input type="date" class="form-control" placeholder="Berlaku s/d" name="berlaku_sd" required>
                          </div>
                          <div class="form-group col-md-4">
                              <label>Tempat di Terbitkan</label>
                              <input type="text" class="form-control" placeholder="Di Terbitkan" name="tempat_diterbitkan" required>
                          </div>
                          <div class="form-group col-md-4">
                              <label>Tgl di Terbitkan</label>
                              <input type="date" class="form-control" placeholder="Di Terbitkan Tgl" name="tgl_diterbitkan" required>
                          </div>
                          <div class="form-group col-md-3">
                              <label>NPWP</label>
                              <select class="select2bs4" multiple="multiple" data-placeholder="NPWP" style="width: 100%;" name="npwp" required>
                                  <option value="Ada">Ada</option>
                                  <option value="Tidak Ada">Tidak Ada</option>
                              </select>
                          </div>
                          <div class="form-group col-md-3">
                              <label>No.</label>
                              <input type="text" class="form-control" placeholder="No NPWP" name="no_npwp" required>
                          </div>
                          <div class="form-group col-md-3">
                              <label>Tempat di Terbitkan</label>
                              <input type="text" class="form-control" placeholder="Di Terbitkan" name="tempat_diterbitkan_npwp" required>
                          </div>
                          <div class="form-group col-md-3">
                              <label>Tgl di Terbitkan</label>
                              <input type="date" class="form-control" placeholder="Di Terbitkan Tgl" name="tgl_diterbitkan_npwp">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card card-default">
                  <div class="card-header">
                      <h3 class="card-title">Alamat</h3>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="form-group col-md-6">
                              <label>Alamat</label>
                              <input type="text" class="form-control" placeholder="Alamat Tempat Tinggal" name="alamat" required>
                          </div>
                          <div class="form-group col-md-1">
                              <label>RT</label>
                              <input type="text" class="form-control" placeholder="RT" name="rt" required>
                          </div>
                          <div class="form-group col-md-1">
                              <label>RW</label>
                              <input type="text" class="form-control" placeholder="RW" name="rw" required>
                          </div>
                          <div class="form-group col-md-2">
                              <label>Desa</label>
                              <input type="text" class="form-control" placeholder="Desa" name="desa" required>
                          </div>
                          <div class="form-group col-md-2">
                              <label>Kecamatan</label>
                              <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" required>
                          </div>
                          <div class="form-group col-md-2">
                              <label>Kode Pos</label>
                              <input type="text" class="form-control" placeholder="Kode Pos" name="kodepos" required>
                          </div>
                          <div class="form-group col-md-2">
                              <label>Kota</label>
                              <input type="text" class="form-control" placeholder="Kota" name="kota" required>
                          </div>
                          <div class="form-group col-md-4">
                              <label>Provinsi</label>
                              <input type="text" class="form-control" placeholder="Provinsi" name="provinsi" required>
                          </div>
                          <div class="form-group col-md-4">
                              <label>Negara</label>
                              <input type="text" class="form-control" placeholder="Negara" name="negara" required>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Status Tempat Tinggal</label>
                              <select class="select2bs4" multiple="multiple" data-placeholder="Status Tempat Tinggal" style="width: 100%;" name="status_tempat_tinggal" required>
                                  <option value="Milik Sendiri">Milik Sendiri</option>
                                  <option value="Milik Keluarga">Milik Keluarga</option>
                                  <option value="Rumah Dinas">Rumah Dinas</option>
                                  <option value="Milik Sendiri di Jaminkan">Milik Sendiri Dijaminkan</option>
                                  <option value="Sewa/Kontrak">Sewa/Kontrak</option>
                              </select>
                          </div>
                          <div class="form-group col-md-3">
                              <label>No.HP</label>
                              <input type="text" class="form-control" placeholder="08xxxxxx" name="no_hp" required>
                          </div>
                          <div class="form-group col-md-3">
                              <label>Email</label>
                              <input type="email" class="form-control" placeholder="Email Aktif" name="email" required>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card card-default">
                  <div class="card-header">
                      <h3 class="card-title">File Informasi</h3>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="form-group col-md-6">
                              <label>Pendidikan</label>
                              <select class="select2bs4" multiple="multiple" data-placeholder="Pendidikan" style="width: 100%;" name="pendidikan" required>
                                  <option value="SD">SD</option>
                                  <option value="SMP">SMP</option>
                                  <option value="SMA/K">SMA/K</option>
                                  <option value="D3">D3</option>
                                  <option value="S1">S1</option>
                                  <option value="S2">S2</option>
                                  <option value="S3">S3</option>
                                  <option value="Lainnya">Lainnya</option>
                              </select>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Pekerjaan</label>
                              <select class="select2bs4" multiple="multiple" data-placeholder="Pekerjaan" style="width: 100%;" name="pekerjaan" required>
                                  <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                  <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                  <option value="Wiraswasta">Wiraswasta</option>
                                  <option value="Pegawai Swasta">Pegawai Swasta</option>
                                  <option value="Pegawai Negeri">Pegawai Negeri</option>
                                  <option value="TNI/Polisi">TNI/Polisi</option>
                                  <option value="Pensiunan">Pensiunan</option>
                                  <option value="Guru">Guru</option>
                                  <option value="Lainnya">Lainnya</option>
                              </select>
                          </div>
                          <div class="form-group col-md-12">
                              <input type="file" name="foto">
                          </div>
                      </div>
                  </div>
                  <div class="card-footer">
                      <button type="submit" name="submit_add_cif_simpanan" value="Simpan" class="btn btn-primary">Simpan</button>
                  </div>
              </div>
      </form>
      </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->