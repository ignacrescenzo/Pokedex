<?php
$conn = mysqli_connect("localhost","root","","pokemonCrescenzoIgnacio");
$nombre = $_GET['nombre'];
$poder = $_GET['poder'];
$tipo=$_GET['tipo'];
$link=$_GET['link'];
$id=$_GET['id'];
$sql="update pokemon set nombre='".$nombre."', poder='".$poder."', tipo='".$tipo."', link='".$link."' where id='".$id."';";
$result = mysqli_query($conn,$sql);
header("location:./index.php");

?>