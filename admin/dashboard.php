<?php 
include('../config/koneksi.php');
$nik = $_SESSION['nik'];
$query = "SELECT COUNT(nik) FROM pengaduan WHERE nik = '$nik' AND status = 'baru'";
$sql = mysqli_query($koneksi, $query);
$hasil = mysqli_fetch_array($sql);

$query2 = "SELECT COUNT(nik) FROM pengaduan WHERE nik = '$nik' AND status = 'proses'";
$sql2 = mysqli_query($koneksi, $query2);
$hasil2 = mysqli_fetch_array($sql2);

$query3 = "SELECT COUNT(nik) FROM pengaduan WHERE nik = '$nik' AND status = 'selesai'";
$sql3 = mysqli_query($koneksi, $query3);
$hasil3 = mysqli_fetch_array($sql3);

$query4 = "SELECT COUNT(nik) FROM pengaduan WHERE nik = '$nik' AND status = 'ditolak'";
$sql4 = mysqli_query($koneksi, $query4);
$hasil4 = mysqli_fetch_array($sql4);
?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $hasil['COUNT(nik)'];?></h3>

                <p>Pengaduan Baru</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="home.php?menu=2" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $hasil2['COUNT(nik)'];?></h3>

                <p>Pengaduan  di Proses</p>
              </div>
              <div class="icon">
                <i class="fas fa-cog"></i>
              </div>
              <a href="home.php?menu=3" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $hasil3['COUNT(nik)'];?></h3>

                <p>Pengaduan Selesai</p>
              </div>
              <div class="icon">
                <i class="fas fa-check-circle"></i>
              </div>
              <a href="home.php?menu=5" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $hasil4['COUNT(nik)'];?></h3>

                <p>Pengaduan ditolak</p>
              </div>
              <div class="icon">
                <i class="fas fa-times-circle"></i>
              </div>
              <a href="home.php?menu=9" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->