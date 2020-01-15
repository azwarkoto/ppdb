<?php require_once 'header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Akun Administrator</h1>
          <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadm">
            <i class="fas fa-user-plus"></i>&nbsp;Tambah Administrator
          </button>
          <br>

          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="table-responsive">
                <br>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Akun</th>
                      <th colspan="2">Act</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $data = mysqli_query($conn,"SELECT * FROM adm");
                    $no=1;
                    while ($ddata = mysqli_fetch_assoc($data)) {
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $ddata['inisial']; ?></td>
                        <td><?php echo $ddata['nmadmin']; ?></td>
                        <td><?php echo $ddata['akun']; ?></td>
                        <td><a href="act/p_reset.php?kda=<?php echo $ddata['kdadmin'] ?>" class="btn btn-warning">Reset</a></td>
                        <td><a href="act/p_delakun.php?kda=<?php echo $ddata['kdadmin'] ?>" class="btn btn-danger">Hapus</a></td>
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
