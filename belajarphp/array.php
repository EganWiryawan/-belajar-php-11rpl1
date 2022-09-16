<?php
    $nama = "Rizky Catur";
    echo $nama . "<br>";

    $nama_array = array("Fariz", "Eben", "Haikal", "Rizki Giant", "Indra");
    print_r($nama_array); echo "<br>";

    echo $nama_array[0] . "<br>";
    echo $nama_array[1] . "<br>";
    echo $nama_array[2] . "<br>";

    echo "<hr>";
    //Versi foreach
    foreach ($nama_array AS $datanama) {
        echo $datanama . "<br>";

    }

    echo "<hr>";
    //Versi For
    for ($i = 0; $i <= count($nama_array); $i++){
        echo $nama_array[$i] . "<br>";
    }

    //Multiple Array
    $kelas11rpl1 = array(
        array("Rizky Catur", "L", "Mancing"),
        array("Eben", "L", "Maen Bola"),
        array("Fariz", "L", array("Berenang", "Maen Game", "Basket") ),
        array("Volly", array("Maen Kelereng", array("Maen Layangan")) )
    );


    echo "<pre>";
    print_r($kelas11rpl1);
    echo "</pre>";

    echo "<hr>";
    echo $kelas11rpl1[1][0] . " ";
    echo $kelas11rpl1[2][2][0] . " ";
    echo $kelas11rpl1[3][1][1][0] . " ";
    echo $kelas11rpl1[0][2] . " ";
?>