<?php

$conn = mysqli_connect('localhost','root','','educoffe_db');

// function koneksiDB() {
    
//     $host = "localhost";
//     $username = "root";
//     $password = "";
//     $db = "educoffe_db";
//     $conn = mysqli_connect($host, $username, $password, $db);
    
//     if(!$conn) {
//         die("Koneksi Database Gagal : " .mysqli_connect_error());
//     } else {
//         return $conn;
//     }
// }
// function selectAllData() {
//     $query = "SELECT * FROM tb_provinsi";
//     $result = mysqli_query(koneksiDB(), $query);
//     return $result;
// }
// function selectDataKabupaten($id_prov) {
//     $query = "SELECT * FROM tb_kabupaten_kota WHERE id_prov = '$id_prov'";
//     $result = mysqli_query(koneksiDB(), $query);
//     return $result;
// }

// function selectDataKecamatan($id_kab,$id_prov) {
//     $query = "SELECT * FROM tb_kec WHERE id_prov = '$id_prov' AND id_kab = '$id_kab'";
//     $result = mysqli_query(koneksiDB(), $query);
//     return $result;
// }

?>