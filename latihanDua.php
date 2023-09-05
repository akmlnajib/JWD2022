<?php

    // Menghitung luas segitiga
    //  luas adalah alas * tinggi / 2
    $alas = 10;
    $tinggi = 5;
    $luas = $alas * $tinggi / 2;
    echo "Luas adalah : $luas <br>";

    // Prosedur Menghitung Segitiga
    function hitungLuasSegitiga ($alas, $tinggi){
        //Task
        $luas = $alas * $tinggi / 2;
        echo "Luas Adalah : $luas <br>";
    }

    //Pemanggilan hasil segitiga
    hitungLuasSegitiga(20, 15);
    hitungLuasSegitiga(40, 10);
    hitungLuasSegitiga(10, 20);

    // Function untuk menghitung luas persegi panjang
    // luas = panjang * lebar
    function hitungLuasPersegiPanjang($panjang, $lebar){
        $luas = $panjang * $lebar;
        return $luas;
    }

    $variableBaru = hitungLuasPersegiPanjang(10,8);
    echo "Luas adalah : $variableBaru";
    hitungLuasPersegiPanjang(10,8);
?>