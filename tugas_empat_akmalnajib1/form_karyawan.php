<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    $listAgama = ['Kristen', 'Hindu', 'Islam', 'Budha'];
    sort($listAgama); // Mengurutkan array dari terkecil
    $listGolongan = ['I', 'II', 'III'];
    rsort($listGolongan); // Mengurutkan array dari terbesar

    $fileJson = 'data_karyawan.json'; // Untuk Menampung/Menyimpan data
    $dataKaryawan = array(); // Untuk menyimpan data untuk masuk ke file json

    // membaca file json
    $dataJson = file_get_contents($fileJson);  // isi parameter diambil dari file json
    $dataKaryawan = json_decode($dataJson, true);

    if (isset($_GET['btnSave'])) {
        # mengambil data
        $nik = $_GET['nik'];
        $nama = $_GET['nama'];
        $jenisKelamin = $_GET['jenisKelamin'];
        $agama = $_GET['agama'];
        $golongan = $_GET['golongan'];
        $gajiPokok = $_GET['gajiPokok'];

        // Membuat array assosiative baru
        $dataBaru = array(
            "nik" => $nik,
            "nama" => $nama,
            "jenisKelamin" => $jenisKelamin,
            "agama" => $agama,
            "golongan" => $golongan,
            "gajiPokok" => $gajiPokok
        );

        // memasukkan object kedata baru ke data karyawan yang ada
        array_push($dataKaryawan, $dataBaru);

        // mengubah array ke json
        $datatoJson = json_encode($dataKaryawan, JSON_PRETTY_PRINT);

        // menulis ke file json
        file_put_contents($fileJson, $datatoJson);
    }

    function hitungTunjangan($golongan){
        if($golongan == 'I'){
            return 1000000;
        } else if ($golongan == 'II'){
            return 2000000;
        } else {
            return 3000000;
        }
    }

    function hitungPajak($gajiPokok, $tunjangan){
        $pajak = ($gajiPokok + $tunjangan) * 0.05;
        return $pajak;
    }
?>

<body>
    <h1>Form Karyawan</h1>
    <form action="#" method="get">
    <table>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td>
                <input type="number" name="nik" id="nik" minlength="8">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <input type="text" name="nama" id="nama">
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select name="jenisKelamin" id="jenisKelamin">
                    <option value="1">Laki-laki</option>
                    ,<option value="0">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
                <select name="agama" id="agama">
                    <?php
                    // Perulangan
                    // 1. Conditional (True False)
                    // -- While do, do while
                    // 2. Unconditional looping (perulangan pasti jumlahnya)
                    // -- for
                    // foreach ($listAgama as $agama) {
                        # code...
                    //    echo "<option value='$agama'>$agama</option>";
                    // }

                    for ($index=0; $index < count($listAgama); $index++) { 
                        # code...
                        echo "<option calue ='$listAgama[$index]'>$listAgama[$index]</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Golongan</td>
            <td>:</td>
            <td>
                <select name="golongan" id="golongan">
                    <?php
                        foreach ($listGolongan as $golongan) {
                            # code...
                            echo "<option value='$golongan'>$golongan</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gaji Pokok</td>
            <td>:</td>
            <td>
                <input type="number" name="gajiPokok" id="gajiPokok">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" value="save" name="btnSave" id="btnSave">
            </td>
        </tr>
    </table>
    </form>

    <hr>
    <table border="1" align="center">
        <tr>
            <td>NIK</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Agama</td>
            <td>Golongan</td>
            <td>Gaji Pokok</td>
            <td>Tunjangan</td>
            <td>Pajak</td>
            <td>Total Gaji</td>
        </tr>

        <?php
            // menampilkan data
            foreach ($dataKaryawan As $karyawan) { 
                
                $tunjangan = hitungTunjangan($karyawan['golongan']);
                $gajiPokok = $karyawan['gajiPokok'];
                $pajak = hitungPajak($gajiPokok, $tunjangan);
                $gaji = ($gajiPokok + $tunjangan) - $pajak ;


                echo "<tr";
                echo "<td>". $karyawan['nik'] ."</td>";
                echo "<td>". $karyawan['nama'] ."</td>";
                echo "<td>". $karyawan['golongan'] ."</td>";
                echo "<td>". $karyawan['agama'] ."</td>";
                echo "<td>". $karyawan['gajiPokok'] ."</td>";
                echo "<td>". $tunjangan ."</td>";
                echo "<td>". $pajak ."</td>";
                echo "<td>$gaji</td>";
                echo "</tr>";
            } 
            ?>
    </table>

    
</body>
</html>