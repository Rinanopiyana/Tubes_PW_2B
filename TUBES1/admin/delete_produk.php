<?php
include "koneksi.php";
$ni	= $_GET['ni'];
$sql 	= 'delete from produk where kode_produk="'.$ni.'"';
$query	= mysqli_query($koneksi,$sql);
header('location: products.php');
?>