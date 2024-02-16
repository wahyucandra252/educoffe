<?php  
include'../../config/koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM biji where id_biji='$id'";

if (mysqli_query($conn, $query)) {
	echo "
	<script>
	alert('Data Berhasil Di Hapus');
	window.location = '../index.php?menu=2';
	</script>
	";
}else{
	echo "
	<script>
	alert('Data Gagal Dihapus);
	window.location = '../index.php?menu=2';
	</script>
	";
}
?>	