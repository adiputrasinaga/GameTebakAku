
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
	 float:center;
 width:63%;
 margin-left:17%;
}
p{
	color:#ffffff;
	font-size:16px;
}

#logo{
	margin-top:-10px;
	margin-bottom:18px;
	margin-left:30px;
}
body {
background-size:cover;
background-position:center;
background-repeat:no-repeat;
}
.menu1 {background-color:#03C7E9}
.menu2 {background-color:}
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
                        <li class="menu1"><a href="../../home.php" style="color:orange;background-color:#03C7E9"><b>Beranda</b></a></li>
                        <li class="menu2"><a href="../../about.php" style="color:orange"><b>Tentang</b></a></li>
                        <li class="menu3"><a href="../../privacy.php" style="color:orange"><b>Privasi</b></a></li>
                        <li class="menu4"><a href="../../contact.php" style="color:orange"><b>Kontak</b></a></li>
                    </ul>
                </div><!-- /collapse navbar-collapse -->
				</div>
				</div>

<?php
include "../jawaban.php";
include "pilihanbelajar.php";
?>

<body style="background-image:url(../../img/background.png)"width="100%" height="90%">
<form align="center" method="POST"><br/>
<div id="header1"><img src="../../img/game.png" class="img-responsive" style="width:150px;margin-left:70px"><br/></div>
</br>
<center><b><p>Dibagian ini anda akan mempelajari 10 nama benda dengan bahasa Inggris.</p>
 <p>Namun jika anda ingin langsung memulai game bisa klik </b><i> Main</i></p></center>


<?php
pilihan6();
?>
<br/>
	<center><a title="Lanjut"  href="7.php"><img src="../../img/StepForwardPressedBlue.png" width="22%"></a></center>
	<br/><br/>
<div id="main"><a href="../level1/"><img src="../../img/main.png" style="float:right" class="img-responsive"></a></div>

	</body>

	</br></br></br></br>
<?php 
include "backsound.html";
include "../../pengaturan/footer.html";
 ?>
