<?php
    require_once('conf.php');
    // Create connection
    $conn = mysqli_connect($servername, $username, $passport, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" 
			content="width=devise-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">		
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
		
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				
				
				
	
				
			</button>
		</div>
	</div>
<div class="collapse navbar-collapse" id= "myNavbar">
		<ul class="nav navbar-nav">
			<li><a href="Web_harkka.php?show=saadata">Säädata </a></li>
			<li><a href="Web_harkka.php?show=lampotila">Lämpötila </a></li>
			<li><a href="Web_harkka.php?show=tuulennopeus">Tuulennopeus </a></li>
			<li><a href="Web_harkka.php?show=ilmanpaine">Ilmanpaine </a></li>
			<li><a href="Web_harkka.php?show=tuulennopeusmittari">Tuulennopeusmittari </a></li>
			<li><a href="Web_harkka.php?show=vrk_lampotila">Vuorokausilämpötila </a></li>
	
		</ul>
	</div>	
	</div>
</nav>	
	
	<div class="container">
	
<?php

if ($_REQUEST['show']== "saadata")
	require("saadata.php");
else  if ($_REQUEST['show']== "lampotila")
	require("lampotila.php");
else  if ($_REQUEST['show']== "ilmanpaine")
	require("ilmanpaine.php");
else  if ($_REQUEST['show']== "tuulennopeusmittari")
	require("tuulennopeusmittari.php");
else  if ($_REQUEST['show']== "vrk_lampotila")
	require("vrk_lampotila.php");
else 
	require("tuulennopeus.php");	
		

?>
<div/>

</body>
</html>

