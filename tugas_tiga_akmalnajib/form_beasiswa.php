<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <form action="action_beasiswa.php" method="post">
            <tabel>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim" id="nim"> </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>IPK</td>
                    <td>:</td>
                    <td><input type="text" name="ipk" id="ipk"></td>
                </tr>
                <tr>
                    <td>Tingkat Ekonomi</td>
                    <td>:</td>
                    <select name="tingkatEkonomi" id="tingkatEkonomi" >
                        <option value="1">Mampu</option>
                        <option value="0">Tidak Mampu</option>
                    </select>
                </tr>
                <tr>
                    <td colspan="3" align="right">
                        <input type="submit" value="submit">
                    </td>
                </tr>
            </tabel>
        </form>
</body>
</html>