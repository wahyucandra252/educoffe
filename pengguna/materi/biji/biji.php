<?php 
include'../config/koneksi.php';

$query = "SELECT * from biji";
$sql = mysqli_query($conn, $query); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .coffee-img {
      width: 100%; /* Adjust the width as needed */
      height: auto; /* Maintain the aspect ratio */
    }

    /* Set fixed dimensions for the coffee images based on the "Java" image */
    .coffee-img-fixed {
      width: 300px; /* Set the desired width */ 
      height: 225px; /* Set the desired height */
    }
  </style>
  <!-- Include any other necessary stylesheets or scripts here -->
</head>
<body>

<section id="menu" class="menu mt-3">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Macam Macam Biji Kopi</h2>
      <p>Materi <span>Biji Kopi</span></p>
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
            <a href="index.php?menu=12&id=<?php echo $row['id_biji'];?>"><img src="../assets/img/biji/<?php echo $row ['gambar'];?>" class="menu-img img-fluid coffee-img coffee-img-fixed" alt=""></a>
            <h4><?php echo $row['nama_biji'];?></h4>
            <p class="price"></p>
          </div><!-- Menu Item -->

          <?php
           }
          ?>
        </div>
      </div><!-- End Starter Menu Content -->

    </div>

  </div>
</section><!-- End Hero Section -->

<!-- Include any other necessary scripts or closing body/html tags here -->

</body>
</html>
