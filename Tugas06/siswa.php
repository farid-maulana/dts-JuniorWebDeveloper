<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <?php
    $connect = mysqli_connect("localhost", "root", "", "db_siswa");
    echo "berhasil terkoneksi..";
    if( !$connect) {
        die("Gagal terhubung dengan database");
        mysqli_connect_error();
    }
    ?>
    <h1>Data Siswa SMK Digitalent</h1>
    <table>
        <form method="POST">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td colspan=2><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </form>
    </table>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($_POST['submit'])) {
                $nama = $_POST['nama'];
                $umur = $_POST['umur'];
                $alamat = $_POST['alamat'];
                mysqli_query($connect, "INSERT INTO siswa(nama, umur, alamat) VALUES ('$nama', '$umur', '$alamat')");
            }

            $no = 0;
            $query = mysqli_query($connect, "SELECT * FROM siswa");
            while($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo ++$no ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['umur'] ?></td>
                    <td><?php echo $data['alamat'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>