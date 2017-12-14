<?php
include "../jawaban.php";
session_start();
$nilaidua1 = $_SESSION['nilaidua1'];
$nilaidua2 = $_SESSION['nilaidua2'];
$nilaidua3 = $_SESSION['nilaidua3'];
$nilaidua4 = $_SESSION['nilaidua4'];
$nilaidua5 = $_SESSION['nilaidua5'];
$nilaidua6 = $_SESSION['nilaidua6'];
$nilaidua7 = $_SESSION['nilaidua7'];
$nilaidua8 = $_SESSION['nilaidua8'];
$nilaidua9 = $_SESSION['nilaidua9'];
$nilaidua10 = $_SESSION['nilaidua10'];

//jika di nomer 11 langsung tanpa melewati nomer 10 maka akan balik lagi
switch ($nilaidua10) {
	case '10':
	case '0':
		break;
	
	default:
	header('location: gametebakgambar10.php');		
		break;
}
?>	
<!doctype html>
 
<html lang="id">
  <head>
<meta charset="utf-8">
<title>Tebak Siapakah Aku?</title>
  <link rel="shortcut icon" href="../../img/game.png">
 <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
 
</head>
<style>
.navbar {
    padding-top: 1px;
    padding-bottom: 1px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
	
}
#main{
	margin-right:14%;
}
p{
	color:green;
	font-size:20px;
}
#header1{
	margin-left:43%;
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

$hasil = $nilaidua1 + $nilaidua2 + $nilaidua3 + $nilaidua4 + $nilaidua5 + $nilaidua6 + $nilaidua7 + $nilaidua8 + $nilaidua9 + $nilaidua10;

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

if ($nilaidua1 == 10) {
	echo "<p class='text-info'>1. Benar</p>";
}else {
	echo "<p class='text-danger'>1. Salah</p>";
}

if ($nilaidua2 == 10) {
	echo "<p class='text-info'>2. Benar</p>";
}else {
	echo "<p class='text-danger'>2. Salah</p>";
}


if ($nilaidua3 == 10) {
	echo "<p class='text-info'>3. Benar</p>";
}else {
	echo "<p class='text-danger'>3. Salah</p>";
}


if ($nilaidua4 == 10) {
	echo "<p class='text-info'>4. Benar</p>";
}else {
	echo "<p class='text-danger'>4. Salah</p>";
}

if ($nilaidua5 == 10) {
	echo "<p class='text-info'>5. Benar</p>";
}else {
	echo "<p class='text-danger'>5. Salah</p>";
}

if ($nilaidua6 == 10) {
	echo "<p class='text-info'>6. Benar</p>";
}else {
	echo "<p class='text-danger'>6. Salah</p>";
}

if ($nilaidua7 == 10) {
	echo "<p class='text-info'>7. Benar</p>";
}else {
	echo "<p class='text-danger'>7. Salah</p>";
}

if ($nilaidua8 == 10) {
	echo "<p class='text-info'>8. Benar</p>";
}else {
	echo "<p class='text-danger'>8. Salah</p>";
}

if ($nilaidua9 == 10) {
	echo "<p class='text-info'>9. Benar</p>";
}else {
	echo "<p class='text-danger'>9. Salah</p>";
}

if ($nilaidua10 == 10) {
	echo "<p class='text-info'>10. Benar</p>";
}else {
	echo "<p class='text-danger'>10. Salah</p>";
}

switch ($hasil) {
	case '100':
	echo "<b class='bg-info'>SELAMAT ANDA TELAH MENYELESAIKAN KATEGORI $f2</b> ";
	break;

	case '90':
	echo "<b class='bg-info'>SELAMAT ANDA TELAH MENYELESAIKAN KATEGORI $f2</b> ";
	break;

	case '80':
	echo "<b class='bg-info'>SELAMAT ANDA TELAH MENYELESAIKAN KATEGORI $f2</b> ";
	break;
	
	default:
echo "<center><a href='../level1'><img width=120 height=85 src='../../img/level1.png' /></a></center>";
		break;
}
include "backsound.html";

?>
</body>
</html>