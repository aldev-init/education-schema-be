<?php
    $data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

    for($i = 0;$i<count($data);$i++){
        //jika yang keluar angka 5
        if($data[$i] == 5){
            echo "Fizz\n";
        //jika yang keluar angka 11
        }
        else if($data[$i] == 11){
            echo "Buzz\n";
        }
        // else if($data[$i] == 5 && $data[$i] == 11){
        //     echo "FizzBuzz\n";
        // }
        //jika yang keluar angka selain 5 dan 11
        else{
            echo "FizzBuzz\n";
        }
    }

    //sebelumnya mohon maaf kak panitia,saya kurang mengerti arti poin ke 3 yaitu
    //Jika angka yang keluar adalah 5 dan 11 maka output yang di hasilkan adalah "FizzBuzz"
    //setahu saya jika looping array yang muncul itu 1 angka
    //jadi saya asumsikan poin ketiga itu jika yang keluar bukan 5 atau 11
    //sebelumnya mohon maaf jika saya lancang mengasumsikannya kak.
?>