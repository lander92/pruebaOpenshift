<html>
<head>
	<title>Busqueda de Pacientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
	<section class="container">
		<div class="content row">
			<?php include "../componentes/headerMedico.php"?>
		</div>
		<div class="row col-sm-6 col-md-6" >
			<form role="form" method="post" action="buscarPaciente2.php">
				<div class="form-group">
			    	<label for="dni">Introduce el DNI del paciente que desea buscar:</label>
			    	<input type="text" class="form-control" id="dni_paciente" name="dni_paciente">
				</div>
				<input type="submit" class="btn btn-default" name="buscar" value="buscar">
			</form>
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