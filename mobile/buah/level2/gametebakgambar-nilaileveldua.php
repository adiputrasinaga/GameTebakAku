

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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../../img/game.png">
 <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="../../bootstrap/js/bootstrap.min.js"></script>
 
</head>
<style>
.navbar {
    padding-top: 1px;
    padding-bottom: 1px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 14px;
    letter-spacing: 5px;
	
}
body {
background-size:cover;
background-position:center;
background-repeat:no-repeat;
}
#main{
	margin-right:14%;
}
p{
	color:green;
	font-size:18px;
}

#logo{
	margin-top:-10px;
	margin-bottom:18px;
	margin-left:26px;
}
b{
	float:center;
}
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
                        <li class="menu1"><a href="../../home.php" style="color:orange;background-color:#03C7E9"><b>Beranda</b></a></li>
                        <li class="menu2"><a href="../../about.php" style="color:orange"><b>Tentang</b></a></li>
                        <li class="menu3"><a href="../../privacy.php" style="color:orange"><b>Privasi</b></a></li>
                        <li class="menu4"><a href="../../contact.php" style="color:orange"><b>Kontak</b></a></li>
                    </ul>
                </div><!-- /collapse navbar-collapse -->
				</div>
				</div>

<body style="background-image:url(../../img/bg.jpg)"width="100%" height="90%"><br/>

<div id="header1"><img src="../../img/game.png"  class="img-responsive"  style="width:150px; margin-left:65px;"><br/><img src="../../img/logo.png" class="img-responsive" style="width:132px; margin-left:75px;"></div>
	
</br></br></br>
<h4 align="center">Jumlah Poin Kategori <?php echo $f2; ?> Anda Adalah</h4>
<?php
//filter 

$hasil = $nilaidua1 + $nilaidua2 + $nilaidua3 + $nilaidua4 + $nilaidua5 + $nilaidua6 + $nilaidua7 + $nilaidua8 + $nilaidua9 + $nilaidua10;

?>
<h1 align="center"><?php echo "$hasil"; ?></h1>

<?php



switch ($hasil) {
	case '100':
	echo "<p align='center' class='bg-info'>Nilai Poin Anda <b>SANGAT BAIK</b></p>";
	break;

	case '90':
	echo "<p align='center' class='bg-info'>Nilai Poin Anda <b>Baik</b></p>";
	break;

	case '80':
	echo "<p align='center' class='bg-info'>Nilai Poin Anda <b>Cukup</b></p>";
	break;
	
	default:
echo "<p class='bg-danger'>Anda belum mendapatkan Nilai Poin 80 maka anda harus ulangi level 1</p>";
		break;
}

echo "<center><p>Akumulasi Poin Anda</p></center>";

if ($nilaidua1 == 10) {
	echo "<p align='center' class='text-info'>1. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>1. Salah</p>";
}

if ($nilaidua2 == 10) {
	echo "<p align='center' class='text-info'>2. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>2. Salah</p>";
}


if ($nilaidua3 == 10) {
	echo "<p align='center' class='text-info'>3. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>3. Salah</p>";
}


if ($nilaidua4 == 10) {
	echo "<p align='center' class='text-info'>4. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>4. Salah</p>";
}

if ($nilaidua5 == 10) {
	echo "<p align='center' class='text-info'>5. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>5. Salah</p>";
}

if ($nilaidua6 == 10) {
	echo "<p align='center' class='text-info'>6. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>6. Salah</p>";
}

if ($nilaidua7 == 10) {
	echo "<p align='center' class='text-info'>7. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>7. Salah</p>";
}

if ($nilaidua8 == 10) {
	echo "<p align='center' class='text-info'>8. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>8. Salah</p>";
}

if ($nilaidua9 == 10) {
	echo "<p align='center' class='text-info'>9. Benar</p>";
}else {
	echo "<p align='center' class='text-danger'>9. Salah</p>";
}

if ($nilaidua10 == 10) {
	echo "<p align='center' class='text-info'>10. Benar</p><br/>";
}else {
	echo "<p align='center' class='text-danger'>10. Salah</p><br/>";
}

switch ($hasil) {
	case '100':
	echo "<br/><center><b class='bg-info' align='center' >SELAMAT ANDA TELAH MENYELESAIKAN KATEGORI $f2</b></center><br/><br/><br/> ";
	break;

	case '90':
	echo "<br/><center><b class='bg-info' align='center' >SELAMAT ANDA TELAH MENYELESAIKAN KATEGORI $f2</b></center><br/><br/><br/>";
	break;

	case '80':
	echo "<br ><center><b class='bg-info' >SELAMAT ANDA TELAH MENYELESAIKAN KATEGORI $f2</b></center><br/><br/><br/> ";
	break;
	
	default:
echo "<br/><br/><center><a href='../level1'><img width=120 height=85 src='../../img/level1.png' /></a></center><br/><br/><br/>";
		break;
}

include "backsound.html";
include "../../pengaturan/footer.html";
?>
</body>
</html>