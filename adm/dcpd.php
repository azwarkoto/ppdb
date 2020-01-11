<?php require_once 'header.php'; ?>
<style media="screen">
  label.space{
    float: left;
    width: 120px;
  }
</style>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Data Calon Peserta Didik Baru</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Jurusan</th>
                  <th>Asal Sekolah</th>
                  <th>Tempat, Tanggal Lahir</th>
                  <th>Bapak</th>
                  <th>Ibu</th>
                  <th>Alamat</th>
                  <th>NHUN</th>
                  <th colspan="3">Act</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $data = mysqli_query($conn,"SELECT * FROM biodata JOIN jurusan USING(kdjurusan) GROUP BY kdjurusan ORDER BY nama ASC");
                $no=1;
                while ($ddata = mysqli_fetch_assoc($data)) {
                  ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $ddata['nama']; ?></td>
                    <td><?php echo $ddata['namajurusan'] ?></td>
                    <td><?php echo $ddata['asalsekolah']; ?></td>
                    <td><?php echo $ddata['tempatlahir'].", ".$ddata['tanggallahir']; ?></td>
                    <td><?php echo $ddata['namabapak']; ?></td>
                    <td><?php echo $ddata['namaibu']; ?></td>
                    <td><?php echo $ddata['alamat']; ?></td>
                    <td><?php echo $ddata['nhun']; ?></td>
                    <td>
                      <a href="act/p_res_cpd.php?usr=<?php echo $ddata['username'] ?>" class="btn btn-danger" data-toggle="tooltip" title="Password Username akan di reset menjadi '123'"><i class="fas fa-recycle"></i> Pwd</a>
                    </td>
                    <td>
                      <a href="act/p_res_pass_cpd.php?usr=<?php echo $ddata['username'] ?>" class="btn btn-warning" data-toggle="tooltip" title="Status Akan direset menjadi 1 dan dapat mengikuti ujian"><i class="fas fa-recycle"></i> Status</a>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#infonilai_<?php echo $ddata['username'] ?>">
                        <i class="fas fa-info-circle"></i>&nbsp;Ujian
                      </button>
                    </td>
                  </tr>

                  <div class="modal fade" id="infonilai_<?php echo $ddata['username'] ?>" tabindex="-1" role="dialog" aria-labelledby="infonilai_<?php echo $ddata['username'] ?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="infonilai_<?php echo $ddata['username'] ?>">Informasi Nilai Calon Peserta Didik</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php
                          $nhun = $ddata['nhun'];
                          $username = $ddata['username'];
                          $hslujian = mysqli_fetch_assoc(mysqli_query($conn,"SELECT nilai FROM nilai JOIN statuscpd USING(username) WHERE username='$username' AND statuscpd.status=3"));
                           ?>
                           <p><label for="" class="space">NHUN </label>
                             <strong><label for="">: <?php echo $nhun ?></label></strong></p>
                           <p><label for="" class="space">Ujian Bersama </label>
                             <strong><label for="">: <?php echo $hslujian['nilai']; ?></label></strong></p>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <?php
                }
                 ?>
              </tbody>
            </table>
          </div>

        </div>


        <!-- /.container-fluid -->

<?php require_once 'footer.php'; ?>
