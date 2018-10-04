<?php
$conn = mysqli_connect("localhost","root","","pokemonCrescenzoIgnacio");
$nombre = $_GET['p'];
$query = "select * from pokemon where nombre='$nombre';";
$result = mysqli_query($conn,$query);
$pokemon = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar</title>
	<style>
		.container{
			width: 40%;
			border: black solid 3px;
			margin: 0px auto;
			text-align: center;
			padding: 15px;
		}
		input[type="text"]{
			padding: 5px;
			border-radius: 3px;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="./actualizarBD.php" method="get" enctype="application/x-www-form-urlencoded">
			<label for="">
				Id:
			</label> 
			<input type="text" name="id" readonly value="<?php echo $pokemon['id'];?>" >
			<br>
			<br>
			

			<label for="">
				Nombre:
			</label>
			<input type="text" name="nombre" value="<?php echo $pokemon['nombre'];?>" >
			<br>
			<br>
			

			<label for="">
				Poder: 
			</label>
			<input type="text" name="poder" value="<?php echo $pokemon['poder'];?>" >
			<br>
			<br>

			<label for="">
				Tipo (pegar URL): 
			</label>
			<input type="text" name="tipo" value="<?php echo $pokemon['tipo'];?>" >
			<br>
			<br>

			<label for="">
				Imagen (pegar URL): 
			</label>
			<input type="text" name="link" value="<?php echo $pokemon['link'];?>" >
			<br>
			<br>
			<br>
			<input type="submit" value="Listo!">
		</form>
		<br><br>
			<a href="./index.php"><input type="submit" value="VOLVER"></a>
	</div>
</body>
</html>