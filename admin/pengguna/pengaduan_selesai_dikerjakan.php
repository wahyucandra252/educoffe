<?php 
include'../config/koneksi.php';
// include'../config/autonumber.php';

$nik = $_SESSION['nik'];
$query = "SELECT * FROM pengaduan WHERE nik='$nik' AND status='selesai dikerjakan' ORDER BY tanggal_pengaduan DESC";
$sql = mysqli_query($koneksi, $query);
?>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3>Data Pengaduan Selesai Dikerjakan</h3>
					<!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Tambah Data Pengaduan</a><br><br> -->
					<table id="dataTable" class="table table-hover">
						<thead class="table-dark">
							<tr>
								<th>ID_PENGADUAN</th>
								<th>ISI LAPORAN</th>
								<th>TANGGAPAN</th>
								<th>FOTO</th>
								<th>STATUS</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								while ($row = mysqli_fetch_array($sql)){
									$id_pengaduan = $row['id_pengaduan'];
									$q2 = "SELECT * FROM tanggapan where id_pengaduan='$id_pengaduan'";
									$r2 = mysqli_query($koneksi, $q2);
									$d2 = mysqli_fetch_array($r2);
							?>
							<tr>
								<td><?php echo $row['id_pengaduan']; ?></td>
								<td><?php echo $row['isi_laporan']; ?></td>
								<td><?php echo $d2['tanggapan']; ?></td>
								<td><img src="../assets/foto/<?php echo $row['foto']; ?>" style="width: 80px;"></td>
								<td><button class="btn btn-primary"><?php echo $row['status']; ?></button></td>
								<td>
									<a class="btn btn-outline-primary lihat" data-toggle="modal" data-target="#lihat" id="<?php echo $row['id_pengaduan']; ?>"><i class="fas fa-eye"></i></a>
								</td>
							</tr>
							<?php 
								}
							?>
						</tbody>
					</table>	
				</div>
			</div>
		</div>
	</div>	
</div>
<div class="modal" id="lihat">

</div>