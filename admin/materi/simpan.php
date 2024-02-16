<?php
include'../../config/koneksi.php';

$nama_coffe = $_POST['nama_coffe'];
$id_admin = $_POST['id_admin'];
$jenis_coffe = $_POST['jenis_coffe'];
$bahan_bahan = $_POST['bahan_bahan'];
$alat_alat = $_POST['alat_alat'];
$keterangan = $_POST['keterangan'];
$link_vidio = $_POST['link_vidio'];
$cara_pembuatan = $_POST['cara_pembuatan'];
$foto = $_FILES['gambar']['name'];
$tmp_foto = $_FILES['gambar']['tmp_name'];

$fotobaru = date('dmYHis').$foto;
$path = "../../assets/img/kopi/".$fotobaru;

// $query = "INSERT INTO coffe VALUES ('','$nama_coffe','$id_admin','$jenis_coffe','$bahan_bahan','$alat_alat','$keterangan','$link_vidio','','$cara_pembuatan','$gambar')";

if(move_uploaded_file($tmp_foto, $path)) {
	
	$query = "INSERT INTO coffe VALUES ('','$id_admin','$nama_coffe','$jenis_coffe','$bahan_bahan','$alat_alat','$keterangan','$link_vidio','','$cara_pembuatan','$fotobaru')";
	
	if (mysqli_query($conn, $query)) {
		echo "
		<script>
		alert('Data Berhasil Disimpan');
		window.location = '../index.php?menu=3';
		</script>
		";
		}else{
			echo "
		<script>
		alert('Maaf terjadi kesalahan');
		window.location = '../index.php?menu=3';
		</script>
		";
		}
	}else{
	echo "
	<script>
	alert('Data Gagal Disimpan');
	window.location = '../index.php?menu=3';
	</script>
	";
	}

?>
