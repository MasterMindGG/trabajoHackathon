<?php 

include('conexion.php');
$sql = "SELECT * FROM encuesta";

$resultado = mysqli_query($mysqli, $sql);

	if (mysqli_num_rows($resultado) > 0) {
        $n = 1;
        echo "<table>";
		echo "<tr>
        <th>#</th>
        <th>De que pais sos?</th>
        <th>¿Que edad tenes?</th>
        <th>¿Cual es tu genero?</th>
        <th>¿De que departamento/provincia sos?</th>
        <th>E-mail</th>
        <th>¿En que bachiller te encontras?</th>
        <th>¿Quien decide las pasantias?</th>
        <th>¿Como es la carga horaria?</th>
        <th>¿Que opinas de los contenidos que estas estudiando?</th>
        <th>¿Cómo calificarias el funcionamiento del centro de estudiantes?</th>
        <th>¿Cómo calificarias la relacion entre alumnos?</th>
        <th>¿Cómo calificarias la relacion con los docentes?</th>
        <th>¿Haz sufrido de bullying?</th>
        <th>¿En que estado esta la institucion/edificio?</th>
        <th>¿Qué tal es el funcionamiento del wifi?</th>
        <th>¿Tienen suficiente equipamiento para todos los alumnos?</th>
        <th>¿Cuál es el estado del equipamiento tecnico?</th>
        <th>¿Hay estufas en buen estado?</th>
        <th>¿Hay aires acondicionados en buen estado?</th>
        <th>¿Hay suficientes muebles para los alumnos en tu aula?</th>
        <th>¿Hay algun espacio designado para las materias específicas?</th>
        </tr>";

		while ($fila = mysqli_fetch_assoc($resultado)) { 
			echo "<tr>";
			echo "<td>" . $n . "</td>";
			echo "<td>" . $fila["pais"] . "</td>";
            echo "<td>" . $fila["edad"] . "</td>";
            echo "<td>" . $fila["genero"] . "</td>";
            echo "<td>" . $fila["departamento"] . "</td>";
            echo "<td>" . $fila["email"] . "</td>";
            echo "<td>" . $fila["bachiller"] . "</td>";
            echo "<td>" . $fila["pasantias"] . "</td>";
            echo "<td>" . $fila["cargahr"] . "</td>";
            echo "<td>" . $fila["contenidos"] . "</td>";
            echo "<td>" . $fila["funcioncentro"] . "</td>";
            echo "<td>" . $fila["relalumnos"] . "</td>";
            echo "<td>" . $fila["reldocentes"] . "</td>";
            echo "<td>" . $fila["bullying"] . "</td>";
            echo "<td>" . $fila["psicologo"] . "</td>";
            echo "<td>" . $fila["estadoinstitucion"] . "</td>";
            echo "<td>" . $fila["wifi"] . "</td>";
            echo "<td>" . $fila["cantequipamientos"] . "</td>";
            echo "<td>" . $fila["calequipamientos"] . "</td>";
            echo "<td>" . $fila["ace"] . "</td>";
            echo "<td>" . $fila["muebles"] . "</td>";
            echo "<td>" . $fila["matespecificas"] . "</td>";
			echo "</tr>";
            $n++;
		}

		echo "</table>";
	} else {
		echo "No hay usuarios registrados.";
	}
?>

