</div>
<!-- End of Main Content -->
<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; PPDB SMK Mercusuar Jakarta 2019</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin untuk Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik Keluar Untuk Lanjut</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Keluar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- addjurusan Modal-->
  <?php
  $data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM jurusan"));
  if (empty($data['kdjurusan'])) {
    $newID = "JRSN1";
  }else {
    $cut = substr($data['kdjurusan'],4,1);
    $int = (int) $cut;
    $new = $int+2;
    $newID = "JRSN".$new;
  }
   ?>
  <div class="modal fade" id="addjurusan" tabindex="-1" role="dialog" aria-labelledby="addjurusan" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addjurusan">Form Tambah Jurusan</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="" action="act/p_in_jrsn.php" method="post">
            <div class="form-group"><input type="text" name="kdjurusan" value="<?php echo $newID ?>" class="form-control" readonly ></div>
            <div class="form-group">
              <input type="text" name="namajurusan" id="" class="form-control" placeholder="Nama Jurusan" required>
            </div>
            <div class="form-group"><input type="number" name="kuotajurusan" id="" class="form-control" required placeholder="Kuota Jurusan"></div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="btntmbjur">Tambahkan</button>

          <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- addjdw Modal -->
  <div class="modal fade" id="addjdw" tabindex="-1" role="dialog" aria-labelledby="addjdw" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addjdw">Form Tambah Jadwal</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="" action="act/p_in_jdw.php" method="post">
            <div class="form-group">
              <select name="kdjrsn" id="" class="form-control">
                <?php
                $jurusansudahisi = mysqli_query($conn,"SELECT * FROM jurusan ORDER BY namajurusan ASC");
                while ($data = mysqli_fetch_assoc($jurusansudahisi)) {
                  ?><option value="<?php echo $data['kdjurusan'] ?>" class="form-control"><?php echo $data['namajurusan'] ?></option><?php
                }
                 ?>
              </select></div>
            <div class="form-group">
              <input type="text" name="date" id="datepicker" required class="form-control" placeholder="YYYY-MM-DD Contoh: 2019-12-01">
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="btntmnjdw">Tambahkan</button>
        </form>
          <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <!-- addjdw Modal -->
  <div class="modal fade" id="addadm" tabindex="-1" role="dialog" aria-labelledby="addadm" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addjdw">Form Tambah Administrator</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="" action="act/p_in_adm.php" method="post">
            <div class="form-group">
              <input type="text" name="nmadin" placeholder="Nama Admin" id="" class="form-control">
            </div>
            <div class="form-group">
              <input type="text" name="akun" placeholder="Akun atau Username" id="" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="pass" placeholder="Password" id="" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="btnaddadm">Tambahkan</button>
        </form>
          <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  

  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>
