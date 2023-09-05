<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <form action=" " method="get">
            <label for="angkaPertama">Angka Pertama : </label>
            <input type="text" name="angkaPertama" id="angkaPertama" /> <br>
            <label for="angkaKedua">Angka Kedua : </label>
            <input type="number" name="angkaKedua" id="angkaKedua" /> <br>
            <input type="submit" value="Tambah" name="btnHitung" id="btnHitung"/>
            <input type="submit" value="Kurang" name="btnHitung" id="btnHitung"/>
            <input type="submit" value="Kali" name="btnHitung" id="btnHitung"/>
            <input type="submit" value="Bagi" name="btnHitung" id="btnHitung"/>
        </form>

        <?php 

            include "function_Matematika.php"; // Pemanggilan dari file lain
            
            if(isset($_GET['btnHitung'])){ // Menghilangkan error/warning
                $angkaPertama = $_GET['angkaPertama']; //  Pengambilan data dari form
                $angkaKedua = $_GET['angkaKedua']; //  Pengambilan data dari form

                if ($_GET['btnHitung'] == "Tambah") {
                    $tambah = penjumlahan($angkaPertama, $angkaKedua); // mengambil data untuk dihitung
                    echo "Hasil dari $angkaPertama + $angkaKedua = $tambah"; // menampilkan data hasil hitungan
                } else if ($_GET['btnHitung'] == "Kurang") {
                    $kurang = pengurangan($angkaPertama, $angkaKedua); // mengambil data untuk dihitung
                    echo "Hasil dari $angkaPertama - $angkaKedua = $kurang"; // menampilkan data hasil hitungan
                } else if ($_GET['btnHitung'] == "Kali") {
                    $kali = perkalian($angkaPertama, $angkaKedua); // mengambil data untuk dihitung
                    echo "Hasil dari $angkaPertama x $angkaKedua = $kali"; // menampilkan data hasil hitungan
                } else if ($_GET['btnHitung'] == "Bagi") {
                    $bagi = pembagian($angkaPertama, $angkaKedua); // mengambil data untuk dihitung
                    echo "Hasil dari $angkaPertama : $angkaKedua = $bagi"; // menampilkan data hasil hitungan
                }
            }
        ?>
</body>
</html>