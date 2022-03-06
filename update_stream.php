<?php
$id = $_POST['id'];
$service = $_POST['service'];
$url = $_POST['url'];

echo $id;
echo $service;
echo $url;


include('connect.php');

$sql = "UPDATE stream SET url = '$url', service = '$service' WHERE stream.id = '$id'";
$req = $bdd->query($sql);
header('Location: links.php');
?>