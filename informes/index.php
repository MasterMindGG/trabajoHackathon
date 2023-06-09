<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="informe.css">
    <title>Document</title>
</head>

<body>
  <center>
<?php 
session_start();

if(isset($_REQUEST['menu'])){
    $menu=$_REQUEST['menu'];
    $_SESSION['men']=$_REQUEST['menu'];
}else{
  $menu=$_SESSION['men'];
}
$p1 = 0;
$p2 = 0;
$p3 = 0;
$p4 = 0;

?>
<!-- ----ENCABEZADO COMIENZO----- -->

<div class="logo">

    <div class="logo_circulo"></div>
    <a href="../index.php"><img class="img_logo" src="../img/logo.png"></a>
</div>

<!-- --- ENCABEZADO FIN--- -->

<h1 style="color:white; margin-top:20px;">INFORMES</h1>
<!-- Formulario MENU con botones para ejecutar los informes -->

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
       ?>">
        <?php 
        if ($menu==1) {?>
        <H1 style="color:white; margin-top:20px;font-size:30px;">General</H1>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe1" value="Participación por pais."><br>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px;margin-top:20px;" type="submit" name="informe1_1" value="Participación por genero."><br>
        <?php }

         if ($menu==2) { ?>
        <H1 style="color:white; margin-top:20px;font-size:30px;">ACADEMICO</H1>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe2" value="Quien decide las pasantias"> <br>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe3" value="Como es la carga horaria"><br>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe4" value="Opiniones de materias"><br>
        <?php }

         if ($menu==3) { ?>
       <H1 style="color:white; margin-top:20px;font-size:30px;">CONVICENCIA</H1>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe5" value="Centro de estudiantes"><br>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe6" value="Calificacion de alumnos"><br>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe7" value="Calificacion de docentes"><br>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe8" value="Casos de Bullying?"><br>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe9" value="Disponibilidad de un psicologo?"><br>
        <?php }

         if ($menu==4) { ?>
        <H1 style="color:white; margin-top:20px;font-size:30px;">INFRAESTRUCTURA</H1>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe10" value="Estado de infraestructura"><br>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe11" value="Calidad wifi?"><br>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe12" value="Suficiencia de equipos"><br>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe13" value="Estado de equipos"><br>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe14" value="Equipo de climatizacion"><br>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe15" value="Suficiencia de muebles"><br>
        <input style="color:white; border: none;border-radius:10px; background: linear-gradient(45deg, #925d82, #9d6cc9, #605e81);widht:70px;height:30px; margin-top:20px;" type="submit" name="informe16" value="Laboratorios"><br>
        <?php  }?>
       

       
        
        

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
  function generarInforme1() {
  ?>    
      <h1 style="color:white;">¿Participación por pais?</h1>
  <!--h3>Paraguay</h3-->
  <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>

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
  function generarInforme1_1() {
  ?>    
      <h1 style="color:white;">¿Participación por genero?</h1>
  <!--h3>Paraguay</h3-->

  <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>
<?php 
    include('../conexion.php');
    $p1=0;
    $p2=0;
    $p3=0;
    
   
    $sql="select genero, count(genero) as cantidad from encuesta Group by genero";
    $resultado = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($resultado) > 0) {
  while ($fila = mysqli_fetch_assoc($resultado)) { 
    
    if($fila["genero"]=='Masculino')
      {
        $p1=$fila["cantidad"];	
      }
    if($fila["genero"]=='Femenino')
      {
        $p2=$fila["cantidad"];	
      }
    if($fila["genero"]=='Otro')
      {
        $p3=$fila["cantidad"];	
      }
 
  }
} else {
  echo "No se han cargado encuestas.";
};
  ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx = document.getElementById('grafico');
  
    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Masculino','Femenino', 'Otro'],
        datasets: [{
          label: '# of Votes',
          
          data: [<?php echo $p1 ?>, <?php echo $p2 ?>, <?php echo $p3 ?>],
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
  function generarInforme2() {
  ?>    
      <h1 style="color:white;">¿Quien decide las pasantías?</h1>
      <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>

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
  function generarinforme3() {
    ?>    
        <h1 style="color:white;">¿Como es la carga horaria?</h1>
    <!--h3>Paraguay</h3-->
    <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>

<?php 
      include('../conexion.php');
      $p1=0;
      $p2=0;
      $p3=0;
  
      $sql="SELECT `cargahr`, COUNT(`cargahr`) as cantidad FROM `encuesta` GROUP by `cargahr`";
      $resultado = mysqli_query($mysqli, $sql);

  if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) { 
      
      if($fila["cargahr"]=='Excesivo')
        {
          $p1=$fila["cantidad"];	
        }
      if($fila["cargahr"]=='Insuficiente')
        {
          $p2=$fila["cantidad"];	
        }
      if($fila["cargahr"]=='Suficiente')
        {
          $p3=$fila["cantidad"];	
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
          labels: ['Excesivo', 'Insuficiente', 'Suficiente'],
          datasets: [{
            label: '# of Votes',
            
            data: [<?php echo $p1 ?>, <?php echo $p2 ?>, <?php echo $p3 ?>],
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
  function generarInforme4() {
  ?>    
      <h1 style="color:white;">¿Que opinas de los contenidos que estas estudiando?</h1>
      <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>

<?php 
    include('../conexion.php');
    
    // Cuenta total de registros
    $sql="SELECT count(id) as total FROM encuesta";
    $r = mysqli_query($mysqli, $sql);

  while ($f = mysqli_fetch_assoc($r)) { 
    
        $total=$f["total"];	
  };
    
    $sql="SELECT contenidos , count(contenidos) as cantidad FROM `encuesta` group by contenidos";
    $resultado = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($resultado) > 0) {
  while ($fila = mysqli_fetch_assoc($resultado)) { 
    
    if($fila["contenidos"]=='Desactualizado')
      {
        $p1=$fila["cantidad"];	
      }
    if($fila["contenidos"]=='Bueno')
      {
        $p2=$fila["cantidad"];	
      }
    if($fila["contenidos"]=='Malo')
      {
        $p3=$fila["cantidad"];	
      }
  
  }
} else {
  echo "No se han cargado encuestas.";
};

/*echo 'P1='.$p1.'<br>';
echo 'P2='.$p2.'<br>';
echo 'P3='.$p3.'<br>';*/
  ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx = document.getElementById('grafico');
  
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Desactualizado', 'Bueno', 'Malo'],
        datasets: [{
          label: '<?php echo $total; ?> Encuestados',
          
          data: [<?php echo $p1 ?>, <?php echo $p2 ?>, <?php echo $p3 ?>],
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
  function generarInforme5() {
    ?>    
        <h1 style="color:white;">¿Como calificarias el funcionamiento del centro de estudiantes?</h1>
        <table widht= "50%">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>

<?php 
      include('../conexion.php');
      
      // Cuenta total de registros
      $sql="SELECT count(id) as total FROM encuesta";
      $r = mysqli_query($mysqli, $sql);

    while ($f = mysqli_fetch_assoc($r)) { 
      
          $total=$f["total"];	
    };
      
      $sql="SELECT `funcioncentro`, count(funcioncentro) as cantidad FROM `encuesta` group by funcioncentro";
      $resultado = mysqli_query($mysqli, $sql);

  if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) { 
      
        if($fila["funcioncentro"]=='Bueno')
        {
          $p1=$fila["cantidad"];	
        }
      if($fila["funcioncentro"]=='Excelente')
        {
          $p2=$fila["cantidad"];	
        }
    
    }
  } else {
    echo "No se han cargado encuestas.";
  };

  /*echo 'P1='.$p1.'<br>';
  echo 'P2='.$p2.'<br>';
  echo 'P3='.$p3.'<br>';*/
    ?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      const ctx = document.getElementById('grafico');
    
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Bueno', 'Excelente'],
          datasets: [{
            label: '<?php echo $total; ?> Encuestados',
            
            data: [<?php echo $p1 ?>, <?php echo $p2 ?>],
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
  function generarInforme6() {
    ?>    
        <h1 style="color:white;">Como calificarias la relacion entre alumnos?</h1>
        <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>

<?php 
      include('../conexion.php');
      
      // Cuenta total de registros
      $sql="SELECT count(id) as total FROM encuesta";
      $r = mysqli_query($mysqli, $sql);

    while ($f = mysqli_fetch_assoc($r)) { 
      
          $total=$f["total"];	
    };
      
      $sql="SELECT relalumnos, count(relalumnos) as cantidad FROM encuesta GROUP BY relalumnos";
      $resultado = mysqli_query($mysqli, $sql);

  if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) { 
      
        if($fila["relalumnos"]=='Excelente')
        {
          $p1=$fila["cantidad"];	
        }
      if($fila["relalumnos"]=='Bueno')
        {
          $p2=$fila["cantidad"];	
        }
        if($fila["relalumnos"]=='Malo')
        {
          $p3=$fila["cantidad"];	
        }
    
    }
  } else {
    echo "No se han cargado encuestas.";
  };

    ?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      const ctx = document.getElementById('grafico');
    
      new Chart(ctx, {
        type: 'pie',
        data: {
          labels: ['Excelente', 'Bueno', 'Malo'],
          datasets: [{
            label: '<?php echo $total; ?> Encuestados',
            
            data: [<?php echo $p1 ?>, <?php echo $p2 ?>, <?php echo $p3 ?>],
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
  function generarInforme7() {
    ?>    
        <h1 style="color:white;">Como calificarias la relacion con los docentes?</h1>
    <!--h3>Paraguay</h3-->
    <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>
    
<?php 
      include('../conexion.php');
      $ar=0;
      $ur=0;
      $br=0;
      $py=0;
  
      $sql="select reldocentes, count(reldocentes) as cantidad from encuesta Group by reldocentes";
      $resultado = mysqli_query($mysqli, $sql);

  if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) { 
      
      if($fila["reldocentes"]=='Bueno')
        {
          $py=$fila["cantidad"];	
        }
      if($fila["reldocentes"]=='Malo')
        {
          $ar=$fila["cantidad"];	
        }
      if($fila["reldocentes"]=='Excelente')
        {
          $ur=$fila["cantidad"];	
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
          labels: ['Excelente', 'Bueno', 'Malo'],
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
  function generarInforme8() {
    ?>    
        <h1 style="color:white;">Haz sufrido Bullying?</h1>
    <!--h3>Paraguay</h3-->
    <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>
    
<?php 
      include('../conexion.php');
      $ar=0;
      $ur=0;
      $br=0;
      $py=0;
  
      $sql="select bullying, count(bullying) as cantidad from encuesta Group by bullying";
      $resultado = mysqli_query($mysqli, $sql);

  if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) { 
      
      if($fila["bullying"]=='Si')
        {
          $py=$fila["cantidad"];	
        }
      if($fila["bullying"]=='No')
        {
          $ar=$fila["cantidad"];	
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
        type: 'bar',
        data: {
          labels: ['Si', 'No'],
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
  function generarInforme9() {
    ?>    
        <h1 style="color:white;">Tienen apoyo psicologico en tu institucion?</h1>
    <!--h3>Paraguay</h3-->
    <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>
    
<?php 
      include('../conexion.php');
      $ar=0;
      $ur=0;
      $br=0;
      $py=0;
  
      $sql="select psicologo, count(psicologo) as cantidad from encuesta Group by psicologo";
      $resultado = mysqli_query($mysqli, $sql);

  if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) { 
      
      if($fila["psicologo"]=='Si')
        {
          $py=$fila["cantidad"];	
        }
      if($fila["psicologo"]=='No')
        {
          $ar=$fila["cantidad"];	
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
          labels: ['Si', 'No'],
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
  function generarInforme10() {
  ?>    
      <h1 style="color:white;">En que estado esta la institucion/edificio</h1>
  <!--h3>Paraguay</h3-->
  <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>
  
<?php 
    include('../conexion.php');
    $ar=0;
    $ur=0;
    $br=0;
    $py=0;

    $sql="select estadoinstitucion, count(estadoinstitucion) as cantidad from encuesta Group by estadoinstitucion";
    $resultado = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($resultado) > 0) {
  while ($fila = mysqli_fetch_assoc($resultado)) { 
    
    if($fila["estadoinstitucion"]=='Descuidado')
      {
        $py=$fila["cantidad"];	
      }
    if($fila["estadoinstitucion"]=='Regular')
      {
        $ar=$fila["cantidad"];	
      }
      if($fila["estadoinstitucion"]=='Muy bien cuidado')
      {
        $py=$fila["cantidad"];	
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
        labels: ['Descuidado', 'Regular','Muy bien cuidado'],
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
  function generarInforme11() {
    ?>    
        <h1 style="color:white;">Que tal es la calidad del internet/wifi?</h1>
    <!--h3>Paraguay</h3-->
    <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>
    
<?php 
      include('../conexion.php');
      $ar=0;
      $ur=0;
      $br=0;
      $py=0;
  
      $sql="select wifi, count(wifi) as cantidad from encuesta Group by wifi";
      $resultado = mysqli_query($mysqli, $sql);

  if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) { 
      
      if($fila["wifi"]=='Excelente')
        {
          $py=$fila["cantidad"];	
        }
      if($fila["wifi"]=='Bueno')
        {
          $ar=$fila["cantidad"];	
        }
        if($fila["wifi"]=='Malo')
        {
          $py=$fila["cantidad"];	
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
          labels: ['Excelente', 'Bueno', 'Malo'],
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
  function generarInforme12() {
    ?>    
        <h1 style="color:white;">Tienen suficiente equipamientos para todos los alumnos?</h1>
        <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>

<?php 
      include('../conexion.php');
      
      // Cuenta total de registros
      $sql="SELECT count(id) as total FROM encuesta";
      $r = mysqli_query($mysqli, $sql);

    while ($f = mysqli_fetch_assoc($r)) { 
      
          $total=$f["total"];	
    };
      
      $sql="SELECT cantequipamientos, COUNT(cantequipamientos) AS cantidad FROM encuesta GROUP BY cantequipamientos";
      $resultado = mysqli_query($mysqli, $sql);

  if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) { 
      
      if($fila["cantequipamientos"]=='Pocos')
        {
          $p1=$fila["cantidad"];	
        }
      if($fila["cantequipamientos"]=='Suficientes')
        {
          $p2=$fila["cantidad"];	
        }
      if($fila["cantequipamientos"]=='Muchos')
      {
        $p3=$fila["cantidad"];	
      }
      if($fila["cantequipamientos"]=='No tengo')
      {
        $p4=$fila["cantidad"];	
      }

    }
  } else {
    echo "No se han cargado encuestas.";
  };

  // echo $p1;
 // echo $p2;
    ?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      const ctx = document.getElementById('grafico');
    
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Pocos', 'Suficiente', 'Muchos', 'No tengo'],
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
  function generarInforme13() {
  ?>    
      <h1 style="color:white;">Cual es el estado de los equipamientos tecnicos?</h1>
      <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>

<?php 
    include('../conexion.php');
    
    // Cuenta total de registros
    $sql="SELECT count(id) as total FROM encuesta";
    $r = mysqli_query($mysqli, $sql);

  while ($f = mysqli_fetch_assoc($r)) { 
    
        $total=$f["total"];	
  };
    
    $sql="SELECT calequipamientos, COUNT(calequipamientos) AS cantidad FROM encuesta GROUP BY calequipamientos";
    $resultado = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($resultado) > 0) {
  while ($fila = mysqli_fetch_assoc($resultado)) { 
    
    if($fila["calequipamientos"]=='Obsoletos')
      {
        $p1=$fila["cantidad"];	
      }
    if($fila["calequipamientos"]=='Descuidados')
      {
        $p2=$fila["cantidad"];	
      }
    if($fila["calequipamientos"]=='Bien cuidados')
      {
        $p3=$fila["cantidad"];	
      }
    if($fila["calequipamientos"]=='No tengo equipamiento')
      {
        $p4=$fila["cantidad"];	
      }
  }
} else {
  echo "No se han cargado encuestas.";
};

  ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx = document.getElementById('grafico');
  
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Obsoletos', 'Descuidados', 'Bien cuidados', 'No tengo equipamientos'],
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
  function generarInforme14() {
    ?>    
        <h1 style="color:white;">Hay buenos equipos de climatizacion?</h1>
        <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>

<?php 
      include('../conexion.php');
      
      // Cuenta total de registros
      $sql="SELECT count(id) as total FROM encuesta";
      $r = mysqli_query($mysqli, $sql);

    while ($f = mysqli_fetch_assoc($r)) { 
      
          $total=$f["total"];	
    };
      
      $sql="SELECT ace, COUNT(ace) AS cantidad FROM encuesta GROUP BY ace";
      $resultado = mysqli_query($mysqli, $sql);

  if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) { 
      
      if($fila["ace"]=='Si')
        {
          $p1=$fila["cantidad"];	
        }
      if($fila["ace"]=='No')
        {
          $p2=$fila["cantidad"];	
        }
      if($fila["ace"]=='No hay')
        {
          $p3=$fila["cantidad"];	
        }

    }
  } else {
    echo "No se han cargado encuestas.";
  };

    ?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      const ctx = document.getElementById('grafico');
    
      new Chart(ctx, {
        type: 'pie',
        data: {
          labels: ['Si', 'No', 'No hay'],
          datasets: [{
            label: '<?php echo $total; ?> Encuestados',
            
            data: [<?php echo $p1 ?>, <?php echo $p2 ?>, <?php echo $p3 ?>],
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
  function generarInforme15() {
    ?>    
        <h1 style="color:white;">Hay suficientes muebles para los alumnos de tu aula?</h1>
        <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>

<?php 
      include('../conexion.php');
      
      // Cuenta total de registros
      $sql="SELECT count(id) as total FROM encuesta";
      $r = mysqli_query($mysqli, $sql);

    while ($f = mysqli_fetch_assoc($r)) { 
      
          $total=$f["total"];	
    };
      
      $sql="SELECT muebles, COUNT(muebles) AS cantidad FROM encuesta GROUP BY muebles";
      $resultado = mysqli_query($mysqli, $sql);

  if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) { 
      
      if($fila["muebles"]=='Si')
        {
          $p1=$fila["cantidad"];	
        }
      if($fila["muebles"]=='No')
        {
          $p2=$fila["cantidad"];	
        }
    }
  } else {
    echo "No se han cargado encuestas.";
  };

    ?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      const ctx = document.getElementById('grafico');
    
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Si', 'No'],
          datasets: [{
            label: '<?php echo $total; ?> Encuestados',
            
            data: [<?php echo $p1 ?>, <?php echo $p2 ?>],
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
  function generarInforme16() {
    ?>    
        <h1 style="color:white;">Hay algun espacio designado para las materias especificas?</h1>
        <table widht= "300px">
    <tr>
      <td>
  <div class="grafico">
    <canvas id="grafico"></canvas>
  </div>
  </td>
  </tr>
  </table>

<?php 
      include('../conexion.php');
      
      // Cuenta total de registros
      $sql="SELECT count(id) as total FROM encuesta";
      $r = mysqli_query($mysqli, $sql);

    while ($f = mysqli_fetch_assoc($r)) { 
      
          $total=$f["total"];	
    };
      
      $sql="SELECT matespecificas, COUNT(matespecificas) AS cantidad FROM encuesta GROUP BY matespecificas";
      $resultado = mysqli_query($mysqli, $sql);

  if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) { 
      
      if($fila["matespecificas"]=='Si')
        {
          $p1=$fila["cantidad"];	
        }
      if($fila["matespecificas"]=='No')
        {
          $p2=$fila["cantidad"];	
        }
    }
  } else {
    echo "No se han cargado encuestas.";
  };

    ?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      const ctx = document.getElementById('grafico');
    
      new Chart(ctx, {
        type: 'pie',
        data: {
          labels: ['Si', 'No'],
          datasets: [{
            label: '<?php echo $total; ?> Encuestados',
            
            data: [<?php echo $p1 ?>, <?php echo $p2 ?>],
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

    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar qué botón se ha presionado y ejecutar la función correspondiente
        if (isset($_POST["informe1"])) {
          generarInforme1();
        } 
        elseif (isset($_POST["informe1_1"])) {
          generarInforme1_1();
        } 
        elseif (isset($_POST["informe2"])) {
          generarInforme2();
        } 
        elseif (isset($_POST["informe3"])) {
          generarInforme3();
        } 
        elseif (isset($_POST["informe4"])) {
          generarInforme4();
        } 
        elseif (isset($_POST["informe5"])) {
          generarInforme5();
        }
        elseif (isset($_POST["informe6"])) {
          generarInforme6();
        }
        elseif (isset($_POST["informe7"])) {
          generarInforme7();
        }
        elseif (isset($_POST["informe8"])) {
          generarInforme8();
        }
        elseif (isset($_POST["informe9"])) {
          generarInforme9();
        }
        elseif (isset($_POST["informe10"])) {
          generarInforme10();
        }
        elseif (isset($_POST["informe11"])) {
          generarInforme11();
        }
        elseif (isset($_POST["informe12"])) {
          generarInforme12();
        }
        elseif (isset($_POST["informe13"])) {
          generarInforme13();
        }
        elseif (isset($_POST["informe14"])) {
          generarInforme14();
        }
        elseif (isset($_POST["informe15"])) {
          generarInforme15();
        }
        elseif (isset($_POST["informe16"])) {
          generarInforme16();
        }
    }
    
    ?>

    
  </center>
</body>
</html>
