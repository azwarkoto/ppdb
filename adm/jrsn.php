<?php require_once 'header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Jurusan yang dibuka</h1>

          <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addjurusan">
            <i class="fas fa-plus-circle"></i>&nbsp;Tambah Jurusan
          </button>

          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Jurusan</th>
                      <th>Kuota</th>
                      <th colspan="2">Act</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $data = mysqli_query($conn,"SELECT * FROM jurusan ORDER BY namajurusan ASC");
                    $no=1;
                    while ($ddata = mysqli_fetch_assoc($data)) {
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $ddata['namajurusan'] ?></td>
                        <td><?php echo $ddata['kuotajurusan'] ?></td>
                        <td>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $ddata['kdjurusan'] ?>">
                            <i class="fas fa-edit"></i>&nbsp;Edit Jurusan
                          </button>
                        </td>
                        <td>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $ddata['kdjurusan'] ?>">
                            <i class="fas fa-trash"></i>&nbsp;Hapus Jurusan
                          </button>
                        </td>
                      </tr>

                      <!-- Hapus Modal -->
                      <div class="modal fade" id="hapus<?php echo $ddata['kdjurusan'] ?>" tabindex="-1" role="dialog" aria-labelledby="#hapus<?php echo $ddata['kdjurusan'] ?>" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="hapus<?php echo $ddata['kdjurusan'] ?>">Yakin Menghapus Jurusan?</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Anda akan menghapus data jurusan <?php echo $ddata['namajurusan'] ?>, Klik Hapus untuk melanjutkan
                              <form class="" action="" method="post">
                                <input type="hidden" name="kdjurusandel" value="<?php echo $ddata['kdjurusan'] ?>" id="">
                            </div>
                            <div class="modal-footer">
                              <button type="submit" name="btndeljrsn" class="btn btn-danger">Hapus</button>
                                </form>
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                      if (isset($_POST['btndeljrsn'])) {
                        $kdjurusan = $_POST['kdjurusandel'];
                        $hapus = mysqli_query($conn,"DELETE FROM jurusan WHERE kdjurusan='$kdjurusan'");
                        if ($hapus) {
                          redirect("Berhasil Menghapus Jurusan","index.php?to=jrsn");
                        }else {
                          redirect("Gagal Menghapus Jurusan","index.php?to=jrsn");
                        }
                      }
                      ?>
                      <!-- Edit Modal -->
                      <div class="modal fade" id="edit<?php echo $ddata['kdjurusan'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit<?php echo $ddata['kdjurusan'] ?>" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="edit<?php echo $ddata['kdjurusan'] ?>">Edit Jurusan <?php echo ucwords($ddata['namajurusan']) ?></h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form class="" action="" method="post">
                                <input type="hidden" name="kdjurusanedt" value="<?php echo $ddata['kdjurusan'] ?>">
                              <div class="form-group"><input type="text" name="namajurusanedt" value='<?php echo $ddata['namajurusan'] ?>' placeholder="Nama Jurusan" required id="" class="form-control"></div>
                               <div class="form-group"><input type="number" name="kuotajurusanedt" value="<?php echo $ddata['kuotajurusan'] ?>" placeholder="Kuota Jurusan" required name="" id="" class="form-control"></div>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-warning" name="btnedtjurusan">Edit</button>
                              </form>
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                      if (isset($_POST['btnedtjurusan'])) {
                        $kdjurusanedt = $_POST['kdjurusanedt'];
                        $namajurusanedt = $_POST['namajurusanedt'];
                        $kuotajurusanedt = $_POST['kuotajurusanedt'];
                        $edit = mysqli_query($conn,"UPDATE jurusan SET namajurusan='$namajurusanedt', kuotajurusan='$kuotajurusanedt' WHERE kdjurusan='$kdjurusanedt'");
                        if ($edit) {
                          redirect("Berhasil Edit Jurusan","index.php?to=jrsn");
                        }else {
                          redirect("Gagal Edit Jurusan","index.php?to=jrsn");
                        }
                      }
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
