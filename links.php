<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Stream Monitor">
<meta name="author" content="Ronan Salieri">
<title>Stream Monitor 0.2</title>
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.0.js"></script>
</head>
<body style="background-color: #212529;">
<?php include('apropos.html') ?>
<?php include('aide.html') ?>	
<div class="container">
<?php
	include("menu.html");
?>
</div>
<div class="container">
<div class="row">

<div class="col-6">
	<h3><span class="badge bg-secondary">Vidéo 1</span></h3>	
	<div class="mb-3"> 
		<h6 style="color: white;">Vidéo actuelle</h6>
		<div class="stream_actuel">
		<?php 
		include('connect.php');
		$sql = "SELECT * FROM stream WHERE id=1";
		$req = $bdd->query($sql);
		while($row = $req->fetch()) {
		$service=$row['service'];
		$url=$row['url'];
		}
		$readurl = wordwrap($url, 85, "<br>", true);
		echo $service;
		echo" - ";
		echo $readurl;
		$bdd=null;
		?></div>
		<hr class="new">
		<h6 style="color: white;">Nouvelle vidéo</h6>
		<form action="update_stream.php" method="post">
			<label for="service" style="color: white;">Service</label>                                         
			<select id="service" name="service" class="form-select" aria-label="select"> 
			<option selected disabled>Choisir le fournisseur</option>  
			<?php 
			include('connect.php');
			$sql = "SELECT * FROM services ORDER BY services.providers ASC";
			$req = $bdd->query($sql);
			while($row = $req->fetch()) {
			$providers=$row['providers'];
			echo"<option>$providers</option>";
			}
			$bdd=null;
			?></select>                                         
			<label for="url" class="form-label" style="color: white;">URL de la vidéo</label>                                         
			<textarea class="form-control" id="url" name="url" rows="3"></textarea>
			<input id="id" name="id" type="hidden" value="1">
			<br>
			<button type="submit" class="btn btn-secondary">Ok</button>
			</form>
		</div>
</div>
<div class="col-6">
	<h3><span class="badge bg-secondary">Vidéo 2</span></h3>	
	<div class="mb-3"> 
		<h6 style="color: white;">Vidéo actuelle</h6>
		<div class="stream_actuel">
		<?php 
		include('connect.php');
		$sql = "SELECT * FROM stream WHERE id=2";
		$req = $bdd->query($sql);
		while($row = $req->fetch()) {
		$service=$row['service'];
		$url=$row['url'];
		}
		$readurl = wordwrap($url, 85, "<br>", true);
		echo $service;
		echo" - ";
		echo $readurl;
		$bdd=null;
		?></div>
		<hr class="new">
		<h6 style="color: white;">Nouvelle vidéo</h6>
		<form action="update_stream.php" method="post">
			<label for="service" style="color: white;">Service</label>                                         
			<select id="service" name="service" class="form-select" aria-label="select"> 
			<option selected disabled>Choisir le fournisseur</option>  
			<?php 
			include('connect.php');
			$sql = "SELECT * FROM services ORDER BY services.providers ASC";
			$req = $bdd->query($sql);
			while($row = $req->fetch()) {
			$providers=$row['providers'];
			echo"<option>$providers</option>";
			}
			$bdd=null;
			?></select>                                         
			<label for="url" class="form-label" style="color: white;">URL de la vidéo</label>                                         
			<textarea class="form-control" id="url" name="url" rows="3"></textarea>
			<input id="id" name="id" type="hidden" value="2">
			<br>
			<button type="submit" class="btn btn-secondary">Ok</button>
			</form>
		</div>
</div>
</div>
<div class="row">
<div class="col-6">
	<h3><span class="badge bg-secondary">Vidéo 3</span></h3>	
	<div class="mb-3"> 
		<h6 style="color: white;">Vidéo actuelle</h6>
		<div class="stream_actuel">
		<?php 
		include('connect.php');
		$sql = "SELECT * FROM stream WHERE id=3";
		$req = $bdd->query($sql);
		while($row = $req->fetch()) {
		$service=$row['service'];
		$url=$row['url'];
		}
		$readurl = wordwrap($url, 85, "<br>", true);
		echo $service;
		echo" - ";
		echo $readurl;
		$bdd=null;
		?></div>
		<hr class="new">
		<h6 style="color: white;">Nouvelle vidéo</h6>
		<form action="update_stream.php" method="post">
			<label for="service" style="color: white;">Service</label>                                         
			<select id="service" name="service" class="form-select" aria-label="select"> 
			<option selected disabled>Choisir le fournisseur</option>  
			<?php 
			include('connect.php');
			$sql = "SELECT * FROM services ORDER BY services.providers ASC";
			$req = $bdd->query($sql);
			while($row = $req->fetch()) {
			$providers=$row['providers'];
			echo"<option>$providers</option>";
			}
			$bdd=null;
			?></select>                                         
			<label for="url" class="form-label" style="color: white;">URL de la vidéo</label>                                         
			<textarea class="form-control" id="url" name="url" rows="3"></textarea>
			<input id="id" name="id" type="hidden" value="3">
			<br>
			<button type="submit" class="btn btn-secondary">Ok</button>
			</form>
		</div>
</div>
<div class="col-6">
	<h3><span class="badge bg-secondary">Vidéo 4</span></h3>	
	<div class="mb-3"> 
		<h6 style="color: white;">Vidéo actuelle</h6>
		<div class="stream_actuel">
		<?php 
		include('connect.php');
		$sql = "SELECT * FROM stream WHERE id=4";
		$req = $bdd->query($sql);
		while($row = $req->fetch()) {
		$service=$row['service'];
		$url=$row['url'];
		}
		$readurl = wordwrap($url, 85, "<br>", true);
		echo $service;
		echo" - ";
		echo $readurl;
		$bdd=null;
		?></div>
		<hr class="new">
		<h6 style="color: white;">Nouvelle vidéo</h6>
		<form action="update_stream.php" method="post">
			<label for="service" style="color: white;">Service</label>                                         
			<select id="service" name="service" class="form-select" aria-label="select"> 
			<option selected disabled>Choisir le fournisseur</option>  
			<?php 
			include('connect.php');
			$sql = "SELECT * FROM services ORDER BY services.providers ASC";
			$req = $bdd->query($sql);
			while($row = $req->fetch()) {
			$providers=$row['providers'];
			echo"<option>$providers</option>";
			}
			$bdd=null;
			?></select>                                         
			<label for="url" class="form-label" style="color: white;">URL de la vidéo</label>                                         
			<textarea class="form-control" id="url" name="url" rows="3"></textarea>
			<input id="id" name="id" type="hidden" value="4">
			<br>
			<button type="submit" class="btn btn-secondary">Ok</button>
			</form>
		</div>
</div>	
</div>	
</div>
</body>
</html>
