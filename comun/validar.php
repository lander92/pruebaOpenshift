<?php
/*
**establecemos conexion con el servidor.
**nombre del servidor: localhost.
**Nombre de usuario: root.
**Contraseña de usuario: 
**Si la conexion fallara mandamos un msj 'ha fallado la conexion'**/
mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());

/*Luego hacemos la conexión a la base de datos. 
**De igual manera mandamos un msj si hay algun error*/
mysql_select_db('gestorPacientes')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
 
//guardamos el dni y password introducidos en variables
$dni = $_POST["dni"];   
$password = $_POST["password"];

//guardamos en una variable la consulta a realizar
$result = mysql_query("SELECT * FROM usuarios WHERE dni = '$dni'");

//Validamos si el dni existe en la base de datos o es correcto
if($row = mysql_fetch_array($result)){     
//Si el dni es correcto ahora validamos su contraseña
	if($row["password"] == $password){
	 	//si la contraseña es correcta
	 	//miramos el tipo
	 	switch ($row["tipo"]){
	 		//en el caso de que sea medico
	 		case "medico":
	 			//Creamos sesión
		 		session_start();  
		  		//Almacenamos el dni y tipo en una variable de sesión
		  		$_SESSION['dni'] = $dni;  
		  		$_SESSION['tipo']=$tipo; 
		  		//Redireccionamos a la pagina: indexMedico.php
		 		 header("Location: ../medico/indexMedico.php");
		 		 break;
	
	 		case "paciente":
	 			//Creamos sesión
		 		session_start();  
		  		//Almacenamos el dni y tipo en una variable de sesión
		  		$_SESSION['dni'] = $dni; 
		  		$_SESSION['tipo']=$tipo; 
		  		//Redireccionamos a la pagina: indexPacientes.php
		 		 header("Location: ../paciente/indexPacientes.php");  
		 		 break;
	 	}
	 }else{
  	//En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a index.php
  ?>
   <script languaje="javascript">
    alert("Contraseña Incorrecta");
    location.href = "index.php";
   </script>
  <?php    
	}
}else{
 //en caso que el nombre de administrador es incorrecto enviamos un msj y redireccionamos a login.php
?>
 <script languaje="javascript">
  alert("El nombre de usuario es incorrecto!");
  location.href = "index.php";
 </script>
<?php           
}

//cerramos la conexion a la base de datos
mysql_close();
?>