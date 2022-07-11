<?php
$data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

for($j = 0;$j<count($data);$j++){
    //kondisi jika data pada array lebih kecil dari 0 atau negatif
    if($data[$j] < 0){
        echo "Tidak bisa di validasi sistem\n";
    //selain kondisi diatas
    }else{
        echo "index ke ".$j." adalah ".gettype($data[$j])." dengan data ".$data[$j]."\n";
    }
}
?>