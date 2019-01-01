<?php
$server="localhost";
$username="root";
$password="";
$database="tubes";

$koneksi=mysqli_connect($server,$username,$password)or die("koneksi gagal");
mysqli_select_db($koneksi,$database)or die("database tidak bisa di buka");
?>