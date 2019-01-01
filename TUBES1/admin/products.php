<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tubes - 2B</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>
    <p align="right"><a button style="
    background-color: #e6a756;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;" href="logout.php">Logout</a></td></p>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">WELCOME</span>
      <span class="site-heading-lower">Coffeenatics</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="home.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products.php">Products</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store.html">Store</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section">
      <?php
      include 'koneksi.php';
$sql ='select *from produk';
$query=mysqli_query($koneksi,$sql);
?>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center" style="color: white">
<tr style="background-color: #8B4513"><td width="112" height="29" align="center" valign="middle">Kode Produk</td>
<td width="112" height="29" align="center" valign="middle">Nama Produk</td>
<td width="112" height="29" align="center" valign="middle">Gambar</td>
<td width="112" height="29" align="center" valign="middle">Deskripsi</td>
<td width="112" height="29" align="center" valign="middle"><a href="tambah_produk.php" style="color: white">Tambah</a></td></tr>
<?php
while($data=mysqli_fetch_array($query)){
  ?>
  <tr style="background-color: #A0522D">
  <td p align="center"><?php echo $data['kode_produk'];?></td>
  <td p align="center"><?php echo $data['nama_produk'];?></td>
  <td align="center"><img src='galeri/<?php echo $data['gambar'];?>' width='50'></td>
  <td p align="center"><?php echo $data['deskripsi'];?></td>
<td p align="center"><a href="edit_produk.php?ni=<?php echo $data['kode_produk'];?>" style="color: yellow"title="Edit data produk ini">||edit||</a><a style="color: yellow" href="delete_produk.php?ni=<?php echo $data['kode_produk'];?>" onclick="return confirm('yakin mau di hapus ?');"> ||hapus||</a></td></tr>
  <?php
}
?>
</table><br/></br>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Coffeenatics 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
