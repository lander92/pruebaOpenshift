<html>
<head>
	
	<title>Lista de Pacientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="../css/main.css" rel="stylesheet" media="screen">
	
	
</head>
<body id="lista">
	<section class="container">
		<div class="content row">
			<?php include "../componentes/headerMedico.php"?>
		</div>
		<div class="content row">
			<div class="table table-responsive col-sm-6 col-md-6">
				<table class="table table-hover">
					<tr class="info"><td>DNI</td><td>NOMBRE</td><td>APELLIDOS</td><td>LOCALIDAD</td><td>TELEFONO</td><td>HISTORIAL</td></tr>
					<?php include "listarPacientes2.php"?>
				</table>
			</div>
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
