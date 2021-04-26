<?php
$dbhost = 'localhost';
$dbname = 'sistema_practicum';
$dbuser = 'root';
$dbpass = '';
$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
      if($connection->connect_error){
        die("Conexión fallida: ".$connection->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM datos_personales WHERE nombre NOT LIKE '' ORDER By id LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $connection->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM datos_personales WHERE id LIKE '%$q%' OR nombre LIKE '%$q%' OR apellido LIKE '%$q%' OR email LIKE '%$q%' OR telefono LIKE '$q' ";
    }

    $resultado = $connection->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>ID</td>
    					<td>Nombre</td>
    					<td>Apellido</td>
    					<td>Correo</td>
    					<td>Telefono</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['id']."</td>
    					<td>".$fila['nombre']."</td>
    					<td>".$fila['apellido']."</td>
    					<td>".$fila['email']."</td>
    					<td>".$fila['telefono']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $connection->close();



?>