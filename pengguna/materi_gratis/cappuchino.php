<?php
$query = "SELECT * FROM coffe WHERE status='0' AND jenis_coffe='cappucino' ORDER BY id_coffe ASC";
$sql = mysqli_query($conn, $query);
?>
<section id="menu" class="menu mt-3">
  <div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>RESEP RESEP KOPI</h2>
    <p>Materi <span>Mininuman kopi Cappuchino</span></p>
  </div>

  <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

    <!-- End tab nav item -->

  </ul>

  <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

    <div class="tab-pane fade active show" id="menu-starters">

      <div class="row gy-5">
        <?php
          while($row = mysqli_fetch_array($sql)){
        ?>
        
        <div class="col-lg-4 menu-item">
          <a href="index.php?menu=7&id=<?php echo $row['id_coffe'];?>"><img src="../assets/img/kopi/<?php echo $row['gambar'];?>" class="img-thumbnail" alt="" style="width:100%; height:500px;"></a>
          <h4><?php echo $row['nama_coffe'];?></h4>
          <p class="ingredients"><?php echo $row['keterangan'];?></p>
          <p class="price">
          </p>
        </div><!-- Menu Item -->
          <?php
          }
        ?>
      </div>
    </div><!-- End Starter Menu Content -->

  </div>

  </div>
</section><!-- End Hero Section -->