<?php 
	if(isset($_POST['modificar'])){
		session_start();
		$dni_medico=$_SESSION['dni'];
		$dni = $_POST['dni'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$localidad = $_POST['localidad'];
		$telefono = $_POST['telefono'];
		$historial = $_POST['historial'];
		
		include '../conexion.php';
		$conexion=conectar();
		$base='gestorPacientes';
		$dbTabla='pacientes';
		$consulta = "UPDATE $dbTabla
		    SET nombre='$nombre', apellidos='$apellidos', localidad='$localidad',
		    telefono='$telefono', historial='$historial' 
		    WHERE (dni_paciente='$dni') AND (dni_medico='$dni_medico')";
		$result = mysql_db_query($base, $consulta, $conexion);
		if ($result) {
		    print "<h3>Registro modificado correctamente.</h3>";
		} else {
		    print "<h3>Error al modificar el registro.</h3>\n";
		}
	}else{
?>
	<label>Introduzca los datos del paciente a modificar</label>
			<form role="form" method="post" action=<?php echo $_SERVER['PHP_SELF']?>>
				<div class="form-group">
			    	<label for="dni">DNI:</label>
			    	<input type="text" class="form-control" id="dni" name="dni">
				</div>
				<div class="form-group">
			    	<label for="nombre">NOMBRE:</label>
			    	<input type="text" class="form-control" id="nombre" name="nombre">
			  	</div>
			  	<div class="form-group">
			    	<label for="apellidos">APELLIDOS:</label>
			    	<input type="text" class="form-control" id="apellidos" name="apellidos">
			  	</div>
			  	<div class="form-group">
			    	<label for="localidad">LOCALIDAD:</label>
			    	<input type="text" class="form-control" id="localidad" name="localidad">
			  	</div>
			  	<div class="form-group">
			    	<label for="telefono">TELEFONO:</label>
			    	<input type="text" class="form-control" id="telefono" name="telefono">
			  	</div>
			  	<div class="form-group">
			  		<label for="historial">HISTORIAL:</label>
			  		<textarea class="form-control" rows="3" name="historial"></textarea>
			  	</div>
				<input type="submit" class="btn btn-default" name="modificar" value="modificar"/>
			</form>
<?php		
	}
?> 