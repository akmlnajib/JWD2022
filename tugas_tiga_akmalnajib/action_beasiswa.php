<?php
    $nim = $_POST['nim']; //variable yang mengambil data dari file form beasiswa
    $nama = $_POST['nama']; //variable yang mengambil data dari file form beasiswa
    $ipk = $_POST['ipk']; //variable yang mengambil data dari file form beasiswa
    $tingkatEkonomi = $_POST['tingkatEkonomi']; //variable yang mengambil data dari file form beasiswa

    echo "NIM : $nim" . "<br>"; // menampilkan nim
    echo "Nama : $nama" . "<br>"; // menampilkan nama
    echo "IPK : $ipk" . "<br>"; // menampilkan ipk

    if ($ipk >= 3 && $tingkatEkonomi == 0 ) { // mengambil data untuk dipertimbangkan
        echo "Selamat, $nama anda berhak mendapatkan beasiswa"; // menampilkan hasil pertimbangan jika dalam kondisi true
    }else {
        echo "Mohon maaf, $nama anda tidak berhak mendapatkan beasiswa"; // // menampilkan hasil pertimbangan jika dalam kondisi false
    }
?>