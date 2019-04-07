<!DOCTYPE html>
<html>
<head>
	<title>SLiBS Admin</title>
	<link rel="icon" type="image/ico" href="../icon.ico">
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	
            <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	</head>
	<?php
session_start();
if(!isset($_SESSION['nama'])){
	echo "<script>alert('Silahkan login terlebih dahulu')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
} else {

?>

	<body>
		
<?php
include "../header.php";
?>
		<div class="jumbotron" style="background-image: url(../latar1.jpg); background-size: cover; background-position: center; min-height: 640px;">
		<div class="container-fluid">

		<br>
<center><div class="date" style="background-color: white; border-radius: 10px; width: 220px; background-repeat: no-repeat;"><?php
		 	$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 			$hr = $array_hr[date('N')];
			$tgl= date('j');
			$array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
			$bln = $array_bln[date('n')];
			$thn = date('Y');
			echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
		?></div>
<div>&nbsp</div></center>
		<?php
		error_reporting(0);
		switch ($_GET['page'])
		 {
			//siswa
			case 'siswa':
				include "siswa.php";
			break;
			case 'siswa_input':
				include "siswa_input.php";
				break;
				case 'siswa_edit':
				include "siswa_edit.php";
					break;
					case 'siswa_update':
					include "siswa_update.php";
						break;
						case 'siswa_hapus':
						include "siswa_hapus.php";
						break;

			//buku
			case 'buku':
				include "buku.php";
				break;

				case 'buku_input':
					include "buku_input.php";
					break;

				case 'buku_edit':
				include "buku_edit.php";
					break;

					case 'buku_update':
						include "buku_update.php";
						break;

						case 'buku_pinjam':
						include "buku_pinjam.php";
							break;

							case 'buku_pinjam_proses':
								include 'buku_pinjam_proses.php';
								break;

				

//guru
							case 'guru':
								include "guru.php";
								break;

								case 'guru_input':
									include "guru_input.php";
									break;
			case 'guru_edit':
				include 'guru_edit.php';
				break;

				case 'guru_update':
					include "guru_update.php";
					break;


					case 'proses':
						include 'proses.php';
						break;

			
			//peminjaman


case 'peminjaman_guru':
	include 'peminjaman_guru.php';
	break;

	case 'data-pinjam-siswa':
		include 'trans_siswa/data-pinjam-siswa.php';
		break;

//pengembalian
case 'proses_kembali_guru':
	include 'trans_guru/proses_kembali_guru.php';
	break;

	case 'proses_kembali_siswa':
	include 'trans_siswa/proses_kembali_siswa.php';
	break;


		case 'data-pinjam-guru':
			include 'trans_guru/data-pinjam-guru.php';
			break;
case 'pengembalian-guru':
	include 'trans_guru/pengembalian-guru.php';
	break;

case 'pengembalian-siswa':
	include 'trans_siswa/pengembalian-siswa.php';
	break;
case 'data-kembali-siswa':
	include 'trans_siswa/data-kembali-siswa.php';
	break;


case 'data-kembali-guru':
	include 'trans_guru/data-kembali-guru.php';
	break;

case 'perpanjangan-siswa':
		include 'trans_siswa/perpanjangan-siswa.php';
		break;

	case 'perpanjangan-guru':
		include 'trans_guru/perpanjangan-guru.php';
		break;

case 'proses_perpanjang_guru':
	include 'trans_guru/proses_perpanjang_guru.php';
	break;

	case 'proses_perpanjang_siswa':
	include 'trans_siswa/proses_perpanjang_siswa.php';
	break;

			default:
				include "jumbotron.php";
			break;







case 'judul_search':
	include 'trans_siswa/judul_search.php';
	break;



		}
		?>

		<br>
		<br>
		<?php
	include "../footer.php";
	?>
	<br>
</div></div>
	</body>



<?php } ?>

