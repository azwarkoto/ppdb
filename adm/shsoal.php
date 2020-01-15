<?php
require_once 'header.php';
$kdjrsn = $_GET['kdjrsn'];
if (empty($kdjrsn)) {
  header("Location: index2.php");
}

function cekkj($db,$ht)
{
  if ($db==$ht) {
    $isi="selected";
  }else {
    $isi="";
  }
  return $isi;
}
?>
<style media="screen">
  td{
    padding: 20px;
  }
  table{

  }
</style>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Lihat Soal</h1>

          <div class="card">
            <div class="card-header text-center">Soal Ujian Online <?php echo $kdjrsn ?></div>

              <div class="card-body">
                <table>
                  <?php
                  $no=1;
                  $datasoal = mysqli_query($conn,"SELECT * FROM soal WHERE kdjurusan='$kdjrsn'");
                  while ($ddsoal = mysqli_fetch_assoc($datasoal)) {
                    ?>

                    <tr class="border">
                      <td class="border" style="width:5%"><?php echo $no++."." ?></td>
                      <td class="border" style="width:80%;">
                        <?php echo $ddsoal['soal']; ?>
                        <br><br>
                        <ol type="A">
                          <li>&nbsp;<?php echo $ddsoal['a'] ?></li>
                          <li>&nbsp;<?php echo $ddsoal['b'] ?></li>
                          <li>&nbsp;<?php echo $ddsoal['c'] ?></li>
                          <li>&nbsp;<?php echo $ddsoal['d'] ?></li>
                          <li>&nbsp;<?php echo $ddsoal['e'] ?></li>
                        </ol>
                        <strong>Kunci Jawaban:&nbsp;</strong><?php echo $ddsoal['kunci'] ?>
                      </td>

                      <td style="width:15%">
                        <div class="text-right">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ed_soal_<?php echo $ddsoal['kdsoal'] ?>">
                          <i class="fas fa-pencil-alt"></i></i>&nbsp;Edit Soal
                        </button>
                        </div>
                      </td>
                    </tr>

                  <div class="modal fade" id="ed_soal_<?php echo $ddsoal['kdsoal'] ?>" tabindex="-1" role="dialog" aria-labelledby="ed_soal_<?php echo $ddsoal['kdsoal'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ed_soal_<?php echo $ddsoal['kdsoal'] ?>">Edit Soal <?php echo ucwords($ddsoal['kdsoal']) ?></h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php
                          $kdsoal = $ddsoal['kdsoal'];
                          $data1 = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM soal WHERE kdsoal='$kdsoal'"));
                           ?>
                          <form class="" action="" method="post">
                            <div class="form-group"><label for="" class="control-label">Kode Soal</label>
                              <input type="text" name="kdsoal" readonly value="<?php echo $data1['kdsoal'] ?>" id="" class="form-control">
                            </div>
                            <div class="form-group"><label for="" class="control-label">Soal</label>
                              <textarea name="soal" rows="8" cols="80" required class="form-control"><?php echo $data1['soal'] ?></textarea>
                            </div>
                            <div class="form-group"><label for="" class="control-label">Opsi A</label>
                              <input type="text" name="a" required value="<?php echo $data1['a'] ?>" id="" class="form-control">
                            </div>
                            <div class="form-group"><label for="" class="control-label">Opsi B</label>
                              <input type="text" name="b" required value="<?php echo $data1['b'] ?>" id="" class="form-control">
                            </div>
                            <div class="form-group"><label for="" class="control-label">Opsi C</label>
                              <input type="text" name="c" required value="<?php echo $data1['c'] ?>" id="" class="form-control">
                            </div>
                            <div class="form-group"><label for="" class="control-label">Opsi D</label>
                              <input type="text" name="d" required value="<?php echo $data1['d'] ?>" id="" class="form-control">
                            </div>
                            <div class="form-group"><label for="" class="control-label">Opsi E</label>
                              <input type="text" name="e" required value="<?php echo $data1['e'] ?>" id="" class="form-control">
                            </div>
                            <div class="form-group"><label for="" class="control-label">Kunci Jawaban</label>
                              <select class="form-control" name="kunci" required>
                                <option value="A" <?php echo cekkj($data1['kunci'],"A") ?>>A</option>
                                <option value="B" <?php echo cekkj($data1['kunci'],"B") ?>>B</option>
                                <option value="C" <?php echo cekkj($data1['kunci'],"C") ?>>C</option>
                                <option value="D" <?php echo cekkj($data1['kunci'],"D") ?>>D</option>
                                <option value="E" <?php echo cekkj($data1['kunci'],"E") ?>>E</option>
                              </select>
                            </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-warning" name="btnedtsoal">Edit</button>
                        </form>
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>

            <?php
          }
           ?>
         </table>
       </div>

            <div class="card-footer text-center">PPDB SMK Mercusuar Jakarta 2019/2020</div>
           </div>
        </div>
        <!-- /.container-fluid -->

<?php
if (isset($_POST['btnedtsoal'])) {
  $soal = $_POST['soal'];
  $a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];
  $d = $_POST['d'];
  $e = $_POST['e'];
  $kunci = $_POST['kunci'];
  $kdsoal = $_POST['kdsoal'];

  $up = mysqli_query($conn,"UPDATE soal SET
    soal='$soal',a='$a',b='$b',c='$c',d='$d',e='$e',kunci='$kunci'
    WHERE kdsoal='$kdsoal'");
  if($up){
    redirect("Berhasil","index2.php?to=shsoal&kdjrsn=$kdjrsn");
  }else {
    redirect("Gagal","index2.php?to=shsoal&kdjrsn=$kdjrsn");
  }

}
require_once 'footer.php';
?>
