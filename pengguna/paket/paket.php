<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Semakin Banyak Tutorial<br>Dengan Paket Premium</h2>
          <p data-aos="fade-up" data-aos-delay="100">Menyediakan tutorial pembuatan berbagai macam coffee dan biji coffee yang akan lebih banyak dan membantu anda dalam membuat olahan coffee yang baik dan mantap</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <button class="btn btn-danger" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Mulai Berlangganan</button>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="../assets/img/kopitumpah.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300"> 
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Informasi Pembayaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- <center>INFORMASI PEMBAYARAN</center> -->
        <form id="paymentForm">
            <!-- Payment Method Select -->
            <div class="mb-3">
            <!-- <label for="paymentMethod" class="form-label">Pilih Metode Pembayaran</label> -->
            <!-- <select class="form-select" id="paymentMethod" onchange="displayRekeningInfo()"> -->
            <select class="form-select" id="paymentMethod" onchange="displayRekeningInfo()">
                <option value="" selected disabled>Pilih Metode Pembayaran</option>
                <option value="shopee">Shopee</option>
                <option value="bca">BCA</option>
                <option value="mandiri">Mandiri</option>
                <!-- Add more payment options as needed -->
            </select>
            </div>

            <!-- Placeholder for Rekening Info -->
            <div id="rekeningInfo" class="mb-3"></div>

            <!-- Other payment input fields can be added here -->

            <!-- <button type="button" class="btn btn-primary" onclick="processPayment()">Proses Pembayaran</button> -->
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Masukan Bukti Pembayaran</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Inputkan Bukti Pembayaran Anda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="paymentForm">
            <div class="mb-3">
                <label for="cardNumber" class="form-label">Nomor Rekening</label>
                <input type="text" class="form-control" id="cardNumber" placeholder="Masukkan Nomor Rekening" required>
            </div>
            <div class="mb-3">
                <label for="expirationDate" class="form-label">Tanggal - Pembayaran</label>
                <input type="date" class="form-control" id="expirationDate" placeholder="Masukan Tanggal Pembayaran" required>
            </div>
            <div class="mb-3">
                <label for="cardNumber" class="form-label">Atas Nama</label>
                <input type="text" class="form-control" id="cardNumber" placeholder="Masukan Atas Nama" required>
            </div>
            <div class="mb-3">
                <label for="cardNumber" class="form-label">Email</label>
                <input type="text" class="form-control" id="cardNumber" value="<?php echo $_SESSION['email'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="cardNumber" class="form-label">Metode Pembayaran</label>
                <select class="form-select" id="paymentMethod" onchange="displayRekeningInfo()">
                    <option value="" selected disabled>Pilih Metode Pembayaran</option>
                    <option value="shopee">Shopee</option>
                    <option value="bca">BCA</option>
                    <option value="mandiri">Mandiri</option>
                    <!-- Add more payment options as needed -->
                </select>
            </div>
            <div class="mb-3">
                <label for="cardNumber" class="form-label">Bukti Pembayaran</label>
                <input type="file" class="form-control" id="cardNumber">
            </div>
            <!-- <button type="button" class="btn btn-primary" onclick="processPayment()">Proses Pembayaran</button> -->
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" onclick="return confirm('Anda Yakin Bukti Pembayaran Akan Di Simpan?')">Simpan Data</button>
      </div>
    </div>
  </div>
</div>
<script>
    function displayRekeningInfo() {
        const paymentMethod = document.getElementById('paymentMethod').value;
        const rekeningInfoContainer = document.getElementById('rekeningInfo');

        // Clear previous content
        rekeningInfoContainer.innerHTML = '';

        // Display corresponding rekening info based on the selected payment method
        switch (paymentMethod) {
        case 'shopee':
            rekeningInfoContainer.innerHTML = '<h5>Nomor Rekening Shopee:</h5><p>1234 5678 9012 - WAHYU CANDRA UTAMA</p>';
            break;
        case 'bca':
            rekeningInfoContainer.innerHTML = '<h5>Nomor Rekening BCA:</h5><p>9876 5432 1098 - KEMAL ABDUL AZIZ</p>';
            break;
        case 'mandiri':
            rekeningInfoContainer.innerHTML = '<h5>Nomor Rekening Mandiri:</h5><p>8765 4321 0987 - MUHAMMAD AKMAL ALI PASHA</p>';
            break;
        // Add more cases for other payment methods
        default:
            break;
        }
    }

    // function processPayment() {
    //     // Get payment details and process payment
    //     // ...
    //     alert('Pembayaran berhasil!');
    //     $('#exampleModalToggle').modal('hide');
    // }
</script>
