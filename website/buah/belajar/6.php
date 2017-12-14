
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

<?php
include "../jawaban.php";
include "pilihanbelajar.php";
?>

<body style="background-image:url(../../img/background.png)"width="100%" height="90%">
<form align="center" method="POST">

<div id="header1"><img src="../../img/game.png" style="float:left"><img src="../../img/logo.png" style="float:right"></div>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br><br/><br/>
<center><b><p>Dibagian ini anda akan mempelajari 10 nama benda dengan bahasa Inggris.</p>
 <p>Namun jika anda ingin langsung memulai game bisa klik </b><i> Main</i></p></center>


<?php
pilihan6();
?>
<br>
	<center><a title="Lanjut"  href="7.php"><img src="../../img/StepForwardPressedBlue.png" width="7%"></a></center>
	
<div id="main"><a href="../level1/"><img src="../../img/main.png" style="float:right"></a></div>
</body>

	</br></br></br></br>
<?php 
include "../../pengaturan/footer.html";
include "backsound.html";
 ?>
