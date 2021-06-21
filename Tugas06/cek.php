<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Biodata Peserta</title>
</head>
<body>
    <h1>Hasil Masukan Form Latihan</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat</th>
                <th>Jenis Kelamin</th>
                <th>Usia</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_POST['nama']; ?></td>
                <td><?php echo $_POST['alamat']; ?></td>
                <td><?php echo $_POST['tempat']; ?></td>
                <td><?php echo $_POST['jk']; ?></td>
                <td><?php echo $_POST['usia']; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>