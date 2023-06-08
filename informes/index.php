<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
<h1>Informes</h1>
<!-- Formulario MENU con botones para ejecutar los informes -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="informe1" value="Participación por pais.">
        <input type="submit" name="informe2" value="¿Quien decide las pasantias?">
        <input type="submit" name="informe3" value="Como es la carga horaria?">
        <input type="submit" name="informe4" value="Informe 4">
        <input type="submit" name="informe5" value="Informe 5">
    </form>
    <?php
		include('../conexion.php');
		$sql="SELECT count(id) as total FROM encuesta";
			$r = mysqli_query($mysqli, $sql);

		while ($f = mysqli_fetch_assoc($r)) { 
			
					$total=$f["total"];	
		};

	?>  
        
    <?php
    // Función para generar y mostrar el informe 1
    function generarInforme1() {
    ?>    
		    <h1>¿Participación por pais?</h1>
    <!--h3>Paraguay</h3-->
    <div class="grafico">
      <canvas id="grafico"></canvas>
    </div>

<?php 
			include('../conexion.php');
			$ar=0;
			$ur=0;
			$br=0;
			$py=0;
	
			$sql="select pais, count(pais) as cantidad from encuesta Group by pais";
			$resultado = mysqli_query($mysqli, $sql);

	if (mysqli_num_rows($resultado) > 0) {
		while ($fila = mysqli_fetch_assoc($resultado)) { 
			
			if($fila["pais"]=='Paraguay')
				{
					$py=$fila["cantidad"];	
				}
			if($fila["pais"]=='Argentina')
				{
					$ar=$fila["cantidad"];	
				}
			if($fila["pais"]=='Uruguay')
				{
					$ur=$fila["cantidad"];	
				}
			if($fila["pais"]=='Brasil')
				{
					$br=$fila["Cantidad"];	
				}
		}
	} else {
		echo "No se han cargado encuestas.";
	};
/*	echo 'Py='.$py.'<br>';
	echo 'Ar='.$ar.'<br>';
	echo 'Ur='.$ur.'<br>';
	echo 'Br='.$br.'<br>'; */
		?>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      const ctx = document.getElementById('grafico');
    
      new Chart(ctx, {
        type: 'pie',
        data: {
          labels: ['Argentina', 'Uruguay', 'Paraguay', 'Brasil'],
          datasets: [{
            label: '# of Votes',
            
            data: [<?php echo $ar ?>, <?php echo $ur ?>, <?php echo $py ?>, <?php echo $br ?>],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
	  </script>
<?php
		
    }

    // Función para generar y mostrar el informe 2
    function generarInforme2() {
    ?>    
		    <h1>¿Quien decide las pasantías?</h1>
    <div class="grafico">
      <canvas id="grafico"></canvas>
    </div>

<?php 
			include('../conexion.php');
			
			// Cuenta total de registros
			$sql="SELECT count(id) as total FROM encuesta";
			$r = mysqli_query($mysqli, $sql);

		while ($f = mysqli_fetch_assoc($r)) { 
			
					$total=$f["total"];	
		};
			
			$sql="SELECT pasantias, count(pasantias) as cantidad FROM `encuesta` group by pasantias";
			$resultado = mysqli_query($mysqli, $sql);

	if (mysqli_num_rows($resultado) > 0) {
		while ($fila = mysqli_fetch_assoc($resultado)) { 
			
			if($fila["pasantias"]=='La institución')
				{
					$p1=$fila["cantidad"];	
				}
			if($fila["pasantias"]=='Cualquiera de las anteriores')
				{
					$p2=$fila["cantidad"];	
				}
			if($fila["pasantias"]=='Elijo yo')
				{
					$p3=$fila["cantidad"];	
				}
			if($fila["pasantias"]=='No tengo pasantias')
				{
					$p4=$fila["cantidad"];	
				}
		}
	} else {
		echo "No se han cargado encuestas.";
	};

	echo 'P1='.$p1.'<br>';
	echo 'P2='.$p2.'<br>';
	echo 'P3='.$p3.'<br>';
	echo 'P4='.$p4.'<br>';
		?>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      const ctx = document.getElementById('grafico');
    
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['La institución', 'Cualquiera de las anteriores', 'Elijo yo', 'No tengo pasantias'],
          datasets: [{
            label: '<?php echo $total; ?> Encuestados',
            
            data: [<?php echo $p1 ?>, <?php echo $p2 ?>, <?php echo $p3 ?>, <?php echo $p4 ?>],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
	  </script>
<?php
		
    }

    // Función para generar y mostrar el informe 3

    function generarInforme3() {
    ?>    
		    <h1>¿Como es la carga horaria??</h1>
    <div class="grafico">
      <canvas id="grafico"></canvas>
    </div>

<?php 
			include('../conexion.php');
			
			// Cuenta total de registros
			$sql="SELECT count(id) as total FROM encuesta";
			$r = mysqli_query($mysqli, $sql);

		while ($f = mysqli_fetch_assoc($r)) { 
			
					$total=$f["total"];	
		};
			
			$sql="SELECT pasantias, count(pasantias) as cantidad FROM `encuesta` group by pasantias";
			$resultado = mysqli_query($mysqli, $sql);

	if (mysqli_num_rows($resultado) > 0) {
		while ($fila = mysqli_fetch_assoc($resultado)) { 
			
			if($fila["pasantias"]=='La institución')
				{
					$p1=$fila["cantidad"];	
				}
			if($fila["pasantias"]=='Cualquiera de las anteriores')
				{
					$p2=$fila["cantidad"];	
				}
			if($fila["pasantias"]=='Elijo yo')
				{
					$p3=$fila["cantidad"];	
				}
			if($fila["pasantias"]=='No tengo pasantias')
				{
					$p4=$fila["cantidad"];	
				}
		}
	} else {
		echo "No se han cargado encuestas.";
	};

	echo 'P1='.$p1.'<br>';
	echo 'P2='.$p2.'<br>';
	echo 'P3='.$p3.'<br>';
	echo 'P4='.$p4.'<br>';
		?>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      const ctx = document.getElementById('grafico');
    
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['La institución', 'Cualquiera de las anteriores', 'Elijo yo', 'No tengo pasantias'],
          datasets: [{
            label: '<?php echo $total; ?> Encuestados',
            
            data: [<?php echo $p1 ?>, <?php echo $p2 ?>, <?php echo $p3 ?>, <?php echo $p4 ?>],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
	  </script>
<?php
		
    }

    // Función para generar y mostrar el informe 4
    function generarInforme4() {
        echo "<h2>Informe 4</h2>";
        // Lógica y consulta SQL para generar el informe 4
        // ...
        echo "<p>Este es el contenido del informe 4.</p>";
    }

    // Función para generar y mostrar el informe 5
    function generarInforme5() {
        echo "<h2>Informe 5</h2>";
        // Lógica y consulta SQL para generar el informe 5
        // ...
        echo "<p>Este es el contenido del informe 5.</p>";
    }

    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar qué botón se ha presionado y ejecutar la función correspondiente
        if (isset($_POST["informe1"])) {
            generarInforme1();
        } elseif (isset($_POST["informe2"])) {
            generarInforme2();
        } elseif (isset($_POST["informe3"])) {
            generarInforme3();
        } elseif (isset($_POST["informe4"])) {
            generarInforme4();
        } elseif (isset($_POST["informe5"])) {
            generarInforme5();
        }
    }
    ?>

</body>
</html>
