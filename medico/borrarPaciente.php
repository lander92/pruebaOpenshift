<html>
<head>
	<title>Borrar Pacientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
	<section class="container">
		<div class="content row">
			<?php include "../componentes/headerMedico.php"?>
		</div>
		<?php 
		if(isset($_POST['borrar'])){
			session_start();
			if(!empty($_POST['dni_paciente'])){
				//incluimos el archivo conexion.php para utilizar sus funciones
				include '../conexion.php';
				//llamo a las funciones para conectarme a la bd y seleccionar la bd
				conectar();
				selecDb();
				//guardo en una variable el nombre de la tabla que voy a usar
				$dbTabla="pacientes";
				//guardo en variables el dni guardado en la sesion y el dni introducido en el formulario
				$dni_medico=$_SESSION['dni'];
				$dni_paciente=$_POST['dni_paciente'];
				//guardo en $consulta la consulta que voy a ejecutar
				$consulta="DELETE FROM $dbTabla 
							WHERE (dni_medico='$dni_medico') AND (dni_paciente='$dni_paciente')";
				//ejecutamos la consulta
				if(mysql_query($consulta)){
					//si se ejecuta correctamente
					print "<h3>Registro borrado</h3> <br>";
				}else{
					//si no se ejecuta correctamente
					print "<h3>Registro  no borrado</h3> <br>";
				}
				//cierro la conexion
				mysql_close();
			//si no ha introducido dni	
			}else{
				print "<h3>DNI Obligatorio</h3>";
			}
		//si no se ha pulsado el boton	
		}else{
?>
		<div class="content row col-sm-6 col-md-6" >
			<form role="form" method="post" action=<?php echo $_SERVER['PHP_SELF']?>>
				<div class="form-group">
			    	<label for="dni">Introduce el DNI del paciente que desea borrar:</label>
			    	<input type="text" class="form-control" id="dni_paciente" name="dni_paciente">
				</div>
				<input type="submit" class="btn btn-default" name="borrar" value="borrar">
			</form>
		</div>
	<?php 
		}
	?>
		<div class="content row">
			<?php include "../componentes/footer.php"; ?>
		</div>
	</section>

	<script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/bootstrap.js"></script>
	<script src="../js/app.js"></script>
</body>
</html>
