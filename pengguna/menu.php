<div class="container d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
    <!-- Uncomment the line below if you also wish to use an image logo -->
    <!-- <img src="../assets/img/logo.png" alt=""> -->
    <h1>EduCoffe<span>.</span></h1>
    </a>

    <nav id="navbar" class="navbar">
    <ul>
        <li><a href="index.php?menu=1">Free</a></li>
        <li><a href="index.php?menu=2">Berbayar</a></li>
        <li><a href="index.php?menu=3">Beli Paket</a></li>
    </ul>
    </nav><!-- .navbar -->

    <!-- <a class="btn-book-a-table" href="#book-a-table" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Masuk</a> -->
    <div class="user-info d-flex align-items-center">
        <img src="../assets/img/about.jpg" alt="Foto Profil" width="40" height="40" style="border-radius: 50%; margin-right: 10px;">
        <span class="user-name"><?php echo $_SESSION['nama_lengkap'];?></span>
    </div>
    <a class="btn-book-a-table" href="#book-a-table" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Keluar</a>
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

</div>