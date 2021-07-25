<?php
  include('koneksi.php');
  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);
    $query = "SELECT * FROM tbl_sementara WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
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
  <a href="/18030012/index.php">Data Sementara</a>
  <a href="/18030012/index_u.php">Data Utama</a>
  <a href="/18030012/login.php">Logut</a>
  </div>
<center>
<h2>Edit Data Pendaftar</h2>
      <center>
      <form method="POST" action="insert_process_1.php" enctype="multipart/form-data" >
      <section class="base">
      <input name="id" value="<?php echo $data['id']; ?>"  hidden />
      <input name="username" value="<?php echo $data['username']; ?>"  hidden />
      <input name="password" value="<?php echo $data['password']; ?>"  hidden />
        <div>
          <label>NIK</label>
          <input type="text" name="nik" value="<?php echo $data['nik']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Nama Lengkap</label>
         <input type="text" name="nama" required="" value="<?php echo $data['nama']; ?>" />
        </div>
        <div>
          <label>Tempat, Tanggal Lahir</label>
         <input type="text" name="ttl" required="" value="<?php echo $data['ttl']; ?>" />
        </div>
        <div>
          <label>Umur</label>
         <input type="text" name="umur" required="" required="" value="<?php echo $data['umur']; ?>"/>
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" required="" required="" value="<?php echo $data['alamat']; ?>"/>
        </div>
		<div>
          <label>Tempat Vaksin</label>
         <input type="text" name="tempat_vaksin" required="" required="" value="<?php echo $data['tempat_vaksin']; ?>"/>
        </div>
        <div>
          <label>Waktu Vaksin</label>
         <input type="text" name="waktu_vaksin" required="" required="" value="<?php echo $data['waktu_vaksin']; ?>"/>
        </div>
        <div>
         <button type="submit">Simpan Data</button>
        </div>
        </section>
      </form>
	  <div class="footer">
  <h3>Copyright Aldin Gamas Pamungkas (18030012)</h3>
</div>
</body>
</html>