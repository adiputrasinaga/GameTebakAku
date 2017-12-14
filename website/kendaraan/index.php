
<?php
include "jawaban.php";
?>
<!doctype html>
<html lang="id">
  <head>
<meta charset="utf-8"/>
<title>Tebak Siapakah Aku?</title>
  <link rel="shortcut icon" href="../img/game.png">
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
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
#judul{
	margin-right: 5%;
	float:right;
}
#teks{
	margin-right:10%;
	float:right;
}
#ikon{
	margin-right:13%;
	float:right;
	border-right:10px;
	border-color:black;
}
body{
	height:80%;
}
#logo{
	margin-top:-10px;
	margin-bottom:18px;
	margin-left:30px;
}
p	{
	color:black;
	font-size:20px;
}
</style>

<div style="position: relative; width: 100%">
<center><div id="bg" style="background-image:url(../img/city-background-vector.jpg)"width="100%" height="100%">
<nav class="navbar navbar-default">

     <div id="logo"><a class="navbar-brand" href=""><img src="../img/log3.png" style="float:left"></a></div>
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
		<li><a href="../home.php">BERANDA</a></li>
        <li><a href="../about.php">TENTANG</a></li>
        <li><a href="../contact.php">KONTAK</a></li>
        <li><a href="../privacy.php">PRIVASI</a></li>
      </ul>
    </div>
  </div>
</nav>

<body  style="background-image:url(../img/bg.png)"width="100%" height="100%">>
<h1><img src="../img/game.png"></h1>

</br></br><img src="../img/transportasi.png" class="img-responsive" style="float:center" width="15%">

<a href="belajar/index.php"><img src="../img/latihan.png" class="img-responsive" style="float:right" width="25%"></a></br>

<div id="teks"><p>Anda harus menyelesaikan <b>Level 1</b> dulu Sebelum ke <b>Level 2</b></div></br></br></br>

<div id="ikon"><img src="../img/aircraft_thumb.gif" class="img-responsive" style="float:center" width="190%"></div>
</br></br></br></br></br></br></br></br></br></br>

<table align="center" >

<tr>
<td><center><a href="level1"><img src="../img/level1.png" class="img-responsive" style="width:120%"></a></center></td>
</tr>
</br>




</table></br>

</div>
</div>
</body>
<?php
include "level1/backsound.html";
include "../pengaturan/footer.html";
?>
