<html>
<head>  <title>TES</title>  
<style>
    .pap{
        background: blue;
    }

</style>
</head>

<body>
   <h2>TODO LIST</h2>
   <table border="1">
    <tr class="pap">
        <th>Kegiantan</th>
        <th>Tanggal</th>
        <th>Status</th>
    </tr> 
    <?php
    include 'koneksi.php';
    $data = mysqli_query($koneksi,"select * from todo_list");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $d ['Kegiatan']; ?></td>
        <td><?php echo $d ['Tanggal']; ?></td>
        <td><?php echo $d ['Status']; ?></td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>