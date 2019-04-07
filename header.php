<!-- Header -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>

<nav style="background-color: rgba(255,255,255,0.95);" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">eLibrary UBSI DWS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="nav"><a href="index.php"><i class="icon-home"></i>Home</a></li>
        <li class="nav"><a href="?page=buku"><i class="icon-book"></i>Katalog Buku</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href=""><i class="icon-user"></i> Anggota <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="?page=siswa">Siswa</a></li>
            <li><a href="?page=guru">Guru</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-shopping-cart"></i> Transaksi <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="?page=data-pinjam-siswa">Peminjaman Siswa</a></li>
            <li><a href="?page=data-pinjam-guru">Peminjaman Guru</a></li>
            <a class="divider">
            <li><a href="?page=data-kembali-guru">Pengembalian Buku Guru</a></li>
            <li><a href="?page=data-kembali-siswa">Pengembalian Buku Siswa</a></li>
            </ul>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-print"></i> Laporan <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="laporan/lap-buku.php" target="new window">Laporan Inventaris Buku</a></li>
            <li><a href="laporan/lap-siswa.php" target="new window">Laporan Data Siswa</a></li>
            <li><a href="laporan/lap-guru.php" target="new window">Laporan Data Guru</a></li>
            <a class="divider">
            <li><a href="laporan/lap-pinjam-guru.php" target="new window">Laporan Peminjaman Guru</a></li>
            <li><a href="laporan/lap-pinjam-siswa.php" target="new window">Laporan Peminjaman Siswa</a></li>
            
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- menu Header -->

<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>