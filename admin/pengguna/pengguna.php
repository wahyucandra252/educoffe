<?php
// include'../config/koneksi.php';

$query = 'SELECT * FROM biji ';
$sql = mysqli_query($conn, $query);
?>
<section id="menu" class="menu mt-3">
  <div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>DATA Biji</h2>
    <p>Data <span>Biji EduCoffe</span></p>
  </div>

  <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

    <!-- End tab nav item -->

  </ul>

  <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  +Tambah Biji Kopi
</button>

    <div class="tab-pane fade active show" id="menu-starters">

      <div class="row gy-5">
		<table class="table table-hover" id="coffeTable">
			<thead class="table table-dark">
				<tr>
					<th>Id Biji</th>
					<th>Nama Biji</th>
					<th>Asal Biji</th>
					<th>Karakteristik</th>
					<th>Gambar</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while($row = mysqli_fetch_array($sql)){

				?>
				<tr>
					<td><?php echo $row['id_biji']; ?></td>
					<td><?php echo $row['nama_biji']; ?></td>
					<td><?php echo $row['asal_biji']; ?></td>
					<td><?php echo $row['karakteristik']; ?></td>
					<td><?php echo $row['gambar']; ?></td>
					<td>
						<a href="index.php?menu=5&id=<?php echo $row['id_biji'];?>" class="btn btn-outline-warning">Edit</a>
						<a href="pengguna/hapus.php?id=<?php echo $row['id_biji']; ?>" class="btn btn-outline-danger" onclick="return confirm('Apa Anda Yakin Data Ini Akan di Hapus')">Hapus</a>
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
		<form action="">
			<div class="mb-3">
                <input type="text" class="form-control" placeholder="Nama Biji Kopi">
            </div>
			<div class="mb-3">
                <input type="text" class="form-control" placeholder="Asal Biji Kopi">
            </div>
			<div class="mb-3">
                <input type="text" class="form-control" placeholder="karakteristik">	
            </div>
			<div class="mb-3">
                <input type="file" name="" value="">
            </div>
			
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>