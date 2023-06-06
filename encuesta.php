
<?php

include('conexion.php');

$option = null;
$pais = 'Paraguay';

# $pais = $_REQUEST['pais'];

if($pais == 'Paraguay' or $pais == 'Argentina' or $pais == 'Uruguay')
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> 
    <title>Document</title>
    

</head>
<body>

<h1>Encuesta hackathon</h1>
<h2>Generales</h2>
<section>seccion 1</section>
<form action="registrare.php" method="POST">

<label for="">Pais</label>
<input type="text" name="pais" value="<?php echo $pais; ?>">
<br>

<label for="">Edad</label>
<input type="number" name="edad" min="12" max="99">
<br>

<p>Genero</p>
<input type="radio" name="genero" value="Masculino"> Masculino
<input type="radio" name="genero" value="Femenino"> Femenino
<input type="radio" name="genero" value="Otro"> Otro


<div class="select">
   <select name="format" id="format">
      <option selected disabled>Pais</option>
      <option value="pdf">Argewtina</option>
      <option value="txt">Brasil</option>
      <option value="epub"></option>
      <option value="fb2">fb2</option>
      <option value="mobi">mobi</option>
   </select>
</div>
</form>

</body>
</html>
    //encuesta en español
<?php 
}

else
{
    //encuesta en portugues
}
?>