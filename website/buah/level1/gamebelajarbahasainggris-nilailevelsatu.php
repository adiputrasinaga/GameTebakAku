
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
 <link rel="stylesheet" href="../../desain.css">
</head>
<style>
#main{
	margin-right:14%;
}
p{
	color:red;
	font-size:20px;
}
#header1{
	margin-left:43%;
}
b{
	font-size:20px;
}
#logo{
	margin-top:-10px;
	margin-bottom:18px;
	margin-left:30px;
}
</style>
<div style="position: relative; width: 100%">
<center>
<nav class="navbar navbar-default">

     <div id="logo"><a class="navbar-brand" href=""><img src="../../img/log3.png" style="float:left"></a></div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<li><a href="../../home.php">BERANDA</a></li>
        <li><a href="../../about.php">TENTANG</a></li>
        <li><a href="../../contact.php">KONTAK</a></li>
        <li><a href="../../privacy.php">PRIVASI</a></li>
      </ul>
    </div>
  </div>
</nav>


<body style="background-image:url(../../img/bg.jpg)"width="100%" height="90%">


<div id="header1"><img src="../../img/game.png" style="float:left"><img src="../../img/logo.png" style="float:right"></div>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br>

<h3 align="center">Jumlah Poin Kategori <?php echo $f2; ?> Anda Adalah</h3>
<?php
//filter 


$hasil = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10;
?>
<h1 align="center"><?php echo "$hasil"; ?></h1>

<?php
switch ($hasil) {
	case '100':
	echo "<p class='bg-info'>Nilai Poin Anda <b>SANGAT BAIK</b></p>";
	break;

	case '90':
	echo "<p class='bg-info'>Nilai Poin Anda <b>Baik</b></p>";
	break;

	case '80':
	echo "<p class='bg-info'>Nilai Poin Anda <b>Cukup</b></p>";
	break;
	
	default:
echo "<p class='bg-danger'>Anda belum mendapatkan Nilai Poin 80 maka anda harus ulangi level 1</p>";
		break;
}

echo "<center><p>Akumulasi Poin Anda</p></center>";

if ($nilai1 == 10) {
	echo "<p class='text-info'>1. Benar</p>";
}else {
	echo "<p class='text-danger'>1. Salah</p>";
}

if ($nilai2 == 10) {
	echo "<p class='text-info'>2. Benar</p>";
}else {
	echo "<p class='text-danger'>2. Salah</p>";
}


if ($nilai3 == 10) {
	echo "<p class='text-info'>3. Benar</p>";
}else {
	echo "<p class='text-danger'>3. Salah</p>";
}


if ($nilai4 == 10) {
	echo "<p class='text-info'>4. Benar</p>";
}else {
	echo "<p class='text-danger'>4. Salah</p>";
}

if ($nilai5 == 10) {
	echo "<p class='text-info'>5. Benar</p>";
}else {
	echo "<p class='text-danger'>5. Salah</p>";
}

if ($nilai6 == 10) {
	echo "<p class='text-info'>6. Benar</p>";
}else {
	echo "<p class='text-danger'>6. Salah</p>";
}

if ($nilai7 == 10) {
	echo "<p class='text-info'>7. Benar</p>";
}else {
	echo "<p class='text-danger'>7. Salah</p>";
}

if ($nilai8 == 10) {
	echo "<p class='text-info'>8. Benar</p>";
}else {
	echo "<p class='text-danger'>8. Salah</p>";
}

if ($nilai9 == 10) {
	echo "<p class='text-info'>9. Benar</p>";
}else {
	echo "<p class='text-danger'>9. Salah</p>";
}

if ($nilai10 == 10) {
	echo "<p class='text-info'>10. Benar</p>";
}else {
	echo "<p class='text-danger'>10. Salah</p>";
}

switch ($hasil) {
	case '100':
	echo "<center><a href='../../$f/level2/'><img width=120 height=85 src='../../img/level2.png' /></a></center>";
	$_SESSION['level1'] = "lulus";
	echo $_SESSION['level1'];
	break;

	case '90':
	echo "<center><a href='../../$f/level2/'><img width=120 height=85 src='../../img/level2.png' /></a></center>";
	$_SESSION['level1'] = "lulus";
	break;

	case '80':
	echo "<center><a href='../../$f/level2/'><img width=120 height=85 src='../../img/level2.png' /></a></center>";
	$_SESSION['level1'] = "lulus";
	break;
	
	default:
echo "<center><a href='index.php'><img width=120 height=85 src='../../img/level1.png' /></a></center>";
		break;
}


?>
</body>
<br/><br/>
<?php
include "backsound.html";
include "../../pengaturan/footer.html";
?>
</html>