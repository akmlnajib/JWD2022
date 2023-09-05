<?php
    // Judul perhitungan dengan prosedur
    echo "<h2>Menggunakan Prosedure</h2>";

    // Prosedur menghitung penjumlahan
    function penjumlahan ($satu, $dua){
        //Task
        $hitung = $satu + $dua ;
        echo "20 + 30 = $hitung <br>";
    }
    // Perhitungan penjumlahan yang akan ditampilkan
    penjumlahan(20, 30);

    // Prosedur menghitung pengurangan
    function pengurangan ($satu, $dua){
        //Task
        $hitung = $satu - $dua ;
        echo "30 - 14 = $hitung <br>";
    }
    // Perhitungan penjumlahan yang akan ditampilkan
    pengurangan(30, 14);

    // Prosedur menghitung perkalian
    function perkalian ($satu, $dua){
        //Task
        $hitung = $satu * $dua ;
        echo "15 x 15 = $hitung <br>";
    }
    // Perhitungan perkalian yang akan ditampilkan
    perkalian(15, 15);

    // Prosedur menghitung pembagian
    function pembagian ($satu, $dua){
        //Task
        $hitung = $satu / $dua ;
        echo "200 : 10 = $hitung <br>";
    }
    // Perhitungan pembagian yang akan ditampilkan
    pembagian(200, 10);
    
    //Judul
    echo "<h2>Menghitung dengan menggunakan Function</h2>";
    
    //penjumlahan menggunakan function
    function functionPenjumlahan($satu, $dua){
        // Task
        $hitung = $satu + $dua;
        // Pengembalian
        return $hitung;
    }

    // Variable baru penjumlahan untuk menampilkan hasil dari function penjumlahan
    functionPenjumlahan(10,8);
    $function_penjumlahan = functionPenjumlahan(10,8);
    echo "10 + 8 = $function_penjumlahan<br>";


    //pengurangan menggunakan function
    function functionPengurangan($satu, $dua){
        // Task
        $hitung = $satu - $dua;
        // Pengembalian
        return $hitung;
    }

    // Variable baru penjumlahan untuk menampilkan hasil dari function pengurangan
    functionPengurangan(10,8);
    $function_pengurangan = functionPengurangan(10,8);
    echo "10 - 8 = $function_pengurangan<br>";

    //perkalian menggunakan function
    function functionPerkalian($satu, $dua){
        // Task
        $hitung = $satu * $dua;
        // Pengembalian hasil input
        return $hitung;
    }

    // Variable baru penjumlahan untuk menampilkan hasil dari function perkalian
    functionPerkalian(10,8);
    $function_perkalian = functionPerkalian(10,8);
    echo "10 x 8 = $function_perkalian<br>";

    //pembagian menggunakan function
    function functionPembagian($satu, $dua){
        // Task
        $hitung = $satu / $dua;
        // Pengembalian hasil input
        return $hitung;
    }

    // Variable baru pembagian untuk menampilkan hasil dari function pembagian
    functionPembagian(10,8);
    $function_pembagian = functionPembagian(10,8);
    echo "10 : 8 = $function_pembagian<br>";
    
?>