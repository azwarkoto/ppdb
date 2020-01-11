<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Kuota</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                $kuota = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(kuotajurusan) AS jmlkuota FROM jurusan"));
                echo $kuota['jmlkuota'];
                 ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Jurusan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                $jmljur = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(kdjurusan) AS jmljurusan FROM jurusan"));
                echo $jmljur['jmljurusan'];
                 ?>
            </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-cogs fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Jadwal</div>
              <div class="row no-gutters align-items-center">
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                  <?php
                  $jmljdw = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(kdjadwal) AS jmljdw FROM jadwal"));
                  echo $jmljdw['jmljdw'];
                   ?>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="row justify-conten-center">
    <div class="jumbotron">
    <h1>Hello Administrator</h1>
    <p>Halaman ini dipergunakan untuk mengontrol sistem ppdb SMK Mercusuar Jakarta 2019</p>
  </div>
  </div>
   <!--  Pending Requests Card Example -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Calon Peserta Didik</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"> -->
              <!--   <?php
                $jmlcpd = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(username) AS jmlcpd FROM biodata"));
                echo $jmlcpd['jmlcpd'];
                 ?> -->
              </div>
            </div>
            <div class="col-auto">
               <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
  


</div>
<!-- /.container-fluid -->
