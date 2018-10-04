
	
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/bootstrap.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Gamja+Flower" rel="stylesheet">
	<script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<style>
		.container{
			width: 40%;
			border: black solid 3px;
			margin: 0px auto;
			text-align: center;
			padding: 15px;
		}
		input[type="text"],input[type="password"]{
			padding: 5px;
			border-radius: 3px;
		}
	</style>
	</head>
	<body>
		<div class="container d-flex flex-column justify-content-center align-items-center mt-5">
		<?php
			session_start();
			$usuario = "admin";
			$password = "admin";
			if(isset($_POST["name"]) && isset($_POST["password"])){
				if($_POST["name"]==$usuario && $_POST["password"]==$password){
					header("location:./index.php");
					$_SESSION["login"] = 1;
				}
				else{
					echo "USUARIO O CONTRASEÑA INCORRECTOS";
				}
			}
		?>
			<form action="./loginSession.php" method="post">
				<label for="name">Usuario:
					<input type="text" name="name" placeholder="admin">
				</label>
				<br><br>
				<label for="password">Contraseña:
					<input type="password" name="password" placeholder="admin">
				</label>
				<br>
				<input type="submit" value="Ingresar">				
			</form>
		</div>
	</body>
</html>