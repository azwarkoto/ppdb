<?php require_once 'header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Daftar Peserta Didik Baru</h1>

          <div class="row justify-content-center">
            <div class="col-md-5">
              <form class="" action="" method="post">
                <label for="" class="control-label">Silahkan Pilih Jurusan</label>
                <?php
                $dtjurusan = mysqli_query($conn,"SELECT * FROM jurusan ORDER BY namajurusan ASC");
                 ?>
                <select name="kdjurusan" id="" class="form-control" required>
                  <?php while ($dtj = mysqli_fetch_assoc($dtjurusan)) {
                    ?>
                    <option value="<?php echo $dtj['kdjurusan'] ?>"><?php echo $dtj['namajurusan'] ?></option>
                    <?php
                  } ?>
                </select>
                <br>
                <button type="submit" class="btn btn-primary" name="btnshterterima">Tampilkan</button>
              </form>
            </div>
          </div>

          <?php
          if (isset($_POST['btnshterterima'])) {
            $kdjurusan = $_POST['kdjurusan'];
            $limit = mysqli_fetch_assoc(mysqli_query($conn,"SELECT kuotajurusan FROM jurusan WHERE kdjurusan='$kdjurusan'"));
            $limit1 = $limit['kuotajurusan'];
            $cpdterterima = mysqli_query($conn,"SELECT * FROM pd_terterima WHERE kdjurusan='$kdjurusan' ORDER BY nhun DESC LIMIT $limit1");
            //tampilkan
            ?>
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#simpandtpd">
              <i class="far fa-save"></i>&nbsp;Simpan Data <?php echo $kdjurusan ?>
            </button>
            <br>
            <small>Pastikan Menyimpan Data setelah sesuai tanggal</small>

            <div class="table-responsive">
              <br>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Asal Sekolah</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Bapak</th>
                    <th>Ibu</th>
                    <th>Alamat</th>
                    <th>NHUN</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  while ($ddata = mysqli_fetch_assoc($cpdterterima)) {
                      ?>
                      <tr>
                        <td><?php echo $ddata['nama']; ?></td>
                        <td><?php echo $ddata['namajurusan'] ?></td>
                        <td><?php echo $ddata['asalsekolah']; ?></td>
                        <td><?php echo $ddata['tempatlahir'].", ".$ddata['tanggallahir']; ?></td>
                        <td><?php echo $ddata['namabapak']; ?></td>
                        <td><?php echo $ddata['namaibu']; ?></td>
                        <td><?php echo $ddata['alamat']; ?></td>
                        <td><?php echo $ddata['nhun']; ?></td>
                      </tr>
                      <?php

                  }

                  ?>
                </tbody>
              </table>
            </div>

            <!-- Simpan Modal-->
            <div class="modal fade" id="simpandtpd" tabindex="-1" role="dialog" aria-labelledby="simpandtpd" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="simpandtpd">Yakin untuk Simpan Data Peserta Didik?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Data Peserta Didik ini akan di Simpan dan dinyatakan Terterima</p>
                    <form class="" action="act/p_sv_pd.php" method="post">
                      <input type="hidden" value="<?php echo $kdjurusan ?>" name="kdjurusanget" id="">
                      <input type="hidden" value="<?php echo $limit1 ?>" name="limit" id="">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="" required>Yakin untuk menyimpan
                      </label>
                    </div>
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-danger" name="yakinsimpan">Simpan</button>
                    </form>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                  </div>
                </div>
              </div>
            </div>
            <?php
          }
           ?>
        </div>
        <!-- /.container-fluid -->

<?php require_once 'footer.php'; ?>
