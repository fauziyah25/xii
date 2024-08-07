<html>
<head>  <title>SMK MUTU</title>  </head>
<body>
   <table border="1">
    <tr>
        <th>Id Kelas</th>
        <th>Nama Kelas</th>
        <th>Kelas</th>
        <th>Siswa aktif</th>
        <th>Tahun Masuk</th>
        <th>Keterangan</th>
    </tr> 
    <?php
    include 'forkoneksi.php';
    $data = mysqli_query($koneksi,"select * from rekap_siswa");
    while($d = mysqli_fetch_array($data)){ ?>
      <tr>
        <td><?php echo $d ['id']; ?></td>
        <td><?php echo $d ['nama']; ?></td>
        <td><?php echo $d ['kelas']; ?></td>
        <td><?php if($d ['siswa_aktif'] == 1){
          echo "<button>nonaktifkan</button>";
        }else if($d ['siswa_aktif'] == 0){
          echo "<button>aktifkan</button>";
        };?></td>
        <td><?php echo $d ['tahun_masuk']; ?></td>
        <td><?php if($d ['tahun_masuk'] <= 2021){
          echo "angkatan lama";
        }else if($d ['tahun_masuk'] > 2021){
          echo "angkatan baru";
        }; ?></td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>
