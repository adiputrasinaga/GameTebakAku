
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
	color:#ffffff;
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


<body style="background-image:url(../../img/background.png)"width="100%" height="90%">
<form align="center" method="POST">

<div id="header1"><img src="../../img/game.png" style="float:left"><img src="../../img/logo.png" style="float:right"></div>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<?php
session_start();
$nilai1 = $_SESSION['nilai1'];
$nilai2 = $_SESSION['nilai2'];
$nilai3 = $_SESSION['nilai3'];

switch ($nilai3) {
	case '10':
	case '0':
		break;
	
	default:
	header('location: gamebelajarbahasainggris3.php');		
		break;
}

include "../jawaban.php";

include "../pilihan.php";

pilihan4();

include "../../pengaturan/tengah.php";

if (isset($_POST['proses'])) {

$jawaban = $_POST['pilihan'];
if ($jawaban == "$p4") {
	$nilai = 10;
	$_SESSION['nilai4'] = $nilai;
	header('location: gamebelajarbahasainggris5.php');
} elseif ($jawaban == false) {
	 echo "<p class='bg-danger'>Anda Belum Memasukan Jawaban</p>";
} else {
	$nilai = 0;
	$_SESSION['nilai4'] = $nilai;
	header('location: gamebelajarbahasainggris5.php');

}
}
include "backsound.html";
include "../../pengaturan/footer.html";
?>