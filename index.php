<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>
  	<div class="container">
	  	<div class="row">
	  		<div class="col-sm-12">
	  			<img src="img/columna.jpg" alt="columna" class="img-responsive"/>
	  		</div><!--end imagen zubiri -->
	  	</div>
	  	<div class="row" id="main">
	  		<h1>LOGIN</h1>
	  		<form class="form-horizontal col-sm-8" role="form" action="comun/validar.php" method="post">
			  <div class="form-group">
			    <label for="dni" class="col-sm-6 control-label">DNI:</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" name="dni">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="password" class="col-sm-6 control-label">Password</label>
			    <div class="col-sm-6">
			      <input type="password" class="form-control" name="password"/>
			    </div>
			  </div>
			  <label class="col-sm-6 control-label"><a href="comun/registro.php">Registrarme</a></label>
			    <div class="col-sm-offset-6 col-sm-6">
			      <input type="submit" class="btn btn-primary btn-lg btn-block" name="entrar" value="entrar"/>
			    </div>
			    <!--inicio ventana modal -->
			<div class="modal fade" id="modal">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title" id="titModal">Error Usuario</h4>
			      </div>
			      <div class="modal-body" >
			        <p id="bodyModal">Falta nombre usuario&hellip;</p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		<!-- fin ventna modal -->
			</form><!--end formulario-->
		</div><!--row del formulario+logo-->
		<div class="row">
			<?php include 'componentes/footer.php'?>
		</div>
	</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--añadir mi javascript-->
   <!-- <script src="js/miapp.js"></script>-->
  </body>
</html>