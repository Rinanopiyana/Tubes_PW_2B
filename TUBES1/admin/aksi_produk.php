<?php
include "koneksi.php";
$set = true;
$msg = "";
//tentukan variabel file yg diupload dan tipe file
$tipe_file = $_FILES['gam']['type'];
$lokasi_file = $_FILES['gam']['tmp_name'];
$nama_file = $_FILES['gam']['name'];
$save_file =move_uploaded_file($lokasi_file,"galeri/$nama_file");
if(empty($lokasi_file))
{
$set=false;
$msg= $msg. 'Upload gagal, Anda Lupa Mengambil Gambar..';
}
else
{
//tentukan tipe file harus image
if ($tipe_file != "image/gif" and
$tipe_file != "image/jpeg" and
$tipe_file != "image/jpg" and
$tipe_file != "image/pjpeg" and
$tipe_file != "image/png")
{
$set=false;
$msg= $msg. 'Upload gagal, tipe file harus image..';
}
else
{
isset($save_file);
}
//replace di server
if($save_file)
{
chmod("galeri/$nama_file", 0777);
}
else
{
$msg = $msg.'Upload Image gagal..';
$set = false;
}

if($set){
	$nama_produk = $_POST['nama_produk'];
	$deskripsi = $_POST['deskripsi'];
	
	$sql='insert into produk(nama_produk,gambar,deskripsi) values("'.$nama_produk.'","'.$nama_file.'","'.$deskripsi.'")';
	$query= mysqli_query($koneksi,$sql);
	$msg= $msg.'Upload Galeri Sukses..';
print "<meta http-equiv=\"refresh\" content=\"1;URL=products.php\">";
}
echo "$msg";
}
?>

