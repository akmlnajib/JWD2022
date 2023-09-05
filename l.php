<?php
function kenalan($nama, $kota){
    $pesan = "Perkenalkan, nama saya $nama\n";
    $pesan  = "Asal Kota $kota\n";
    return $pesan;
}

$nama = "Mukidi";
$kota = "Malang";

$hasil = kenalan($nama, $kota);
echo $hasil;

?>
