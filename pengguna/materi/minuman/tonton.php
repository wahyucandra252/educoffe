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
    <h2>Tonton Video Tutorial</h2>
    <p>Materi <span><?php echo $row['nama_coffe']; ?></span></p>
  </div>

  <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

    <!-- End tab nav item -->

  </ul>

  <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

    <div class="tab-pane fade active show" id="menu-starters">

      <div class="row gy-5">

      <div class="col-lg-12 menu-item">
      <a href="<?php echo $row['link_vidio'];?>" class="glightbox play-btn" style="position: relative; display: inline-block;">
    <img src="../assets/img/kopi/<?php echo $row['gambar'];?>" style="width:50%;" class="menu-img img-fluid" alt="">
    <img src="../assets/img/play.png" class="play-icon" style="position: absolute; width:80px; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1;" alt="Play">
</a>



      </div><!-- Menu Item -->

        <div class="col-lg-12">
          <h3 for=""><?php echo $row['nama_coffe']; ?></h3><hr>
          <p class="ingredients">
            <?php echo $row['keterangan']; ?>
          </p>
        </div>

        <div class="col-lg-12">
          <h3 for="">Jenis Kopi</h3><hr>
          <p class="ingredients">
            <?php echo $row['jenis_coffe']; ?>
          </p>
        </div>

        <div class="col-lg-12">
          <h3 for="">Bahan - Bahan</h3><hr>
          <ul class="ingredients">
            <?php
              $bahan_bahan = explode("\n", $row['bahan_bahan']);
              foreach ($bahan_bahan as $bahan) {
                echo "<li>" . trim($bahan) . "</li>";
              }
            ?>
          </ul>
        </div>

        <div class="col-lg-12">
          <h3 for="">Alat alat</h3><hr>
          <p class="ingredients">
          <ul class="ingredients">
          <?php
            $alat_alat = explode("\n", $row['alat_alat']);
            foreach ($alat_alat as $alat) {
              echo "<li>" . trim($alat) . "</li>";
            }
          ?>
        </ul>
       
          </p>
        </div>

        <div class="col-lg-12">
  <h3>Cara Pembuatan</h3><hr>
  <p class="ingredients">
    <?php
      $cara_pembuatan = explode("\n", $row['cara_pembuatan']);
      echo "<ol>";
      foreach ($cara_pembuatan as $cara) {
        echo "<li>" . trim($cara) . "</li>";
      }
      echo "</ol>";
    ?>
  </p>
</div>

