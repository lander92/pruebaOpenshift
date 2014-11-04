<!DOCTYPE html>
<html>
<head>
	<title>Dar de baja</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap/3.2.0/css/bootstrap.min.css"/>

    <!-- Include FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/fontawesome/4.1.0/css/font-awesome.min.css" />

    <!-- BootstrapValidator CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- BootstrapValidator JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>
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
			conectar();
			selecDb();
			$dbTabla='usuarios';
			//guardo en una variable el dni guardado en la sesion
			$dni=$_SESSION['dni'];
			//guardo en $consulta la consulta que voy a ejecutar
			$consulta= "DELETE FROM $dbTabla WHERE dni ='$dni'";
			//ejecutamos la consulta
			if(mysql_query($consulta)){
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
	
    <script src="../js/miapp.js"></script>
</body>
</html>