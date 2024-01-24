<?php
// include'../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_biji = $_POST["nama_biji"];
    $asal_biji = $_POST["asal_biji"];
    $karakteristik = $_POST["karakteristik"];

    // Proses upload gambar
    $gambar = ''; // Simpan nama file gambar ke database
    if ($_FILES["gambar"]["error"] == 0) {
        $target_dir = "path/to/upload/directory/"; // Ganti dengan direktori tempat Anda ingin menyimpan gambar
        $gambar = basename($_FILES["gambar"]["name"]);
        $target_path = $target_dir . $gambar;

        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_path)) {
            // Gambar berhasil diupload
        } else {
            // Gagal upload gambar
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Insert data ke database
    $query_insert = "INSERT INTO biji (nama_biji, asal_biji, karakteristik, gambar) 
                    VALUES ('$nama_biji', '$asal_biji', '$karakteristik', '$gambar')";
    $result_insert = mysqli_query($conn, $query_insert);

    if ($result_insert) {
        // Data berhasil disimpan
        header("Location: index.php?menu=1"); // Ganti dengan halaman yang sesuai
        exit();
    } else {
        // Gagal menyimpan data
        echo "Error: " . $query_insert . "<br>" . mysqli_error($conn);
    }
}

// Tutup koneksi database jika diperlukan
// mysqli_close($conn);
?>
