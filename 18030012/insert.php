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
  <h1 >Vaksinasi COVID-19i</h1>
</div>

<div class="topnav">
<a href="/18030012/login.php">Login</a>
</div>
	  <center>
        <h2>Silahkan Registras</h2>
      <center>
      <form method="POST" action="insert_process.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>NIK</label>
          <input type="text" name="nik" autofocus="" required="" />
        </div>
        <div>
          <label>Username</label>
         <input type="text" name="username" required=""/>
        </div>
        <div>
          <label>Password</label>
         <input type="password" name="password" required="" />
        </div>
        <div>
          <label>Nama Lengkap</label>
         <input type="text" name="nama" required="" />
        </div>
        <div>
          <label>Tempat, Tanggal Lahir</label>
         <input type="text" name="ttl" required="" />
        </div>
		<div>
          <label>Umur</label>
         <input type="text" name="umur" required="" />
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" required="" />
        </div>
        <div>
          <label>Tempat Vaksin</label>
          <select class="form-control" name="tempat_vaksin" id="combo1">
	<option value="Rumah Sakit Pantih Rapih">Rumah Sakit Pantih Rapih</option>
	<option value="Rumah Sakit Siloam">Rumah Sakit Siloam</option>
	<option value="Rumah Sakit Hardjolukito">Rumah Sakit Hardjolukito</option>
	<option value="Kapolres Yogyakarta">Kapolres Yogyakarta</option>
	<option value="Poltekes ITDA">Polteke ITDA</option>
</select>
        </div>
        <div>
          <label>Waktu Vaksin</label>
          <select class="form-control" name="waktu_vaksin" id="combo1">
	<option value="Senin, 08.00 - 13.00">Senin, 08.00 - 13.00</option>
	<option value="Selasa, 08.00 - 13.00">Selasa, 08.00 - 13.00</option>
	<option value="Rabu, 08.00 - 13.00">Rabu, 08.00 - 13.00</option>
	<option value="Kamis, 08.00 - 13.00">Kamis, 08.00 - 13.00</option>
	<option value="Jumat, 08.00 - 13.00">Jumat, 08.00 - 13.00</option>
</select>
        </div>
        <div>
         <button type="submit">Kirim Data</button>
        </div>
        </section>
      </form>
	  <div class="footer">
  <h3>Copyright Aldin Gamas Pamungkas (18030012)</h3>
</div>
</body>
</html>