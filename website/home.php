
<!DOCTYPE html>
<html lang="id">
<head>
  <title>Tebak Siapakah Aku?</title>
  <link rel="shortcut icon" href="img/game.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="ajax/jquery.min.js"></script>
  <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="desain.css">
  
  <!-- Deteksi Mobile/Desktop
		================================================== -->
		<script type="text/javascript">
			<!--
			if (screen.width <= 699) {
			document.location = "../mobile/index.html";
			}
			//-->
		</script>
		<script language=javascript>
			<!--
			if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
			   location.replace("../mobile/index.html");
			}
			-->
		</script>
  
</head>
<style>
p{
	font-size:20px;
}
#body {
	background-image:url(img/bg1.jpg);
}
.h3{
	float:right;
}
#header1{
	margin-left:40%;
}
#row{
	float:center;
	margin-right:30%;
}
#logo{
	float:left;
	margin-left:0%;
}
#logo1{
	margin-top:-10px;
	margin-bottom:18px;
	margin-left:30px;
}

h3{
	color:white;
	font-size:145%;
}
</style>

<div style="position: relative; width: 100%">
<nav class="navbar navbar-default">

     <div id="logo1"><a class="navbar-brand" href=""><img src="img/log3.png" style="float:left" class="img-responsive"></a></div>
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
	
		<li><a href="home.php">BERANDA</a></li>
        <li><a href="about.php">TENTANG</a></li>
        <li><a href="contact.php">KONTAK</a></li>
        <li><a href="privacy.php">PRIVASI</a></li>
	
	  </ul>
    </div>
  </div>
</nav>
</br>
</br></br></br>
<body style="background-image:url(img/bg1.jpg)"width="100%" height="90%">
<audio src="https://vfm3qq.bn1302.livefilestore.com/y3mKLUaM7PWfZjE_EtIDo1PhjVt5FWtZ5hpLvfK-AKRYHx--2I1H23USVKyjSdPp5NLeBaOSun2XIOAu_TsWWIhhd0UILuiT4_AippJnGj6yS1Hb_DiOQfulJQONZrfikSbH3LNx4p08NwxKfJREi8q_w/index.wav" autoplay="autoplay" hidden="hidden"></audio>
<div class="container-fluid bg-3 text-center"> 
<div id="header1"><img src="img/game.png" style="float:left"><img src="img/logo.png" style="float:right"></div>
	</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
	<div><h3 style="float:right">Tunggu apa lagi! Ayo segera bermain dengan game </p> ini yang edukatif dan seru ini, yang dapat menambah </p>wawasan Anda!!</h3>
</div>
  </br></br></br></br></br></br></br>
  
   <div class="row"><img src="img/kategori.png" style="float:center">
 <img src="img/icon1.gif" style="float:left" width="350px" height="350px" ></br></br></br></br>
    <div class="col-sm-2">

      <a href="buah"><p><b></b></p></a>
      <a href="buah"><img src="img/buah.png" alt="Game Tebak Gambar Buah" alt="Game Tebak Gambar Buah" class="img-responsive" style="width:100%">
    </div>

    <div class="col-sm-2">
      <a href="kendaraan"><p><b></b></p></a>
      <a href="kendaraan"><img src="img/kendaraan.png" alt="Game Tebak Gambar kendaraan" class="img-responsive" style="width:100%">
    </div>

    <div class="col-sm-2"> 
      <a href="hewan"><p><b></b></p></a>
      <a href="hewan"><img src="img/binatang.png" alt="Game Tebak Gambar kendaraan" class="img-responsive"  style="width:100%">
    </div>

    <div class="col-sm-2"> 
      <a href="sekolah"><p><b></b></p></a>
      <a href="sekolah"><img src="img/sekolah.png" alt="Image" class="img-responsive" alt="Game Tebak Gambar sekolah" style="width:100%"></a>
    </div>


  </div>

</div>

</body>

</div>

</body>
<br/><br/><br/>
<?php
include "pengaturan/footer.html";
?>
</html>


