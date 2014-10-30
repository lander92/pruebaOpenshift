<!DOCTYPE html>
<html>
<head>
	<title>Osteopatia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="../css/main.css" rel="stylesheet" media="screen">
</head>
<body id="baja">
	<section class="container">
		<div class="content row">
			<?php include "../componentes/headerMedico.php";?>
		</div>
		<div class="row col-sm-6 col-md-6" >
	<?php 
		session_start();
		if(isset($_POST['baja'])){
			//incluimos el archivo conexion.php para utilizar sus funciones
			include '../conexion.php';
			//guardo en variables el nombre de la bd y de la tabla que voy a utilizar
			$base='gestorPacientes';
			$dbTabla='usuarios';
			$conexion=conectar();
			//guardo en una variable el dni guardado en la sesion
			$dni=$_SESSION['dni'];
			//guardo en $consulta la consulta que voy a ejecutar
			$consulta= "DELETE FROM $dbTabla WHERE dni ='$dni'";
			//ejecutamos la consulta
			if(mysql_db_query($base, $consulta, $conexion)){
				//si se ejecuta correctamente
			?>
				<script languaje="javascript">
					location.href = "../comun/index.php";
				  	alert("Te has dado de baja!");
				</script>
			<?php 
			}else{
				//si no se ejecuta correctamente
				print "<h3>Error al darte de baja</h3> <br>";
			}
		}else{
	?>
		<form role="form" method="post" action=<?php echo $_SERVER['PHP_SELF']?>>
			<h3><span class="label label-default">Estas Seguro que deseas darte de baja?</span></h3>
			<input type="submit" name="baja" value="dar de baja"/>
		</form>
			
	<?php 
		}
	?>
		</div>
		<div class="content row">
		<?php include "../componentes/footer.php"; ?>
		</div>
	</section>
	<script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>