<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Stream Monitor">
<meta name="author" content="Ronan Salieri">
<title>Moniteur de flux vidéo 0.2b</title>
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.0.js"></script>
</head>
<body>
<?php include('apropos.html') ?>
<?php include('aide.html') ?>
<div class="menu">
<?php
	include("menu.html");
?>
</div>
<?php 
	include('connect.php');
	$sql = "SELECT * FROM stream WHERE id=1";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$id=$row['id'];
	$url=$row['url'];
	$service=$row['service'];
	}
?>	
<div class="video1">
	<div class="etiquette1">
		<?php
			echo"Vidéo 1 - ";
			echo $service;
			echo" - ";		
			$short_url=substr($url, 0, 50);
			echo $short_url;
		?>
	</div>
	<iframe 
		width="100%" 
		height="100%" 
		autoplay="0"
		frameborder="0"
		src="
			<?php
			 	echo $url;
			 	$bdd=null;
			?>
	    ">
	</iframe>
</div>
<?php 
	include('connect.php');
	$sql = "SELECT * FROM stream WHERE id=2";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$id=$row['id'];
	$url=$row['url'];
	$service=$row['service'];
	}
?>	
<div class="video2">
	<div class="etiquette2">
		<?php
		echo"Vidéo 2 - ";
		echo $service;
		echo" - ";		
		$short_url=substr($url, 0, 50);
		echo $short_url;
		?>
	</div>
		<iframe 
		width="100%" 
		height="100%"
		autoplay="0"
		frameborder="0"
		src="
			<?php
			 	echo $url;
			 	$bdd=null;
			?>
	    ">
	</iframe>	
</div>
<?php 
	include('connect.php');
	$sql = "SELECT * FROM stream WHERE id=3";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$id=$row['id'];
	$url=$row['url'];
	$service=$row['service'];
	}
?>		
<div class="video3">
	<div class="etiquette3">
		<?php
		echo"Vidéo 3 - ";
		echo $service;
		echo" - ";		
		$short_url=substr($url, 0, 50);
		echo $short_url;
		?>
	</div>	
		<iframe 
		width="100%" 
		height="100%" 
		autoplay="0"
		frameborder="0"
		src="
			<?php
			 	echo $url;
			 	$bdd=null;
			?>
	    ">
	</iframe>
</div>
<?php 
	include('connect.php');
	$sql = "SELECT * FROM stream WHERE id=4";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$id=$row['id'];
	$url=$row['url'];
	$service=$row['service'];
	}
?>	
<div class="video4">
	<div class="etiquette4">
		<?php
		echo"Vidéo 4 - ";
		echo $service;
		echo" - ";		
		$short_url=substr($url, 0, 50);
		echo $short_url;
		?>
	</div>	
		<iframe 
		width="100%" 
		height="100%" 
		autoplay="0"
		frameborder="0"				
		src="
			<?php
			 	echo $url;
			 	$bdd=null;
			?>
	    ">
	</iframe>
</div>	
</body>
</html>
