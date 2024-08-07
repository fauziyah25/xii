<html>
<head>  <title>SMK MUTU</title>  </head>
<body>
   <h2>DATA KELAS</h2>
   <br/>
   <a href ="tambah.php">+ TAMBAH KELAS</a> <br/><br/>
   <table border="1">
    <tr>
        <th>Id Kelas</th>
        <th>Nama Kelas</th>
        <th>Wali Kelas</th>
        <th>Aksi</th>
    </tr> 
    <?php
    include 'koneksi.php';
    $data = mysqli_query($koneksi,"select * from kelas");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $d ['idkelas']; ?></td>
        <td><?php echo $d ['namakelas']; ?></td>
        <td><?php echo $d ['walikelas']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $d['idkelas']; ?>" ?>EDIT</a>
            <a href="hapus.php?id=<?php echo $d['idkelas']; ?>" ?>HAPUS</a>
         </td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>
