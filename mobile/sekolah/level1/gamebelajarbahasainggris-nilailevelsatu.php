
<?php
include "../jawaban.php";
session_start();
$nilai1 = $_SESSION['nilai1'];
$nilai2 = $_SESSION['nilai2'];
$nilai3 = $_SESSION['nilai3'];
$nilai4 = $_SESSION['nilai4'];
$nilai5 = $_SESSION['nilai5'];
$nilai6 = $_SESSION['nilai6'];
$nilai7 = $_SESSION['nilai7'];
$nilai8 = $_SESSION['nilai8'];
$nilai9 = $_SESSION['nilai9'];
$nilai10 = $_SESSION['nilai10'];

//jika di nomer 11 langsung tanpa melewati nomer 10 maka akan balik lagi
switch ($nilai10) {
	case '10':
	case '0':
		break;
	
	default:
	header('location: gamebelajarbahasainggris10.php');		
		break;
}
include "../jawaban.php";
?>	
<!doctype html>
 
<html lang="id">
  <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tebak Siapakah Aku?</title>
  <link rel="shortcut icon" href="../../img/game.png">
 <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="../../desain.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="../../bootstrap/js/bootstrap.min.js"></script>

</head>
<style>
#main{
	margin-right:14%;
}
h5{
	color:red;
	font-size:20px;
	float:center;
}
p{
	color:red;
	font-size:19px;
	float:center;
}
#header1{
	float:center;
}

#logo{
	margin-top:-10px;
	margin-bottom:18px;
	margin-left:30px;
	
}
b{
	color:darkorange;
}
.menu1 {background-color:#03C7E9}
.menu2 {background-color:;}
.menu3 {background-color: }
.menu4 {background-color:}
</style>
<div style="position: relative; width: 100%">
<div class="navbar navbar-default">
            <div class="container-fluid">
  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <a> <img src="../../img/log3.png" style="width:58%; margin-top:12px; margin-left:3px;" style="float:left" class="img-responsive"></a>
               
                </div><!-- /navbar-header -->
                    
                <div class="collapse navbar-collapse" id="mynavbar-content">
                    <ul class="nav navbar-nav">
                        <li class="menu1"><a href="../../home.php"><b>Beranda</b></a></li>
                        <li class="menu2"><a href="../../about.php"><b>Tentang</b></a></b></li>
                        <li class="menu3"><a href="../../privacy.php"><b>Privasi</b></a></li>
                        <li class="menu4"><a href="../../contact.php"><b>Kontak</b></a></li>
                    </ul>
                </div><!-- /collapse navbar-collapse -->
				</div>
				</div>


<body style="background-image:url(../../img/bg.jpg)"width="100%" height="90%">
<br/>
<div id="header1"><img src="../../img/game.png"  class="img-responsive"  style="width:150px; margin-left:65px;"><br/><img src="../../img/logo.png" class="img-responsive" style="width:132px; margin-left:80px;"></div>
	
</br></br></br>

<h4 align="center">Jumlah Poin Kategori <?php echo $f2; ?> Anda Adalah</h4>
<?php
//filter 


$hasil = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10;
?>
<h1 align="center"><?php echo "$hasil"; ?></h1>

<?php
switch ($hasil) {
	case '100':
	echo "<h5 align='center' class='bg-info'>Nilai Poin Anda SANGAT BAIK</h5>";
	break;

	case '90':
	echo "<h5 align='center' class='bg-info'>Nilai Poin Anda Baik</h5>";
	break;

	case '80':
	echo "<h5 align='center' class='bg-info'>Nilai Poin Anda Cukup</h5>";
	break;
	
	default:
echo "<h6 style='font-size:15px; color:red; text-align:center' class='bg-danger'>Anda belum mendapatkan Nilai Poin 80 maka anda harus ulangi level 1</h6>";
		break;
}

echo "<center><h5>Akumulasi Poin Anda</h5></center>";

if ($nilai1 == 10) {
	echo "<p align='center'  class='text-info'>1. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>1. Salah</p>";
}

if ($nilai2 == 10) {
	echo "<p align='center' class='text-info'>2. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>2. Salah</p>";
}


if ($nilai3 == 10) {
	echo "<p align='center' class='text-info'>3. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>3. Salah</p>";
}


if ($nilai4 == 10) {
	echo "<p align='center' class='text-info'>4. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>4. Salah</p>";
}

if ($nilai5 == 10) {
	echo "<p align='center' class='text-info'>5. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>5. Salah</p>";
}

if ($nilai6 == 10) {
	echo "<p align='center' class='text-info'>6. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>6. Salah</p>";
}

if ($nilai7 == 10) {
	echo "<p align='center' class='text-info'>7. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>7. Salah</p>";
}

if ($nilai8 == 10) {
	echo "<p align='center' class='text-info'>8. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>8. Salah</p>";
}

if ($nilai9 == 10) {
	echo "<p align='center' class='text-info'>9. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>9. Salah</p>";
}

if ($nilai10 == 10) {
	echo "<p align='center' class='text-info'>10. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>10. Salah</p>";
}

switch ($hasil) {
	case '100':
	echo "<br/><br/><center><a href='../../$f/level2/'><img width=120 height=85 src='../../img/level2.png' /></a></center>";
	$_SESSION['level1'] = "lulus";
	echo $_SESSION['level1'];
	break;

	case '90':
	echo "<br/><br/><center><a href='../../$f/level2/'><img width=120 height=85 src='../../img/level2.png' /></a></center>";
	$_SESSION['level1'] = "lulus";
	break;

	case '80':
	echo "<br/><br/><center><a href='../../$f/level2/'><img width=120 height=85 src='../../img/level2.png' /></a></center>";
	$_SESSION['level1'] = "lulus";
	break;
	
	default:
echo "<br/><br/><center><a href='index.php'><img width=120 height=85 src='../../img/level1.png' /></a></center>";
		break;
}


?>
<?php
include "backsound.html";
include "../../pengaturan/footer.html";
?>
</html>