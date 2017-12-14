
<!doctype html>
<html lang="id">
  <head>
  <title>Tebak Siapakah Aku?</title>
  <link rel="shortcut icon" href="../img/game.png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="../bootstrap/js/bootstrap.min.js"></script>
  <embed src="../music/level_1.wav" autostart="true" loop="true" autohidden="true" width=0 height=0>
</embed>
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
p	{
	color:black;
	font-size:12px;
}
#judul{
	margin-right: 5%;
	float:right;
}
#teks{
	
}
#ikon{
	margin-right:17%;
	float:right;
	border-right:10px;
	border-color:black;
}
body{
	height:80%;
}
#logo1{
	margin-top:-5px;
	margin-bottom:13px;
	
	
}
</style>

<div style="position: relative; width: 100%">
<div id="bg" style="background-image:url(../img/city-background-vector.jpg)"width="100%" height="100%" class="img-responsive">
<div class="navbar navbar-default">
            <div class="container-fluid">
  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <a> <img src="../img/log3.png" style="width:58%; margin-top:12px; margin-left:3px;" style="float:left" class="img-responsive"></a>
               
                </div><!-- /navbar-header -->
                    
                <div class="collapse navbar-collapse" id="mynavbar-content">
                    <ul class="nav navbar-nav">
                        <li class="menu1"><a href="../home.php" style="color:orange;background-color:#03C7E9"><b>Beranda</b></a></li>
                        <li class="menu2"><a href="../about.php" style="color:orange"><b>Tentang</b></a></li>
                        <li class="menu3"><a href="../privacy.php" style="color:orange"><b>Privasi</b></a></li>
                        <li class="menu4"><a href="../contact.php" style="color:orange"><b>Kontak</b></a></li>
                    </ul>
                </div><!-- /collapse navbar-collapse -->
				</div>
				</div>

<body  style="background-image:url(../img/bg.png)"width="100%" height="100%">
</br><center><img src="../img/kat_buah.png" class="img-responsive" style="float:center" width="60%">

<br/>
<div id="teks" style="align-text:center"><p>Anda harus menyelesaikan <b>Level 1</b> dulu Sebelum ke <b>Level 2</b></div></center>
<a href="belajar/index.php"><img src="../img/latihan.png" class="img-responsive" style="float:right" width="40%"></a></br></br></br></br>
</br>
<div id="ikon"><img src="../img/animaatjes-appels-68018.gif" class="img-responsive" style="margin-left:15%" width="84%"></div>
</br></br></br></br></br></br></br></br></br>

<table align="center" >
<br/><br/>
<tr>
<td><center><a href="level1"><img src="../img/level1.png" class="img-responsive" style="width:100%"></a></center></td>
</tr>





</table></br><br/>

</div>
</div>
</body>
<?php
include "level1/backsound.html";
include "../pengaturan/footer.html";
?>
