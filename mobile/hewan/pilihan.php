<style>
h3 {
	color:white;
	font-size:30px;
}
td{
	color:white;
	font-size:18px;
}
p{
	color:white;
	font-size:18px;
}

</style>
<?php

function pilihan1()
{
	global $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $f;
	global $i1, $i2, $i3, $i4, $i5, $i6, $i7, $i8, $i9, $i10;
?>
<h3> <b>Soal 1</b></h3>
<p>Silahkan klik jawaban anda lalu pilih <b>Lanjut.</b></p>
<form method="POST">
<table align="center" style="border:none" class="table-responsive" >
<tr><td>
		<center><img src="../../gambar/<?php echo "$f"; ?>/<?php echo "$i1"; ?>.jpg" width="180" height="160" class="img-responsive" ></center>
<br/></td></tr><br/>
<tr><td><br/><br/>
	<label><input type="radio" name="pilihan" value="<?php echo "$p1"; ?>"  /><?php echo "$p1"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p3"; ?>"  /><?php echo "$p3"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p5"; ?>"  /><?php echo "$p5"; ?></label>&nbsp;&nbsp;
</td></tr>

<?php
}



function pilihan2()
{
	global $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $f;
	global $i1, $i2, $i3, $i4, $i5, $i6, $i7, $i8, $i9, $i10;
?>
<h3> <b>Soal 2</b></h3>
<p>Silahkan klik jawaban anda lalu pilih <b>Lanjut.</b></p>
<form method="POST">
<table align="center" style="border:none" class="table-responsive" >
<tr>
	<td>
		<center><img src="../../gambar/<?php echo "$f"; ?>/<?php echo "$i2"; ?>.jpg" width="180" height="170" class="img-responsive" ></center>
	</td>
<br/></tr><br/>
<tr>
	<td></br/><br/>
	<label><input type="radio" name="pilihan" value="<?php echo "$p2"; ?>"  /><?php echo "$p2"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p4"; ?>"  /><?php echo "$p4"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p6"; ?>"  /><?php echo "$p6"; ?></label>&nbsp;&nbsp;
	</td>
</tr>
<?php
}



function pilihan3()
{
	global $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $f;
	global $i1, $i2, $i3, $i4, $i5, $i6, $i7, $i8, $i9, $i10;
?>
<h3> <b>Soal 3</b></h3>
<p>Silahkan klik jawaban anda lalu pilih <b>Lanjut.</b></p>
<form method="POST">
<table align="center" style="border:none" class="table-responsive" >
<tr>
	<td>
		<center><img src="../../gambar/<?php echo "$f"; ?>/<?php echo "$i3"; ?>.jpg" width="160" height="150"></center>
	</td>
<br/></tr><br/>
<tr>
	<td></br/><br/>
	<label><input type="radio" name="pilihan" value="<?php echo "$p7"; ?>"  /><?php echo "$p7"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p5"; ?>"  /><?php echo "$p5"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p3"; ?>"  /><?php echo "$p3"; ?></label>&nbsp;&nbsp;
	</td>
</tr>
<?php
}



function pilihan4()
{
	global $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $f;
	global $i1, $i2, $i3, $i4, $i5, $i6, $i7, $i8, $i9, $i10;
?>
<h3> <b>Soal 4</b></h3>
<p>Silahkan klik jawaban anda lalu pilih <b>Lanjut.</b></p>
<form method="POST">
<table align="center" style="border:none" class="table-responsive" >
<tr>
	<td>
		<center><img src="../../gambar/<?php echo "$f"; ?>/<?php echo "$i4"; ?>.jpg" width="150" height="130"></center>
	</td>
<br/></tr><br/>
<tr>
	<td></br/><br/>
	<label><input type="radio" name="pilihan" value="<?php echo "$p6"; ?>"  /><?php echo "$p6"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p4"; ?>"  /><?php echo "$p4"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p8"; ?>"  /><?php echo "$p8"; ?></label>&nbsp;&nbsp;
	</td>
</tr>
<?php
}




function pilihan5()
{
	global $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $f;
	global $i1, $i2, $i3, $i4, $i5, $i6, $i7, $i8, $i9, $i10;
?>
<h3> <b>Soal 5</b></h3>
<p>Silahkan klik jawaban anda lalu pilih <b>Lanjut.</b></p>
<form method="POST">
<table align="center" style="border:none" class="table-responsive" >
<tr>
	<td>
		<center><img src="../../gambar/<?php echo "$f"; ?>/<?php echo "$i5"; ?>.jpg" width="150" height="140"></center>
	</td>
<br/></tr><br/>
<tr>
	<td></br/><br/>
	<label><input type="radio" name="pilihan" value="<?php echo "$p7"; ?>"  /><?php echo "$p7"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p5"; ?>"  /><?php echo "$p5"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p9"; ?>"  /><?php echo "$p9"; ?></label>&nbsp;&nbsp;
	</td>
</tr>

<?php
}



