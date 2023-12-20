<?php
include_once 'config/koneksi.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $kota = $_POST['kota'];
    $kecamatan = $_POST['kecamatan'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $agama = $_POST['agama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];

    // Perform any necessary form validation here

    // Insert data into the database
    $conn = koneksiDB();
    $query = "INSERT INTO pengguna (nama_lengkap, email, password, kota, kecamatan, rt, rw, agama, jenis_kelamin, tanggal_lahir, alamat)
              VALUES ('$nama_lengkap', '$email', '$password', '$kota', '$kecamatan', '$rt', '$rw', '$agama', '$jenis_kelamin', '$tanggal_lahir', '$alamat')";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
