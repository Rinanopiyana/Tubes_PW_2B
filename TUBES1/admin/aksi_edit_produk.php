<?php
include "koneksi.php";
$set = true;
$msg = "";
//tentukan variabel file yg diupload dan tipe file
$tipe_file = $_FILES['gam_baru']['type'];
$lokasi_file = $_FILES['gam_baru']['tmp_name'];
$nama_file = $_FILES['gam_baru']['name'];
$save_file =move_uploaded_file($lokasi_file,"galeri/$nama_file");
if(empty($lokasi_file))
{
isset($set);
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
$unlink=mysqli_query($koneksi,"select * from produk where kode_produk='$_POST[kode_produk]'");
$CekLink=mysqli_fetch_array($unlink);
if(!empty($CekLink['gambar']))
{
unlink("galeri/$CekLink[gambar]");
}
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
}
if($set)
{
	$kode_produk=$_POST['kode_produk'];
	$nama_produk=$_POST['nama_produk'];
	$deskripsi=$_POST['deskripsi'];

	if(empty($lokasi_file))
{
mysqli_query($koneksi,"update produk set nama_produk='$nama_produk', deskripsi='$deskripsi'
where kode_produk='$kode_produk'");
}else{
mysqli_query($koneksi,"update produk set nama_produk='$nama_produk', deskripsi='$deskripsi',
gambar='$nama_file'
where kode_produk='$kode_produk'");
}
$msg= $msg.'Update Galeri Sukses..';
print "<meta http-equiv=\"refresh\" content=\"1;URL=products.php\">";
}
echo "$msg";
?>


