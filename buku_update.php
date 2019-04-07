<?php
include "conn.php";
if(isset($_POST['update'])){
				$id	       = $_POST['id'];
				$judul		   = $_POST['judul'];
				$pengarang  = $_POST['pengarang'];
				$penerbit = $_POST['penerbit'];
				$isbn        = $_POST['isbn'];
                $jumlah_buku        = $_POST['jumlah_buku'];
                $lokasi        = $_POST['lokasi'];
				
				$update = mysqli_query($koneksi, "UPDATE tbl_buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', isbn='$isbn', jumlah_buku='$jumlah_buku', lokasi='$lokasi' WHERE id='$id'") or die(mysqli_error());
				if($update){
					echo "<script>alert('Data Berhasil di Update!'); window.location = '?page=buku'</script>";
				}else{
					echo "<script>alert('Data Gagal di Update!'); window.location = 'buku.php'</script>";
				}
			}
            ?>