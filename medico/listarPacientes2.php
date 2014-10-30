<?php
	session_start();
	$dni_medico=$_SESSION['dni'];
	//incluimos el arhivo conexion.php para acceder a la bd
	include '../conexion.php';
	$conexion=conectar();
	//guardo en variables el nombre de la bd y de la tabla que voy a utilizar
	$base="gestorPacientes";
	$dbTabla="pacientes";
	//En otra variable guardo la consulta que voy a realizar
	$consulta="SELECT dni_paciente,nombre,apellidos,localidad,telefono,historial 
				FROM $dbTabla WHERE dni_medico='$dni_medico'";
	//guardo en una variable el resultado de la consulta
	$result=mysql_db_query($base, $consulta, $conexion);
	//mientras haya registros los instroduzco en una tabla
	while($registro=mysql_fetch_row($result)){
		echo "<tr>";
		foreach ($registro as $clave){
			echo "<td>",$clave,"</td>";
		}
		echo "</tr>";
	}
?>