function pilihan6()
{
	global $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $f;
	global $i1, $i2, $i3, $i4, $i5, $i6, $i7, $i8, $i9, $i10;
?>
<h3> <b>Soal 6</b></h3>
<p>Silahkan klik jawaban anda lalu pilih <b>Lanjut.</b></p>
<form method="POST">
<table align="center" style="border:none" class="table-responsive" >
<tr>
	<td>
		<center><img src="../../gambar/<?php echo "$f"; ?>/<?php echo "$i6"; ?>.jpg" width="160" height="150"></center>
	</td>
<br/></tr><br/>
<tr>
	<td></br/><br/>
	<label><input type="radio" name="pilihan" value="<?php echo "$p10"; ?>"  /><?php echo "$p10"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p8"; ?>"  /><?php echo "$p8"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p6"; ?>"  /><?php echo "$p6"; ?></label>&nbsp;&nbsp;
	</td>
</tr>
<?php
}



function pilihan7()
{
	global $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $f;
	global $i1, $i2, $i3, $i4, $i5, $i6, $i7, $i8, $i9, $i10;
?>
<h3> <b>Soal 7</b></h3>
<p>Silahkan klik jawaban anda lalu pilih <b>Lanjut.</b></p>
<form method="POST">
<table align="center" style="border:none" class="table-responsive" >
<tr>
	<td>
		<center><img src="../../gambar/<?php echo "$f"; ?>/<?php echo "$i7"; ?>.jpg" width="160" height="150"></center>
	</td>
<br/></tr><br/>
<tr>
	<td></br/><br/>
	<label><input type="radio" name="pilihan" value="<?php echo "$p7"; ?>"  /><?php echo "$p7"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p1"; ?>"  /><?php echo "$p1"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p9"; ?>"  /><?php echo "$p9"; ?></label>&nbsp;&nbsp;
	</td>
</tr>
<?php
}



function pilihan8()
{
	global $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $f;
	global $i1, $i2, $i3, $i4, $i5, $i6, $i7, $i8, $i9, $i10;
?>
<h3> <b>Soal 8</b></h3>
<p>Silahkan klik jawaban anda lalu pilih <b>Lanjut.</b></p>
<form method="POST">
<table align="center" style="border:none" class="table-responsive" >
<tr>
	<td>
		<center><img src="../../gambar/<?php echo "$f"; ?>/<?php echo "$i8"; ?>.jpg" width="170" height="160"></center>
	</td>
<br/></tr><br/>
<tr>
	<td></br/><br/>
	<label><input type="radio" name="pilihan" value="<?php echo "$p10"; ?>"  /><?php echo "$p10"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p8"; ?>"  /><?php echo "$p8"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p2"; ?>"  /><?php echo "$p2"; ?></label>&nbsp;&nbsp;
	</td>
</tr>
<?php
}



function pilihan9()
{
	global $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $f;
	global $i1, $i2, $i3, $i4, $i5, $i6, $i7, $i8, $i9, $i10;
?>
<h3> <b>Soal 9</b></h3>
<p>Silahkan klik jawaban anda lalu pilih <b>Lanjut.</b></p>
<form method="POST">
<table align="center"  style="border:none" class="table-responsive" >
<tr>
	<td>
		<center><img src="../../gambar/<?php echo "$f"; ?>/<?php echo "$i9"; ?>.jpg" width="170" height="160"></center>
	</td>
<br/></tr><br/>
<tr>
	<td></br/><br/>
	<label><input type="radio" name="pilihan" value="<?php echo "$p9"; ?>"  /><?php echo "$p9"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p1"; ?>"  /><?php echo "$p1"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p3"; ?>"  /><?php echo "$p3"; ?></label>&nbsp;&nbsp;
	</td>
</tr>
<?php
}



function pilihan10()
{
	global $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $f;
	global $i1, $i2, $i3, $i4, $i5, $i6, $i7, $i8, $i9, $i10;
?>
<h3> <b>Soal 10</b></h3>
<p>Silahkan klik jawaban anda lalu pilih <b>Lanjut.</b></p>
<form method="POST">
<table align="center" style="border:none" class="table-responsive" >
<tr>
	<td>
		<center><img src="../../gambar/<?php echo "$f"; ?>/<?php echo "$i10"; ?>.jpg" width="160" height="150"></center>
	</td>
<br/></tr><br/>
<tr>
	<td></br/><br/>
	<label><input type="radio" name="pilihan" value="<?php echo "$p2"; ?>"  /><?php echo "$p2"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p10"; ?>"  /><?php echo "$p10"; ?></label>&nbsp;&nbsp;
	<label><input type="radio" name="pilihan" value="<?php echo "$p4"; ?>"  /><?php echo "$p4"; ?></label>&nbsp;&nbsp;
	</td>
</tr>
<?php
}


?>