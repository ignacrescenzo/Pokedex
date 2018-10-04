<?php
$conn = mysqli_connect("localhost","root","","pokemonCrescenzoIgnacio");
$nombre = $_GET['p'];
$query = "delete from pokemon where nombre='$nombre';";
$result = mysqli_query($conn,$query);
header("location:./index.php");
?>

