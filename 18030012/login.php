<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') { 
include 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

if($username == 'admin'){
    header("location:index.php");
}
else{
$query_sql = "SELECT * FROM tbl_utama WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($koneksi, $query_sql);
if(mysqli_num_rows($result) > 0){
    $_SESSION['username'] = $username;
    $my = urlencode('MCN solution');
    echo "<a href=\"index_1.php?name=$my\">";
    header("location:index_1.php");
}
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="layout.css" type="text/css">
</head>
<body>

<div class="header">
  <h1 >Vaksinasi COVID-19</h1>
</div>

<div class="topnav">
  <a href="/18030012/insert.php">Register</a>

</div>
	  <center>
        <h2>Silahkan Login</h2>
      <center>
      <form method="POST">
      <section class="base">
            <div>
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>


            <div>
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn btn-success btn-block" name="login" value="Login" />
            </section>
        </form>
        <div class="footer">
  <h3>Copyright Aldin Gamas Pamungkas (18030012)</h3>
</div>
</body>
</html>