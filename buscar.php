<?php
include("db.php");

    $salida = "";

    $query = "SELECT * FROM ofertas_trabajo WHERE nombre_vacante  NOT LIKE '' ORDER By id LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $connection->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM ofertas_trabajo WHERE nombre_vacante  LIKE '%$q%' OR nombre_coordinador LIKE '%$q%' 
																	 OR nombre_empresa LIKE '%$q%' OR skills_necesitadas LIKE '$q' 
																	 OR skills_desarrollar LIKE '%$q%'";
    }

    $resultado = $connection->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
						<td>Vacante</td>
    					<td>Coordinador de proyecto</td>
    					<td>Nombre de la empresa</td>
    					<td>Habilidades necesarias</td>
    					<td>Habilidades a desarrollar</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['nombre_vacante']."</td>
    					<td>".$fila['nombre_coordinador']."</td>
    					<td>".$fila['nombre_empresa']."</td>
    					<td>".$fila['skills_necesitadas']."</td>
    					<td>".$fila['skills_desarrollar']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="Sin resultados";
    }


    echo $salida;

    $connection->close();



?>