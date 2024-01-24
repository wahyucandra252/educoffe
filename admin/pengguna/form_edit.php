<?php  
include"../config/koneksi.php";

$id = $_GET['id'];
$query = "SELECT * FROM biji where id_biji = '$id'";
$sql = mysqli_query($conn, $query);
$row = mysqli_fetch_array($sql);
?>

<section id="menu" class="menu mt-3">
  <div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>DATA Biji</h2>
    <p>Data <span>Biji EduCoffe</span></p>
    <hr>
  </div>

  <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

    <!-- End tab nav item -->

  </ul>

  <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

    <div class="tab-pane fade active show" id="menu-starters">

      <div class="row gy-5">
		
		<form action="pengguna/edit.php" method="post" role="form">
            <div class="form-group">
                <h5>Id COffe</h5>
                <hr>
                <input type="text"name="id_biji" value="<?php echo $row['id_biji']?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <h5>Nama Biji</h5>
                <hr>
                <input type="text" name="nama_biji" value="<?php echo $row['nama_biji']?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <h5>Asal Biji</h5>
                <hr>
                <input type="text" name="asal_biji" value="<?php echo $row['asal_biji']?>" class="form-control">
            </div>
            <div class="form-group mt-3">
                <h5>Karakteristik</h5>
                <hr>
                <input type="text" name="karakteristik" value="<?php echo $row['karakteristik']?>" class="form-control">
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