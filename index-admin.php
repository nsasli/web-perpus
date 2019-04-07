<<!DOCTYPE html>
<html>
<head>
	<title>SLiBS Admin</title>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
<?php
session_start();
if(!isset($_SESSION['nama'])){
	echo "<script>alert('Silahkan login terlebih dahulu')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
} else {

?>
<?php
include "../header.php";
?>

<div class="container-fluid">
<iframe name="mainframe" id="mainframe" width="100%" height="100%" frameborder="0" style="border: 0" src="jumbotron.php" scrolling="yes" style="background-image: url(images/background.jpg);"></iframe></div></div>



<?php
include "../footer.php";
?>
</body>
</html>
<?php } ?>