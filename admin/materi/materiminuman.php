<?php
// include'../config/koneksi.php';

$query = 'SELECT * FROM coffe ';
$sql = mysqli_query($conn, $query);
?>
<section id="menu" class="menu mt-3">
  <div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>DATA MINUMAN</h2>
    <p>Data <span>Minuman EduCoffe</span></p>
  </div>

  <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

    <!-- End tab nav item -->

  </ul>

  <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  +Tambah Minuman Kopi
</button>

    <div class="tab-pane fade active show" id="menu-starters">

    <div class="row gy-5">
		<table class="table table-hover" id="coffeTable">
			<thead class="table table-dark">
				<tr>
					<th>Id Coffe</th>
					<th>Nama Coffe</th>
					<th>Jenis Coffe</th>
					<th>Bahan-Bahan</th>
					<th>Alat-Alat</th>
          <th>Keterangan</th>
          <th>link Video</th>
          <th>Cara Pembuatan</th>
          <th>Gambar</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while($row = mysqli_fetch_array($sql)){

				?>
				<tr>
					<td><?php echo $row['id_coffe']; ?></td>
					<td><?php echo $row['nama_coffe']; ?></td>
					<td><?php echo $row['jenis_coffe']; ?></td>
					<td><?php echo $row['bahan_bahan']; ?></td>
					<td><?php echo $row['alat_alat']; ?></td>
          <td><?php echo $row['keterangan']; ?></td>
          <td><?php echo $row['link_vidio']; ?></td>
          <td><?php echo $row['cara_pembuatan']; ?></td>
          <td><?php echo $row['gambar']; ?></td>
					<td>
						<a href="index.php?menu=6&id=<?php echo $row['id_coffe'];?>" class="btn btn-outline-warning">Edit</a>
						<a href="materi/hapus.php?id=<?php echo $row['id_coffe']; ?>" class="btn btn-outline-danger" onclick="return confirm('Apa Anda Yakin Data Ini Akan di Hapus')">Hapus</a>
					</td>
				</tr>

				<?php
					}
				?>
			</tbody>
		</table>
      </div>
    </div><!-- End Starter Menu Content -->

  </div>

  </div>
</section><!-- End Hero Section -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<form action="materi/simpan.php" method="post" role="form" enctype="multipart/form-data">
			<div class="mb-3">
          <input type="text" class="form-control" placeholder="Nama Kopi" name="nama_coffe">
      </div>
      <div class="mb-3">
          <input type="hidden" class="form-control" placeholder="Nama Kopi" name="id_admin" value="<?php echo $_SESSION['id_admin']; ?>">
          <input type="text" class="form-control" placeholder="Nama Kopi" name="id_admin" value="<?php echo $_SESSION['id_admin']; ?>" readonly>
      </div>
			<div class="mb-3">
      
        <label for="pilihkopi">Jenis Kopi:</label>
          <select id="pilihkopi" name="jenis_coffe" class="form-control">
            <option value="cappucino">Cappucino</option>
            <option value="espresso">Espresso</option>
            <option value="black coffe">Black Coffe</option>
            <option value="irish coffe">Irish Coffe</option>
            <option value="filter coffe">Filter Coffe</option>
            <option value="iced coffe">Iced Coffe</option>
          </select>
        
      </div>
			<div class="mb-3">
        <input type="text" class="form-control" placeholder="Bahan-bahan" name="bahan_bahan">	
      </div>
			<div class="mb-3">
				<input type="text" class="form-control" placeholder="Alat-alat" name="alat_alat">
            </div>
			<div class="mb-3">
        <input type="text" class="form-control" placeholder="Keterangan" name="keterangan">        
            </div>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Link Video" name="link_vidio">        
            </div>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Cara Pembuatan" name="cara_pembuatan">        
            </div>
      <div class="mb-3">
        <!-- <input type="file" class="form-control" placeholder="Gambar" name="gambar">    -->
        <input type="file" class="form-control" name="gambar" id="" required>     
      </div>      
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary">Tambah</button>
			</div>
		</form>
      </div>
    </div>
  </div>
</div>