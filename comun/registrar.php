<?php
if(!empty($_POST['dni'])){
	//incluimos el archivo conexion.php para utilizar sus funciones
	include '../conexion.php';
	$conexion=conectar();
	selecDb();
	//guardo en variables el nombre de la bd y de la tabla que voy a utilizar
	$dbTabla="usuarios";
	//guardo en variables los datos que recojo del formulario
	$dni=$_POST['dni'];
	$nombre=$_POST['nombre'];
	$apellidos=$_POST['apellidos'];
	$localidad=$_POST['localidad'];
	$telefono=$_POST['telefono'];
	$password=$_POST['password'];
	$tipo=$_POST['tipoPersona'];
	//guardo en $consulta la consulta que voy a ejecutar
	$consulta="INSERT INTO $dbTabla (dni,nombre,apellidos,password,localidad,telefono,tipo) 
			VALUES ('$dni','$nombre','$apellidos','$password','$localidad','$telefono','$tipo')";
	//$result = mysql_query($consulta) or die(mysql_error());
	//ejecutamos la consulta
	if(mysql_query($consulta,$conexion)){
		//si se ejecuta correctamente
		header ("location: ../index.php");
	}else{
		//si no se ejecuta correctamente
		print "<h3>Error en el registro</h3> <br>";
	}
}else{
	print "<h3>DNI Obligatorio</h3>";
}

//cerramos la conexion a la base de datos
mysql_close();