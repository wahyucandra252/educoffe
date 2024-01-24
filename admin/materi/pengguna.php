<?php
// include'../config/koneksi.php';

$query = 'SELECT * FROM coffe ';
$sql = mysqli_query($conn, $query);
?>
<section id="menu" class="menu mt-3">
  <div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>DATA COFFE</h2>
    <p>Data <span>Materi</span></p>
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
					<th>Id Coffe</th>
					<th>Nama Coffe</th>
					<th>Jenis_coffe</th>
					<th>Bahan Bahan</th>
					<th>Alat Alat</th>
					<th>keterangan</th>
                    <th>Link Vidio</th>
					<th>Cara Pembuatan</th>
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
					<td>
						<a href="index.php?menu=5&id=<?php echo $row['id_coffe'];?>" class="btn btn-outline-warning">Edit</a>
						<a href="pengguna/hapus.php?id=<?php echo $row['id_coffe']; ?>" class="btn btn-outline-danger" onclick="return confirm('Apa Anda Yakin Data Ini Akan di Hapus')">Hapus</a>
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