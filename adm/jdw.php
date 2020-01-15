<?php
require_once 'header.php';

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Pengaturan Jadwal Ujian</h1>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addjdw">
            <i class="fas fa-plus-circle"></i>&nbsp;Tambah Jadwal
          </button>

          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Jurusan</th>
                      <th>Tanggal</th>
                      <th>Act</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $data = mysqli_query($conn,"SELECT * FROM jadwal JOIN jurusan USING(kdjurusan) ORDER BY jadwal ASC");
                    $nomo=1;
                    while ($ddata = mysqli_fetch_assoc($data)) {
                      ?>
                      <tr>
                        <td><?php echo $nomo++ ?></td>
                        <td><?php echo $ddata['namajurusan']; ?></td>
                        <td><?php echo $ddata['jadwal']; ?></td>
                        <td>
                          <?php
                          $kdjdw1 = $ddata['kdjadwal'];
                          $cpd = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(username) AS adauser FROM biodata WHERE kdjadwal='$kdjdw1'"));
                          if (empty($cpd['adauser'])) {
                            //gak ada
                            ?>
                            <a href="act/hp_jadwal.php?kdj=<?php echo $ddata['kdjadwal']; ?>" class="btn btn-danger">Hapus Jadwal</a>
                            <?php
                          }else {
                            //ada
                            ?><span class="btn btn-secondary">Jadwal Terisi</span><?php
                          }
                           ?>

                        </td>
                      </tr>
                      <?php
                    }
                     ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->

<?php require_once 'footer.php'; ?>
