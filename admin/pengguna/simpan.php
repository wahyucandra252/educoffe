<?php
include'../../config/koneksi.php';

$id_admin = $_POST['id_admin'];
$nama_biji = $_POST['nama_biji'];
$asal_biji = $_POST['asal_biji'];
$karakteristik = $_POST['karakteristik'];
// $gambar = $_POST['gambar'];
$foto = $_FILES['gambar']['name'];
$tmp_foto = $_FILES['gambar']['tmp_name'];

$fotobaru = date('dmYHis').$foto;
$path = "../../assets/img/kopi/".$fotobaru;

if(move_uploaded_file($tmp_foto, $path)) {
	
	$query = "INSERT INTO biji VALUES ('','$id_admin','$nama_biji','$asal_biji','$karakteristik','$fotobaru')";

	if (mysqli_query($conn, $query)) {
		echo "
		<script>
		alert('Data Berhasil di Tambahkan');
		window.location = '../index.php?menu=2';
		</script>
		";
	}else{
		echo "
		<script>
		alert('Data Gagal di Tambahkan');
		window.location = '../index.php?menu=2';
		</script>
		";
	}
}else{
	echo "
	<script>
	alert('Data Gagal Disimpan');
	window.location = '../index.php?menu=2';
	</script>
	";
	}

?>
