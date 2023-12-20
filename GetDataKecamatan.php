

<?php
include_once 'config/koneksi.php';

if (isset($_POST['id_prov'])) {
    $id_prov = $_POST['id_prov'];

    // Call the selectDataKecamatan function to get kecamatan data
    $result = selectDataKecamatan($id_kab, $id_prov);

    // Build HTML options for the kecamatan dropdown
    $options = '<option value="tambah">= Pilih Kecamatan =</option>';
    while ($row = mysqli_fetch_assoc($result)) {
        $options .= '<option value="' . $row["id_kec"] . '">' . $row["kec"] . '</option>';
    }

    // Send the HTML options as the response
    echo $options;
} else {
    // Handle the case where id_prov is not set
    echo '<option value="tambah">= Pilih Kecamatan =</option>';
}
?>