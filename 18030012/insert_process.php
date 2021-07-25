<?php
include 'koneksi.php';

  $nik            = $_POST['nik'];
  $username       = $_POST['username'];
  $password       = $_POST['password'];
  $nama           = $_POST['nama'];
  $ttl            = $_POST['ttl'];
  $umur           = $_POST['umur'];
  $alamat         = $_POST['alamat'];
  $tempat_vaksin  = $_POST['tempat_vaksin'];
  $waktu_vaksin   = $_POST['waktu_vaksin'];
  
   $query = "INSERT INTO tbl_sementara (nik, username, password, nama, ttl, umur, alamat, tempat_vaksin, waktu_vaksin) VALUES ('$nik', '$username', '$password', '$nama', '$ttl', '$umur', '$alamat', '$tempat_vaksin', '$waktu_vaksin')";
                  $result = mysqli_query($koneksi, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data Berhasil Dikirim.');window.location='insert.php';</script>";
                  }


 

