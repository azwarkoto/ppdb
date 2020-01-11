<?php require_once 'header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Pengaturan Soal</h1>
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Jurusan</th>
                      <th>Status Soal</th>
                      <th>Kelola Soal</th>
                      <th colspan="2">Act</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $data = mysqli_query($conn,"SELECT * FROM jurusan ORDER BY namajurusan ASC");
                    $no=1;
                    while ($ddata = mysqli_fetch_assoc($data)) {
                      $per_jurusan = $ddata['kdjurusan'];
                      $jwb = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(kdjwb) AS hasanswer FROM jwb WHERE kdjurusan='$per_jurusan'"));
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $ddata['namajurusan']; ?></td>
                        <td>
                          <?php
                          $ceksoal = mysqli_fetch_assoc(mysqli_query($conn,"SELECT kdsoal FROM soal WHERE kdjurusan='$per_jurusan'"));
                          if (!empty($ceksoal['kdsoal'])) {
                            // ADA
                            ?>
                           <span class="btn btn-success"><i class="fas fa-shield-alt"></i>&nbsp;Siap Digunakan</span>
                           </td>
                           <td>
                             <span class="btn btn-secondary"><i class="fab fa-expeditedssl"></i></span>
                           </td>
                           <td>
                             <a href="index2.php?to=shsoal&kdjrsn=<?php echo $ddata['kdjurusan'] ?>" target="_blank" class="btn btn-success"><i class="far fa-list-alt"></i>&nbsp;Lihat Soal</a>
                           </td>
                           <td>
                             <?php
                             if (empty($jwb['hasanswer'])) {
                               ?>
                               <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapussoal_<?php echo $ddata['kdjurusan']; ?>">
                                 <i class="fas fa-trash"></i>&nbsp;Hapus Soal
                               </button>
                               <?php
                             }else {
                               ?><span class="btn btn-secondary"><i class="fab fa-expeditedssl"></i></span><?php
                             }
                              ?>

                           </td>
                            <?php
                          }elseif (empty($ceksoal['kdsoal'])) {
                            // TIDAK ADA
                            ?>
                            <span class="btn btn-danger"><i class="fas fa-times-circle"></i>&nbsp;Belum Upload</span>
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kelsoal_<?php echo $ddata['kdjurusan']; ?>">
                              <i class="fas fa-cogs"></i>&nbsp;Kelola Soal
                            </button>
                          </td>
                          <td>
                            <span class="btn btn-secondary"><i class="fab fa-expeditedssl"></i></span>
                          </td>
                          <td>
                            <span class="btn btn-secondary"><i class="fab fa-expeditedssl"></i></span>
                          </td>
                            <?php
                          }
                           ?>


                      </tr>

                      <!-- Kelola Soal -->
                      <div class="modal fade" id="kelsoal_<?php echo $ddata['kdjurusan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="kelsoal_<?php echo $ddata['kdjurusan']; ?>">Kelola Soal Jurusan <?php echo $ddata['namajurusan'] ?></h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p><strong>Kode Jurusan : <?php echo $ddata['kdjurusan']; ?></strong></p>
                                <div class="form-group"><label for="" class="control-label">Download Template</label>
                                  <a href="template_soal_kosong_ppdb.xls" class="btn btn-success"><i class="far fa-file-excel"></i>&nbsp;Download</a>
                                </div>
                              <form class="" action="act/p_up_soal.php" method="post" enctype="multipart/form-data">
                                <div class="form-grop">
                                  <label for="exampleFormControlFile1">Upload File Template disini</label>
                                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="filesoal">
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" name="btnupfile" class="btn btn-primary">Upload Soal</button>
                              </form>
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Hapus Soal -->
                      <div class="modal fade" id="hapussoal_<?php echo $ddata['kdjurusan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="hapussoal_<?php echo $ddata['kdjurusan']; ?>">Hapus Soal Jurusan <?php echo $ddata['namajurusan'] ?></h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Yakin Untuk Menghapus Soal <?php echo $ddata['namajurusan'] ?>?</p>
                              <small>Pastikan Tidak ada Nilai / Belum melakukan Ujian</small>
                              <form class="" action="act/p_del_soal.php" method="post" enctype="multipart/form-data">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" required value="">Saya Yakin untuk Menghapus Soal dan Nilai Ujian Sekaligus
                                  </label>
                                </div>
                                <input type="hidden" name="kdjurusan" value="<?php echo $ddata['kdjurusan'] ?>" id="">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="btndeljurusan" class="btn btn-danger">Hapus</button>
                              </form>
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
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
          </div>


        </div>
        <!-- /.container-fluid -->

<?php require_once 'footer.php'; ?>
