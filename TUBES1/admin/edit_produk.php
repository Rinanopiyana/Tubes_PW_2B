<script type="text/javascript" src="tinymce/tiny_mce.js"></script>
    <script type="text/javascript">
        tinyMCE.init({
            mode:"textareas",
            theme:"advanced",
        });
    </script>
<body bgcolor="#CCCCCC">
<h2>
<p align="center">EDIT DATA
<?php
include "koneksi.php";
if(isset($_GET['ni'])){
	$ni=$_GET['ni'];
	$query=mysqli_query($koneksi,'select *from produk where kode_produk="'.$ni.'"');
	$data=mysqli_fetch_array($query);
	$nama_produk=$data['nama_produk'];
	$gambar=$data['gambar'];
	$deskripsi=$data['deskripsi'];
}else{
	$nama_produk='';
	$gambar='';
	$deskripsi='';
}
?>
</p></h2>
<form method="post" name="frm" action="aksi_edit_produk.php" enctype='multipart/form-data'>
<table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
<tr>
<td width="189" height="20"></td>
<td width="26"></td>
<td width="331"></td></tr>
<tr>
<td height="27" align="right" valign="middle">Kode Produk</td>
<td align="center" valign="top">:</td>
<td valign="middle">
<input type="text" name="kode_produk" value="<?php echo $_GET['ni'];?>" readonly="readonly" >
</td>
</tr>
<tr>
<td height="27" align="right" valign="middle">Nama Produk</td>
<td align="center" valign="top">:</td>
<td valign="middle"><label>
<input type="text" name="nama_produk" value="<?php echo $nama_produk;?>"></label></td></tr>
<tr>
<td height="27" align="right" valign="middle">Gambar</td>
<td align="center" valign="top">:</td>
<td valign="middle"><label>
<img src='galeri/<?php echo $gambar;?>' width='50'>
<input name='gam_baru' type='file' size='30' /> </label></td></tr>
<tr>
<td height="27" align="right" valign="middle">Deskripsi</td>
<td align="center" valign="top">:</td>
<td valign="middle"><label>
<textarea name="deskripsi" value="<?php echo $deskripsi;?>"><?php echo $deskripsi;?></textarea> </label></td></tr>
<tr>
<td height="42"></td>
<td></td>
<td>
<input type="submit" name="tedit" value="Edit">
</form>
<form method="post" action="products.php">
<input type="submit" name="tbatal" value="Batal"></td></tr>
</table>
</form>
