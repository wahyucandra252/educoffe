<?php
include "../config/autonumber.php";
?>

<br>
<div class="container mt-2">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3>Buat Pengaduan</h3>
				</div>
				<div class="card-body">
					
					<form action="pengaduan/simpan.php" method="POST" role="form" enctype="multipart/form-data">
						<legend>Tambah Data Pengaduan</legend>
						
						<div class="form-group">
							<label>ID PENGADUAN</label>
							<input type="hidden" class="form-control" name="id_pengaduan" value="<?php echo autonumber('pengaduan','id_pengaduan',3,'P');?>" id="" placeholder="ID_PENGADUAN">
							<input type="text" class="form-control" name="id_pengaduan2" value="<?php echo autonumber('pengaduan','id_pengaduan',3,'P');?>" id="" placeholder="ID_PENGADUAN" disabled>
						</div>
						
						<div class="form-group">
							<label>ID PELAPOR</label>
							<input type="hidden" class="form-control" name="nik" value="<?php echo $_SESSION ['nik']; ?>" id="">
							<input type="text" class="form-control" name="nik2" value="<?php echo $_SESSION ['nik']; ?>" id="" disabled>
						</div>

						<div class="form-group">
							<label>ISI LAPORAN</label>
							<textarea class="form-control" name="isi_laporan"></textarea>
						</div>

						<div class="form-group">
							<label>FOTO</label>
							<input type="file" class="form-control" name="foto" id="" required>
						</div>
						
						
						<button type="submit" class="btn btn-default" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
					

				</div>
			</div>
		</div>	
	</div>
</div>