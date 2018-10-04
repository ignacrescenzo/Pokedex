<?php
$conn = mysqli_connect("localhost","root","","pokemonCrescenzoIgnacio");
$nombre = $_GET['name'];
$poder = $_GET['poder'];
$tipo=$_GET['tipo'];
$link=$_GET['link'];
$id=$_GET['id'];

$sql="select * from pokemon where id='$id';";
$result = mysqli_query($conn,$sql);
$numeroFilas=mysqli_num_rows($result);
if($numeroFilas==0)
{
	$sql = "insert into pokemon (id,nombre,poder,tipo,link) values('$id','$nombre','$poder','$tipo','$link');";
	
	header("location:./index.php");
	mysqli_query($conn,$sql);
}
else{

	echo "<div style='text-align:center;margin-top:150px;'><h1>YA EXISTE UN POKEMON CON ESE CODIGO!</h1><br>";
	echo "<a href='./index.php'>VOLVER</a></div>";
}
?>