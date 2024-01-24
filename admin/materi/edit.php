<?php  
include"../../config/koneksi.php";

$id_coffe = $_POST['id_coffe'];
$nama_coffe = $_POST['nama_coffe'];
$jenis_coffe = $_POST['jenis_coffe'];
$bahan_bahan = $_POST['bahan_bahan'];
$alat_alat = $_POST['alat_alat'];
$keterangan = $_POST['keterangan'];
$link_vidio = $_POST['link_vidio'];
$cara_pembuatan = $_POST['cara_pembuatan'];


$query = "UPDATE coffe SET nama_coffe='$nama_coffe', jenis_coffe='$jenis_coffe', bahan_bahan='$bahan_bahan', alat_alat='$alat_alat', keterangan='$keterangan', link_vidio='$link_vidio', cara_pembuatan='$cara_pembuatan'  where id_coffe='$id_coffe'";

if (mysqli_query($conn, $query)) {
	echo "
	<script>
	alert('Data Berhasil di Ubah');
	window.location = '../index.php?menu=3';
	</script>
	";
}else{
	echo "
	<script>
	alert('Data Gagal di Ubah');
	window.location = '../index.php?menu=3';
	</script>
	";
}
?>