<!DOCTYPE html>
<html lang="en">
<head>
  <title>TOPSIS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  	<style type="text/css">
	body{
		background: url('131.jpg');
		background-color : #fff;
		color: #ff5bbc;
	}
	
	.navbar-inverse {
		background: url('9.jpg');
		background-color: #fed0f5;
		border-color:#fed0f5;
		font-size:50px;
		font-weight: bold;
		
	}
.navbar-inverse .navbar-brand {
	font-family: lato;
  color: #D97494;
  text-shadow: 2px 2px 2px #FFf;
  font-size:25px;
  text-align:center;
  
}
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
		margin-right: 350px;
		margin-left: 485px;
  
}
	
	</style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SPK METODE TOPSIS</a>
    </ul>
  </div>
  
</nav>

<body>
  	<style type="text/css">

	header h1.judul{
	text-align: center;	
	font-size: 22px;
	font-weight: bold;
	}
	
	header h3.deskripsi{
	text-align: center;
	font-size: 18px;
	}
	
	header h4.deskripsi2{
	margin-left: 28px;
	text-align: left;
	font-size: 18px;
	font-weight: bold;
	}
	
	


	
	</style>
<div class="content">
	<header>
		<h1 class="judul">METODE TOPSIS UNTUK MENENTUKAN DAERAH TERBAIK</h1>
		<h3 class="deskripsi">Dengan aplikasi ini, akan dapat ditentukan daerah terbaik berdasarkan kriteria yang ada.</h3>
		<h4 class="deskripsi2">Menu	:</h4>
	</header>
	</div>
 
	<div class="badan">
 
 

 <?php
if(@$_GET['a']=='kriteria'){
	$active1='class="active"';
	$active2='';
	$active3='';
	$active4='';
}else if(@$_GET['a']=='alternatif'){
	$active1='';
	$active2='class="active"';
	$active3='';
	$active4='';
}else if(@$_GET['a']=='nilaimatrik'){
	$active1='';
	$active2='';
	$active3='class="active"';
	$active4='';
}else if(@$_GET['a']=='hasiltopsis'){
	$active1='';
	$active2='';
	$active3='';
	$active4='class="active"';
}else{
	$active1='';
	$active2='';
	$active3='';
	$active4='';
}	

?> 
  
<!-- TAB KIRI -->
<div class="col-sm-2">
<ul class="nav nav-pills nav-stacked">

  	<style type="text/css">
	.nav-pills > li.active > a,
	.nav-pills > li.active > a:hover,
	.nav-pills > li.active > a:focus {
	border-color: #ff5bbc;
	background-color: #ff5bbc;
	color:#fff;
	}
	</style>
  <li <?php echo $active1 ?>><a href="?a=kriteria&k=kriteria" >Kriteria</a></li>
  <li <?php echo $active2 ?>><a href="?a=alternatif&k=alternatif" >Alternatif</a></li>
  <li <?php echo $active3 ?>><a href="?a=nilaimatrik" >Nilai Matriks</a></li>
  <li  <?php echo $active4 ?>><a href="?a=hasiltopsis&k=nilai_matriks">Hasil Topsis</a></li>
</ul>  
</div>
<!-- /TAB KIRI -->  
  
  

  <div class="col-sm-10">
 <?php
 
 if(@$_GET['a']=='kriteria'){
	include ("kriteria.php");
 }else if(@$_GET['a']=='alternatif'){
	include ("alternatif.php");
 }else if(@$_GET['a']=='nilaimatrik'){
	include ("nilaimatrik.php");
 }else if(@$_GET['a']=='hasiltopsis'){
	include ("hasiltopsis.php");
 }
 

 ?>
 
 
 
</div>


</body>
</html>
