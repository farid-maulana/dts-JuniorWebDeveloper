<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Peserta</title>
</head>
<body>
    <h1>Latihan Validasi Form <br> --</h1>
    <h3>Masukkan biodata:</h3>
    <table>
        <form action="cek.php" method="POST">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td><textarea name="tempat" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki">Laki-aki
                    <input type="radio" name="jk" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Usia</td>
                <td><input type="number" name="usia"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </form>
    </table>
</body>
</html>