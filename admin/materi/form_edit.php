<?php  
include"../config/koneksi.php";

$id = $_GET['id'];
$query = "SELECT * FROM coffe where id_coffe = '$id'";
$sql = mysqli_query($conn, $query);
$row = mysqli_fetch_array($sql);
?>

<section id="menu" class="menu mt-3">
  <div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>DATA MATERI</h2>
    <p>Data <span>Materi EduCoffe</span></p>
    <hr>
  </div>

  <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

    <!-- End tab nav item -->

  </ul>

  <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

    <div class="tab-pane fade active show" id="menu-starters">

      <div class="row gy-5">
		
		<form action="materi/edit.php" method="post" role="form">
            <div class="form-group">
                <h5>Id COffe</h5>
                <hr>
                <input type="text"name="id_coffe" value="<?php echo $row['id_coffe']?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <h5>Nama Coffe</h5>
                <hr>
                <input type="text" name="nama_coffe" value="<?php echo $row['nama_coffe']?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <h5>Jenis Coffe</h5>
                <hr>
                <input type="text" name="jenis_coffe" value="<?php echo $row['jenis_coffe']?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <h5>Bahan Bahan</h5>
                <hr>
                <input type="text" name="bahan_bahan" value="<?php echo $row['bahan_bahan']?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <h5>Alat Alat</h5>
                <hr>
                <input type="text" name="alat_alat" value="<?php echo $row['alat_alat']?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <h5>Keterangan</h5>
                <hr>
                <input type="text" name="keterangan" value="<?php echo $row['keterangan']?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <h5>Link Vidio</h5>
                <hr>
                <input type="text" name="link_vidio" value="<?php echo $row['link_vidio']?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <h5>Cara Pembuatan</h5>
                <hr>
                <input type="text" name="cara_pembuatan" value="<?php echo $row['cara_pembuatan']?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary form-control mt-2" onclick="return confirm('Apa Anda Yakin Ingin Mnegubah Data Ini?') ">SIMPAN</button>
            </div>
            
        </form>
      </div>
    </div><!-- End Starter Menu Content -->

  </div>

  </div>
</section><!-- End Hero Section -->