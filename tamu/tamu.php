<!DOCTYPE html>
<html>
<head>
	<title>SLiBS</title>
	<link rel="icon" type="image/ico" href="../icon.ico">
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	
            <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	</head>


	<body>

<?php
include '../header_tamu.php';
?>


		<div class="jumbotron" style="background-image: url(../latar.jpg); background-size: cover; background-attachment: fixed; background-position: center; min-height: 750px;">
		<div class="container-fluid">
<br>
<center><div class="date" style="background-color: white; border-radius: 10px; width: 15%; background-repeat: no-repeat;"><?php
		 	$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 			$hr = $array_hr[date('N')];
			$tgl= date('j');
			$array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
			$bln = $array_bln[date('n')];
			$thn = date('Y');
			echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
		?></div>


<b style="color: white;">Sisa Waktu Anda</b>
<div style="background-color: white; border-radius: 10px; width: 30px; background-repeat: no-repeat;" id="waktu"></div>
<script type="text/javascript" src="js/count.js"></script>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<div>&nbsp</div></center>




		<?php
		error_reporting(0);
		switch ($_GET['tamu'])
		 {
			//siswa
			case 'siswa':
				include "siswa.php";
			break;

			//buku
			case 'buku':
				include "buku.php";
				break;



//guru
							case 'guru':
								include "guru.php";
								break;

			default:
				include "home_tamu.php";
			break;

		}
		?>

<br>
<br>

		<?php
	include "../footer.php";
	?>
</div></div>
	</body>


