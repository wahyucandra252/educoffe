<?php
// include'../config/koneksi.php';

$query = 'SELECT * FROM coffe ';
$sql = mysqli_query($conn, $query);
?>
<section id="menu" class="menu mt-3">
  <div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>DATA COFFE</h2>
    <p>Data <span>MATAERI COFFE EduCoffe</span></p>
  </div>

  <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

    <!-- End tab nav item -->

  </ul>

  <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

    <div class="tab-pane fade active show" id="menu-starters">
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Tambah Materi</button>
      <div class="row gy-5">
		<table class="table table-hover" id="coffeTable">
			<thead class="table table-dark">
				<tr>
					<th>ID COFFE</th>
					<th>NAMA COFFE</th>
					<th>JENIS COFFE</th>
					<th>GAMBAR</th>
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
					<td><?php echo $row['gambar']; ?></td>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Materi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" class="form-group">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nama Coffe">
            </div>
            <div class="mb-3">
                <select name="" id="" class="form-control">
                    <option value="">--- Jenis Kopi --- </option>
                    <option value="">Cappucino</option>
                    <option value="">Espresso</option>
                    <option value="">Black Coffe</option>
                    <option value="">Irish Coffe</option>
                    <option value="">Filter Coffe</option>
                    <option value="">Iced Coffe</option>
                </select>
            </div>
            <div class="mb-3">
                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Bahan - Bahan"></textarea>
            </div>
            <div class="mb-3">
                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Alat - Alat"></textarea>
            </div>
            <div class="mb-3">
                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Keterangan"></textarea>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Link Video">
            </div>
            <div class="mb-3">
                <select name="" id="" class="form-control">
                    <option value="">--- Status --- </option>
                    <option value="">0</option>
                    <option value="">1</option>
                </select>
            </div>
            <div class="mb-3">
                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Cara Pembuatan"></textarea>
            </div>
            <div class="mb-3">
                <input type="file" name="" value="">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>