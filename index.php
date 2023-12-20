<?php
include 'config/koneksi.php';

session_start();

if (isset($_POST['login'])) {

  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $q2 = "SELECT * FROM pengguna WHERE email='$email' AND password='$password'";
  $r2 = mysqli_query($conn, $q2);
  $d2 = mysqli_fetch_array($r2);

  if (mysqli_num_rows($r2) > 0) {
    $_SESSION['id_pengguna'] = $d2['id_pengguna'];
    $_SESSION['nama_lengkap'] = $d2['nama_lengkap'];
    $_SESSION['email'] = $d2['email'];
    echo "
  <script>
  alert('Anda Berhasil Login');
  window.location = 'pengguna/index.php';
  </script>
  ";
  } else {
    echo "
  <script>
  alert('Anda Gagal Login');
  window.location = 'index.php';
  </script>
  ";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EduCoffe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/logo.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <script type="text/javascript">
    function getDataKabupaten(data) {
      var id = "id_prov=" + data;
      $.ajax({
        type: 'POST',
        url: "getDataKabupaten.php",
        data: id,
        success: function (hasil) {
          $("#kab_kota").html(hasil);
        }
      });
    }
  </script>

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>EduCoffe<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#chefs">Paket</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="#book-a-table" data-bs-target="#exampleModalToggle"
        data-bs-toggle="modal">Masuk</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div
          class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Selamat Datang<br>Mulalah Belajar Membuat Coffe Bersama Kami</h2>
          <p data-aos="fade-up" data-aos-delay="100">Menyediakan tutorial pembuatan berbagai macam coffe yang akan
            membantu anda dalam membuat olahan coffe</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table" data-bs-target="#exampleModalToggle"
              data-bs-toggle="modal">Masuk</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/kopitumpah.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tentang Kami</h2>
          <p>Cobalah Belajar <span>Bersama Kami</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img"
            style="background-image: url(assets/img/about.jpg); background-size: cover;" data-aos="fade-up"
            data-aos-delay="150">
            <!-- <div class="call-us position-absolute">
              <h4>Book a Table</h4>
              <p>+1 5589 55488 55</p>
            </div> -->
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                EduCoffee, sebuah aplikasi berbasis web, menawarkan solusi inovatif untuk mengatasi tantangan yang
                dihadapi oleh barista pemula. Dengan modul pembelajaran interaktif dan tutorial visual yang jelas,
                EduCoffee membantu barista pemula mengatasi persepsi sulitnya profesi barista. Aplikasi ini juga
                menangani kurangnya perhatian terhadap faktor-faktor utama pembuatan kopi dengan memberikan informasi
                yang mendalam dimana masalah masalah yang terjadi adalah
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Kurangnya memperhatikan faktor-faktor dalam penyeduhan kopi </li>
                <li><i class="bi bi-check2-all"></i> Kurangnya pengetahuan kualitas biji kopi yang baik</li>
                <li><i class="bi bi-check2-all"></i> Kurang memahami langkah-langkah membuat kopi</li>
              </ul>
              <p>
                EduCoffee menawarkan fitur interaktif yang memandu barista pemula melalui setiap langkah. Tujuannya
                adalah untuk memberikan pengalaman belajar yang mendalam dan meningkatkan rasa percaya diri para barista
                pemula dalam menguasai seni membuat kopi, sehingga dapat memperoleh landasan pengetahuan, pengetahuan
                dan keterampilan yang kokoh dalam profesi Anda.

              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/kopi2.jpg" class="img-fluid" alt="">
                <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">



      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>RESEP RESEP KOPI</h2>
          <p>Macam macam <span>Mininuman kopi</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="menu/menucapuchino.php"><img src="assets/img/menu/menu-item-1.jpg" class="menu-img img-fluid"
                    alt=""></a>
                <h4>Cappucino</h4>
                <p class="ingredients">
                  Seperti senandung rasa dalam setiap tegukan, cappucino adalah tarian lembut antara kopi yang kuat dan
                  kelembutan susu
                </p>
                <p class="price">

                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Espresso</h4>
                <p class="ingredients">
                  Dalam kegelapan rasa, espresso adalah cahaya yang memancar, membangunkan indera dengan kekuatan dan
                  keaslian kopi yang penuh karakter.
                </p>
                <p class="price">

                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Black Coffe</h4>
                <p class="ingredients">
                  Black coffee, sebuah pesta bagi indera; kekuatan kopi murni yang mengalir dalam setiap tegukan, tanpa
                  terhalang oleh tambahan apapun
                </p>
                <p class="price">

                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Irish Coffe</h4>
                <p class="ingredients">
                  Dalam sentuhan Irish Coffee, kopi bertemu dengan kehangatan whisky, menciptakan harmoni cita rasa yang
                  memeluk hati dengan lembut.Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">

                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Filter Coffe</h4>
                <p class="ingredients">
                  Dalam secangkir filter coffee, terdapat kelembutan dan kompleksitas cita rasa; seperti mengalami musim
                  kopi yang berubah seiring waktu.
                </p>
                <p class="price">

                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.jpg"
                    class="menu-img img-fluid" alt=""></a>
                <h4>Iced Coffe</h4>
                <p class="ingredients">
                  Iced coffee, seakan membawa dinginnya embun pagi ke dalam gelas; menyajikan kehangatan kopi dengan
                  kesegaran es yang menggoda.
                </p>
                <p class="price">

                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->

    <!-- ======= Events Section ======= -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Paket</h2>
          <p>Pilih<span> Paket</span></p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200"
            data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/gratis2.jpg" class="img-fluid" alt="">
              </div>
              <!-- <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div> -->
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300"
            data-bs-target="#exampleModalToggle" data-bs-toggle="modal">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/premium2.jpg" class="img-fluid" alt="">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
              <!-- <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div> -->
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Book A Table Section ======= -->

    <!-- ======= Gallery Section ======= -->

    <!-- ======= Contact Section ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Alamat</h4>
            <p>
              Jl. Dipati Ukur No.112-116, Lebakgede <br>
              Kecamatan Coblong, Kota Bandung, Jawa Barat 40132 <br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservasi</h4>
            <p>
              <strong>Telepon:</strong> 0821-1896-2771<br>
              <strong>Email:</strong> EduCoffe@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Buka</h4>
            <p>
              <strong>Senin-Sabtu: 10 Pagi</strong> - 23 Malam<br>
              Minggu : Tutup
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Akun Kami</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!----- modal ---->
  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Masuk</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="post">
          <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
              <label for="floatingInput">Masukan Email Anda</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
              <label for="floatingPassword">Masukan Password Anda</label>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" name="login" value="Masuk" class="btn btn-primary" data-bs-toggle="modal">
            <a href="" class="btn btn-danger" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Daftar
              Akun</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <form action="process_daftar.php" class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Daftar Akun</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Masukan Nama Lengkap</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Masukan Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Masukan No Hp</label>
          </div>
          <div class="form-floating mb-3">
          <select class="FormSelect form-control" onchange="getDataKabupaten(this.value)">
              <option value="-">= Pilih Provinsi =</option>
              <?php
              include 'koneksi.php';
              $result = selectAllData();
              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?= $row["id_prov"] ?>">
                  <?= $row["provinsi"] ?>
                </option>
              <?php } ?>
            </select>
            <br>
            <select class="FormSelect form-control" id="kab_kota">
              <option value="tambah">= Pilih Kabupaten/Kota =</option>
              <?php
              include 'koneksi.php';
              $result = selectAllData();
              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?= $row["id_kab"] ?>">
                  <?= $row["kabupaten_kota"] ?>
                </option>
              <?php } ?>
            </select>
            <br>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">RT</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">RW</label>
            </div>
            <div class="form-floating mb-3">
              <select name="" id="" class="form-control">
                <option value="">-- Agama --</option>
                <option value="">ISLAM</option>
                <option value="">KRISTEN</option>
                <option value="">BUDHA</option>
                <option value="">HINDU</option>
              </select>
            </div>
            <div class="form-floating mb-3">
              <select name="" id="" class="form-control">
                <option value="">-- Jenis Kelamin --</option>
                <option value="">LAKI-LAKI</option>
                <option value="">PEREMPUAN</option>
              </select>
            </div>
            <div class="form-floating mb-3">
              <input type="date" class="form-control" id="floatingDate" placeholder="Tanggal">
              <label for="floatingDate">Tanggal Lahir</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Alamat</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Buat Password Anda</label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit"  class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"> Daftar</button>
          </div>
        </div>
      </div>
    </div>
              </form>
</body>
<script>
  // Wait for the document to be ready
  $(document).ready(function () {
    // Add an event listener for the modal hidden event
    $('#exampleModalToggle2').on('hidden.bs.modal', function () {
      // Redirect to the "Masuk" label or section
      window.location.href = 'index.php';
    });

    // Optionally, you can also add an event listener to the close button
    $('#closeRegistrationModal').on('click', function () {
      // Redirect to the "Masuk" label or section
      window.location.href = 'index.php';
    });
  });
</script>

</html>