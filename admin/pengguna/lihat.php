<?php
include '../../config/koneksi.php';
include '../../config/autonumber.php';
session_start();

$id=$_GET['id'];
$q2 = "SELECT * FROM pengaduan where id_pengaduan = '$id'";
$r2 = mysqli_query($koneksi, $q2);
$data = mysqli_fetch_array($r2);

?>

<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		</div>
		<div class="modal-body">
			<form action="#" method="POST" role="form">
				<legend>Lihat Detail</legend>

				<div class="form-group" >
					<table class="table">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td><img src="../assets/foto/<?php echo $data['foto']; ?>" style="width: 100px;"></td>
						</tr>
					</table>
				</div>

				<div class="form-group">
					<table border="1" class="table table-hover">
						<tr>
							<td><label>ID PENGADUAN</label></td>
							<td>:</td>
							<td>
								<?php echo $data['id_pengaduan']; ?>
							</td>
						</tr>
						<tr>
							<td><label>TANGGAL PENGADUAN</label></td>
							<td>:</td>
							<td>
								<?php echo $data['tanggal_pengaduan']; ?>
							</td>
						</tr>
						<tr>
							<td><label for="">ID PELAPOR</label></td>
							<td>:</td>
							<td>
								<?php  echo $data['nik']; ?>
							</td>
						</tr>
						<tr>
							<td><label for="">ISI LAPORAN</label></td>
							<td>:</td>
							<td>
								<?php echo $data['isi_laporan']; ?>
							</td>
						</tr>
						<tr>
							<td><label for="">STATUS</label></td>
							<td>:</td>
							<td>
								<?php echo $data['status'];?>
							</td>
						</tr>
					</table>
				</div>

					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
	
			</form>
		</div>
	</div>
</div>