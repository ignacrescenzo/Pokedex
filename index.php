<?php 
$conn = mysqli_connect("localhost","root","","pokemonCrescenzoIgnacio");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./recursos/css/bootstrap.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Gamja+Flower" rel="stylesheet">
	<script type="text/javascript" src="./recursos/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="./recursos/js/bootstrap.min.js"></script>
	<style>
			.poke{
				border-bottom: black solid 2px;
				padding-bottom: 10px;
				margin: 10px;
				text-align: center;
			}
			body{
				background-color: #D4D4D4;
			}
			.container {
				border: 3px solid black;
				background-color: white;
			}
			h1{
				margin: 0px auto;
			}
			*{
				font-family: 'Gamja Flower', cursive;
			}
			#agregar a{
				color: green;
			}
			.eliminar,.eliminar:hover{
				color: red;
			}
	</style>
</head>
<body>

	<div class="container d-flex flex-column justify-content-center text-center pt-5 mt-5">
		<?php
			session_start();
			if(!isset($_SESSION["login"])){
				echo "<h3><a href='./loginSession.php'><div class='d-inline'>Loguearse</div></a></h3>";
			}
			else{
				echo "<h3><a href='cerrarSesion.php'><div class='d-inline'>Cerrar Sesion</div></a></h3><br>";
				echo "<h2 id='agregar'><a href='./formularioAGREGAR.php'><div class='d-inline'>Agrega Pokemon a la pokedex!<div></a></h2>";
			}
		?>
		<div>
			<h1 class="mx-auto mb-3">Buscá tu pokemon</h1>
		</div>
		<div class="mb-5">
			<form action="./index.php" method="GET">
				<div class="row mb-3 fix"><input type="text" name="whoisthatpokemon" class="mx-auto"></div>
				<div class="row"><input type="submit" value="Buscar pokemon" class="mx-auto"></div>
			</form>
		</div>
		<div>
			<?php
			if(!isset($_GET["whoisthatpokemon"])){
				echo "<h1 class='text-center'>NO SE HA DEFINIDO NINGUNA VARIABLE</h1><br>";
				$sql = "select * from pokemon";
				$result = mysqli_query($conn,$sql);
				while($pokemons = mysqli_fetch_assoc($result)){				
					echo "<div class='d-md-flex d-block flex-row align-items-center justify-content-between poke'>
						<div class='col'>
							<img src=".$pokemons['link']." alt='' width=128 height=128>
						</div>

						<div class='col'>
							<h1>".$pokemons['nombre']."</h1>
						</div>

						<div class='col'>
							<h1>".$pokemons['poder']."</h1>
						</div>

						<div class='col'>
							<img src=".$pokemons['tipo']." alt='' width=64 height=64>
						</div>"; 
						if(isset($_SESSION["login"])){
							echo"<div class='d-flex justify-content-center'><a href='./modificar.php?p=".$pokemons['nombre']."'>
									<div class='mr-3'>
										<h5>MODIFICAR</h5>
									</div>
								</a>
								<a class='eliminar' href='./eliminarBD.php?p=".$pokemons['nombre']."'>
									<div>
										<h5>ELIMINAR</h5>
									</div>
								</a></div>";
						}
					echo "</div>";

				}
			}
			else{
				$buscado = $_GET["whoisthatpokemon"];				
				$sql = "select * from pokemon where nombre='$buscado'";
				$result = mysqli_query($conn,$sql);
				$numeroFilas=mysqli_num_rows($result);
				if($numeroFilas!=0){
					$pokemon = mysqli_fetch_assoc($result);	
					echo "<div class='d-md-flex d-block flex-row align-items-center justify-content-between poke'>
						<div class='col'>
						<img src=".$pokemon['link']." alt='' width=128 height=128>
						</div>

						<div class='col'>
						<h1>".$pokemon['nombre']."</h1>
						</div>

						<div class='col'>
							<h1>".$pokemon['poder']."</h1>
						</div>

						<div class='col'>
							<img src=".$pokemon['tipo']." alt='' width=64 height=64>
						</div>"; 
						if(isset($_SESSION["login"])){
									echo"<div class='d-flex justify-content-center'><a href='./modificar.php?p=".$pokemon['nombre']."'>
											<div class='mr-3'>
												<h5>MODIFICAR</h5>
											</div>
										</a>
										<a class='eliminar' href='./eliminarBD.php?p=".$pokemon['nombre']."'>
											<div>
												<h5>ELIMINAR</h5>
											</div>
										</a></div>";
						}			
						echo "</div>";
					exit();
				}
				else{
					if($numeroFilas==0 && $buscado!=null) echo "<h1 class='text-center'>NO SE HA ENCONTRADO EL POKEMON</h1> <br>";
					$sql = "select * from pokemon";
					$result = mysqli_query($conn,$sql);
					while($pokemons = mysqli_fetch_assoc($result)){				
						echo "<div class='row d-md-flex d-block align-items-center justify-content-between poke'>
							<div class='col'>
								<img src=".$pokemons['link']." alt='' width=128 height=128>
							</div>

							<div class='col'>
								<h1>".$pokemons['nombre']."</h1>
							</div>

							<div class='col'>
								<h1>".$pokemons['poder']."</h1>
							</div>

							<div class='col'>
								<img src=".$pokemons['tipo']." alt='' width=64 height=64>
							</div>";
							if(isset($_SESSION["login"])){
								echo"<div class='d-flex justify-content-center'><a href='./modificar.php?p=".$pokemons['nombre']."'>
										<div class='mr-3'>
											<h5>MODIFICAR</h5>
										</div>
									</a>
									<a class='eliminar' href='./eliminarBD.php?p=".$pokemons['nombre']."'>
										<div>
											<h5>ELIMINAR</h5>
										</div>
									</a></div>";
							}			
						echo "</div>";
						}
					}
				}																		
			?>
		</div>
	</div>
</body>
</html>