<?php

include "config/koneksi.php";
 
 $query = mysqli_query($koneksi,"select 
                     id_kabkot,id_prov,nama_kabkot 
                 from 
                     mp_kabkot 
                 where id_prov = '".$_POST["param"]."'");

 $result = array(); 
     while ($data = mysqli_fetch_assoc($query)) {
         $result[] = $data;
     }    

 $data['main'] = $result;
 echo json_encode($data);

 ?>
