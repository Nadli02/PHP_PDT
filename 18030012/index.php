<?php
  include('koneksi.php'); 
  
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="layout.css" type="text/css">
</head>
<body>

<div class="header">
  <h1 >Data Pendaftar Vaksin</h1>
</div>

<div class="topnav">
  <a>Welcome Admin</a>
  <a href="/18030012/index_u.php">Data Utama</a>
  <a href="/18030012/login.php">Logut</a>
  </div>
	<center>
        <h2>Data Vaksinasi Sementara</h2>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>NIK</th>
          <th>Nama Lengkap</th>
          <th>Tempat, Tanggal-Lahir</th>
          <th>Umur</th>
          <th>Alamat</th>
          <th>Tempat Vaksin</th>
          <th>Waktu Vaksin</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM tbl_sementara ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      $no = 1; 
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
	   
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nik']; ?></td>
          <td><?php echo $row['nama'];?> </td>
          <td><?php echo $row['ttl']; ?></td>
          <td><?php echo $row['umur']; ?></td>
		  <td><?php echo $row['alamat']; ?></td>
		  <td><?php echo $row['tempat_vaksin'];?></td>
      <td><?php echo $row['waktu_vaksin'];?></td>
      <td>
          <a href="delete_process.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data Vaksin Anda?')">Hapus</a> 
          </td>
      <td>
          <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> 
          </td>
      </tr>
      <?php
        $no++;
      }
      ?>
	  </table>
	  <div class="footer">
  <h3>Copyright Aldin Gamas Pamungkas (18030012)</h3>
</div>
</body>
</html>