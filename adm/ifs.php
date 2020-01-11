<?php require_once 'header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Informasi Siswa</h1>
          <div class="row">
            <div class="col-md-8">
              <table class="table">
                <thead>
                  <tr>
                    <td>#</td>
                    <td>Jurusan</td>
                    <td colspan="2">Informasi</td>
                    <td>Act</td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $data = mysqli_query($conn,"SELECT * FROM jurusan ORDER BY namajurusan ASC");
                  $row=1;
                  while ($ddata = mysqli_fetch_assoc($data)) {
                    ?>
                    <tr>
                      <td><?php echo $row++ ?></td>
                      <td><?php echo $ddata['namajurusan']; ?></td>
                      <td>
                        <?php
                        $kdjurusan=$ddata['kdjurusan'];
                        $jml = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(kdinfor) AS jmlinfor FROM info WHERE kdjurusan='$kdjurusan'"));
                        echo $jml['jmlinfor'];
                         ?>
                      </td>
                      <td>
                        <button type="button" name="button" class="btn btn-info" data-toggle="modal" data-target="#shinfo_<?php echo $ddata['kdjurusan'] ?>">Lihat Informasi</button>

                      </td>
                      <td>
                        <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#addinfo_<?php echo $ddata['kdjurusan'] ?>">Tambah Informasi</button>
                      </td>
                    </tr>



                    <!-- Tambah Info Modal -->
                    <div class="modal fade" id="addinfo_<?php echo $ddata['kdjurusan'] ?>" tabindex="-1" role="dialog" aria-labelledby="#addinfo_<?php echo $ddata['kdjurusan'] ?>" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="addinfo_<?php echo $ddata['kdjurusan'] ?>">Tambahkan Informasi <?php echo $ddata['namajurusan'] ?></h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form class="" action="" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="kdjurusan" value="<?php echo $ddata['kdjurusan'] ?>">
                              <div class="form-group">
                                <label for="" class="control-label">Gambar</label>
                                <input type="file" class="form-control-file" name="file_gambar">
                              </div>
                              <div class="form-group">
                                <label for="" class="control-label">Isi Informasi</label>
                                <textarea name="info" id="" cols="30" rows="10" class="form-control" required placeholder="Isikan Informasi"></textarea>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" name="btnaddinfo" class="btn btn-primary">Tambah</button>
                              </form>
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal Informasi -->
                    <div class="modal fade" id="shinfo_<?php echo $ddata['kdjurusan'] ?>" tabindex="-1" role="dialog" aria-labelledby="#shinfo_<?php echo $ddata['kdjurusan'] ?>" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="shinfo_<?php echo $ddata['kdjurusan'] ?>">Daftar Informasi <?php echo $ddata['namajurusan'] ?></h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <ul>


                            <?php
                            $info = mysqli_query($conn,"SELECT * FROM info WHERE kdjurusan='$kdjurusan'");
                            $x=1;

                            while ($iinfo = mysqli_fetch_assoc($info)) {
                              ?>
                              <li>
                              <button data-toggle="collapse" data-target="#detinfo_<?php echo $iinfo['kdinfor'] ?>" class="btn btn-info">Informasi <?php echo $x++ ?></button>

                              <div id="detinfo_<?php echo $iinfo['kdinfor'] ?>" class="collapse">
                                <?php
                                if ($iinfo['gmb']!="noimage") {
                                  ?><img src="../public/info/<?php echo $iinfo['gmb'] ?>" alt="" width="100px" height="100px"><br><?php
                                }elseif($iinfo['gmb']=="noimage"){
                                  echo "";
                                }
                                echo $iinfo['info'];
                                ?>
                              </div>
                            </li><br>
                              <?php
                            }
                             ?>
                             <br>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                          </div>
                        </div>
                      </div>
                    </div>




                    <?php
                  } //while loop

                  if (isset($_POST['btnaddinfo'])) {

                    if (!empty($_FILES['file_gambar']['size'])) {
                      // form telah disubmit, cek apakah ada error
                      $error = $_FILES["file_gambar"]["error"];
                      if ($error === 0){
                        // siapkan variabel untuk pesan error
                        $pesan_error = "";

                        // siapkan variabel untuk pemindahan file
                        $nama_folder="../public/info";
                        $tmp = $_FILES["file_gambar"]["tmp_name"];
                        $nama_file = $_FILES["file_gambar"]["name"];
                        $path_file = "$nama_folder/$nama_file";
                        $upload_gagal = false;

                        // cek apakah terdapat file dengan nama yang sama
                        if (file_exists($path_file)) {
                            $pesan_error = "File dengan nama sama sudah ada di server <br>";
                            $upload_gagal = true;
                           }
                        // pindahkan file upload jika semuanya OK
                        if (!$upload_gagal AND move_uploaded_file($tmp,$path_file)){
                          $pesan_error = "File sukses di upload dan Berhasil Menambahkan Informasi";
                          $info = $_POST['info'];
                          $kdjurusan2 = $_POST['kdjurusan'];
                          $waktu = date('d/m/y H:i:s');
                          $in = mysqli_query($conn,"INSERT INTO `info` (`kdinfor`, `kdjurusan`, `info`, `gmb`, `waktupost`)
                          VALUES (NULL, '$kdjurusan2', '$info', '$nama_file', '$waktu')");
                          if ($in) {
                            redirect($pesan_error,"index2.php?to=ifs");
                          }else {
                            redirect("Gagal Database","index2.php?to=ifs");
                          }
                        }
                        else {
                          $pesan_error = "File gagal di upload";
                          redirect($pesan_error,"index2.php?to=ifs");
                        }
                      }
                    }else {
                      $info = $_POST['info'];
                      $kdjurusan2 = $_POST['kdjurusan'];
                      $waktu = date('d/m/y H:i:s');
                      $in2 = mysqli_query($conn,"INSERT INTO `info` (`kdinfor`, `kdjurusan`, `info`, `gmb`, `waktupost`)
                      VALUES (NULL, '$kdjurusan2', '$info', 'noimage', '$waktu')");
                      $pesan_error = "Berhasil Menambahkan Informasi";
                      if ($in2) {
                        redirect($pesan_error,"index2.php?to=ifs");
                      }else {
                        redirect("Gagal Database","index2.php?to=ifs");
                      }
                    }

                  }
                   ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php require_once 'footer.php'; ?>
