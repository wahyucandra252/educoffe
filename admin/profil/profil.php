<?php 
include'../config/koneksi.php';
include'../config/autonumber.php';

$nik = $_SESSION['nik'];
$query = "SELECT * FROM masyarakat where nik='$nik'";
$sql = mysqli_query($koneksi, $query);
$data2 = mysqli_fetch_array($sql);

?>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3>Profil</h3>
                    <hr>
					<!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Tambah Data Pengaduan</a><br><br> -->
                        <form action="">
                            <label for="">ID PELAPOR</label>
                            <p><?php echo $data2['nik']?></p>
                            <hr>
                            <label for="">NAMA LENGKAP</label>
                            <p><?php echo $data2['nama_lengkap']?></p>
                            <hr>
                            <label for="">TANGGAL LAHIR</label>
                            <p><?php echo $data2['tanggal_lahir']?></p>
                            <hr>
                            <label for="">NOMOR TELEPON</label>
                            <p><?php echo $data2['no_telp']?></p>
                            <hr>
                            <label for="">ALAMAT</label>
                            <p><?php echo $data2['alamat']?></p>
                            <hr>
                            <label for="">JENIS KELAMIN</label>
                            <p><?php echo $data2['jenis_kelamin']?></p>
                            <hr>
                            <label for="">AGAMA</label>
                            <p><?php echo $data2['agama']?></p>
                            <hr>
                            <label for="">STATUS AKUN</label>
                            <p><?php echo $data2['status_pelayanan']?></p>
                            <hr>
                            <label for="">USERNAME</label>
                            <p><?php echo $data2['username']?></p>
                            <hr>
                            <label for="">EMAIL</label>
                            <p><?php echo $data2['email']?></p>
                        </form>
				</div>
			</div>
		</div>
	</div>	
</div>
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"></h4>
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
							<td><img src="../admin/foto/<?php echo $data['foto']; ?>" style="width: 100px;"></td>
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
							<td><label for="">ID TANGGAPAN</label></td>
							<td>:</td>
							<td>
								<?php echo autonumber('tanggapan','id_tanggapan',3,'T'); ?>
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
						<tr>
							<td><label for="">TANGGAPAN</label></td>
							<td>:</td>
							<td>
								<?php echo $d2['tanggapan'];?>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</form>
		</div>
	</div>
</div>
