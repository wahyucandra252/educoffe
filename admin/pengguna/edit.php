<?php  
include"../../config/koneksi.php";

$id_biji = $_POST['id_biji'];
$nama_biji = $_POST['nama_biji'];
$asal_biji = $_POST['asal_biji'];
$karakteristik = $_POST['karakteristik'];

$query = "UPDATE biji SET nama_biji='$nama_biji', asal_biji='$asal_biji', karakteristik='$karakteristik' where id_biji='$id_biji'";

if (mysqli_query($conn, $query)) {
	echo "
	<script>
	alert('Data Berhasil di Ubah');
	window.location = '../index.php?menu=2';
	</script>
	";
}else{
	echo "
	<script>
	alert('Data Gagal di Ubah');
	window.location = '../index.php?menu=2';
	</script>
	";
}
?>