<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="container" style="margin:0 auto; width:50%">
    <a href="tambah-siswa.php">Tambah siwa</a>
    <table border="1" align="center" width="50%">
        <tr>
            <td>
                Nama
            </td>
            <td>
                Umur
            </td>
            <td>
                #
            </td>
        </tr>
        <?php
        include 'koneksi.php';
        $query = mysqli_query($koneksi, 'select * from siswa');
        while ($siswa = mysqli_fetch_array($query)){
         ?>
            <tr>
                <td>
                    <?= $siswa['nama'] ?>
                </td>
                <td>
                    <?= $siswa['umur'] ?>
                </td>
                <td>
                    <a herf="edit.php?nama<?= $siswa["nama"] ?>"><button type="submit">Edit</button></a>
                    <a herf="proses-hapus.php?nama=<?= $siswa['nama'] ?>"><button type="submit">Hapus</button></a>
                </td>
            </tr>
        <?php } ?>
    </table>
   </div> 
</body>
</html>