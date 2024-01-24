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
    <h2>Tonton Video Tutorial</h2>
    <p>Materi <span><?php echo $row['nama_biji']; ?></span></p>
  </div>

  <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

    <!-- End tab nav item -->

  </ul>

  <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

    <div class="tab-pane fade active show" id="menu-starters">

      <div class="row gy-5">

        <div class="col-lg-12 menu-item">
          <a href="" class="glightbox play-btn"><img src="../assets/img/biji/<?php echo $row['gambar'];?>" style="width:50%;" class="menu-img img-fluid" alt=""></a>
        </div><!-- Menu Item -->

        <div class="col-lg-12">
        <h3 for="">Nama Biji Kopi</h3><hr>
          <p class="ingredients">
            <?php echo $row['nama_biji']; ?>
          </p>
        </div>

        <div class="col-lg-12">
          <h3 for="">Asal Biji</h3><hr>
          <p class="ingredients">
            <?php echo $row['asal_biji']; ?>
          </p>
        </div>

        <div class="col-lg-12">
          <h3 for="">Bahan - Bahan</h3><hr>
          <ul class="ingredients">
            <?php
              $bahan_bahan = explode("\n", $row['karakteristik']);
              foreach ($bahan_bahan as $bahan) {
                echo "<li>" . trim($bahan) . "</li>";
              }
            ?>
          </ul>
        </div>

