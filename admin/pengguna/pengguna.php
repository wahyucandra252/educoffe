<?php
// include'../config/koneksi.php';

$query = 'SELECT * FROM pengguna ';
$sql = mysqli_query($conn, $query);
?>
<section id="menu" class="menu mt-3">
  <div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>DATA PENGGUNA</h2>
    <p>Data <span>Pengguna EduCoffe</span></p>
  </div>

  <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

    <!-- End tab nav item -->

  </ul>

  <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

    <div class="tab-pane fade active show" id="menu-starters">

      <div class="row gy-5">
		<table class="table table-hover" id="coffeTable">
			<thead class="table table-dark">
				<tr>
					<th>ID PENGGUNA</th>
					<th>NAMA PENGGUNA</th>
					<th>EMAIL</th>
					<th>KOTA</th>
					<th>JENIS KELAMIN</th>
					<th>TANGGAL LAHIR</th>
					<th>AGAMA</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while($row = mysqli_fetch_array($sql)){

				?>
				<tr>
					<td><?php echo $row['id_pengguna']; ?></td>
					<td><?php echo $row['nama_lengkap']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['kota']; ?></td>
					<td><?php echo $row['jenis_kelamin']; ?></td>
					<td><?php echo $row['tanggal_lahir']; ?></td>
					<td><?php echo $row['agama']; ?></td>
					<td>
						<a href="" class="btn btn-outline-warning">Edit</a>
						<a href="" class="btn btn-outline-danger">Hapus</a>
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