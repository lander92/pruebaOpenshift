<!DOCTYPE html>
<html>
<head>
	<title>Osteopatia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="../css/main.css" rel="stylesheet" media="screen">
</head>
<body id="registro">
	<div class="container">
	  	<div class="row">
	  		<div class="col-sm-12">
	  			<img src="../img/columna.jpg" alt="columna" class="img-responsive"/>
	  		</div><!--end imagen zubiri -->
	  	</div>
	  	<div class="row" id="main">
	  	<h1>Registro</h1>
	  		<form class="form-horizontal col-sm-8" role="form" action="registrar.php" method="post">
			  <div class="form-group">
			    <label for="dni" class="col-sm-6 control-label">DNI:</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="dni">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="nombre" class="col-sm-6 control-label">Nombre:</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="nombre">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="apellidos" class="col-sm-6 control-label">Apellidos:</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="apellidos">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="password" class="col-sm-6 control-label">Password</label>
			    <div class="col-sm-6">
			      <input type="password" class="form-control" name="password"/>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="localidad" class="col-sm-6 control-label">Localidad:</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="localidad">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="telefono" class="col-sm-6 control-label">Telefono:</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="telefono">
			    </div>
			  </div>
			  <div class="form-group">
			  <label for="tipoPersona" class="col-sm-6 control-label">Tipo:</label>
				  <label class="radio-inline">
	  				<input type="radio" name="tipoPersona" value="medico"> Medico
				  </label>
				  <label class="radio-inline">
	  				<input type="radio" name="tipoPersona" value="paciente"> Paciente
				  </label>
			  </div>
			  <div class="col-sm-offset-6 col-sm-6">
			  	<input type="submit" class="btn btn-primary btn-lg btn-block" name="registrar" value="registrar"/>
			  </div>
			</form><!--end formulario-->
		</div><!--row del formulario+logo-->
		<div class="row">
			<?php include '../componentes/footer.php'?>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!--añadir mi javascript-->
    <script src="../js/app.js"></script>
</body>
</html>