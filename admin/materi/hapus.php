<?php  
include'../../config/koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM  where id_coffe='$id'";

if (mysqli_query($koneksi, $query)) {
	echo "
	<script>

	alert('Data Berhasil Di Hapus');
	window.location = '../home.php?menu=3';
	</script>
	";
}else{
	echo "
	<script>
	alert('Data Gagal Dihapus);
	window.location = '../home.php?menu=3';
	</script>
	";
}
?>	