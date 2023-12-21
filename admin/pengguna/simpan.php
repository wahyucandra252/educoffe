<?php  
include'../../config/koneksi.php';

$id_pengaduan = $_POST['id_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto;
$path = "../../assets/foto/".$fotobaru;

if(move_uploaded_file($tmp_foto, $path)) {

	$query = "INSERT INTO pengaduan values ('$id_pengaduan',now(),'$nik','$isi_laporan','','$fotobaru','baru')";

	if (mysqli_query($koneksi, $query)) {
		echo "
		<script>
		alert('Data Berhasil Disimpan');
		window.location = '../home.php?menu=1';
		</script>
		";
		}else{
			echo "
		<script>
		alert('Maaf terjadi kesalahan');
		window.location = '../home.php?menu=1';
		</script>
		";
		}
	}else{
	echo "
	<script>
	alert('Data Gagal Disimpan');
	window.location = '../home.php?menu=1';
	</script>
	";
	}
?>