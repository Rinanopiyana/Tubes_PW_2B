<?php
session_start();
include "koneksi.php";
if (empty($_SESSION['namauser']) )
{
	exit("<script>window.alert('Anda Harus Login Terlebih Dahulu');
		window.location='index.php';</script>");
}
session_destroy();
exit("<script>window.alert('EXIT');
	window.location='index.php';</script>");
	?>
