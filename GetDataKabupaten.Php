<?php 
    include_once 'config/koneksi.php';
    $id_prov = $_POST['id_prov'];
 ?>
<select class="FormSelect" id="kab_kota">
    <option value="tambah">= Pilih Kabupaten/Kota =</option>
    <?php 
        $result = selectDataKabupaten($id_prov);
        while ($row = mysqli_fetch_assoc($result)) {
     ?>
        <option value="<?= $row["id_kab"] ?>"><?= $row["kabupaten_kota"] ?></option>
    <?php } ?>
</select>