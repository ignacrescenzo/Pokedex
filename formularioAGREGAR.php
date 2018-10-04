<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Añadir a la base de datos</title>
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
		<form action="./agregarBD.php" method="get" enctype="application/x-www-form-urlencoded">
			<label for="">
				Id:
			</label> 
			<input type="text" name="id">
			<br>
			<br>
			

			<label for="">
				Nombre:
			</label>
			<input type="text" name="name" >
			<br>
			<br>
			

			<label for="">
				Poder: 
			</label>
			<input type="text" name="poder" >
			<br>
			<br>
			<label for="">
				Tipo (inserte URL): 
			</label>
			<input type="text" name="tipo" >
			<br>
			<br>
			<label for="">
				Imagen (inserte URL): 
			</label>
			<input type="text" name="link" >
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