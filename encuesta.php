
<?php

include('conexion.php');

$option = null;
$pais = 'Paraguay';
# $pais = $_REQUEST['pais'];
if($pais == 'Paraguay' or $pais == 'Argentina' or $pais == 'Uruguay')
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> 
    <title>Document</title>
    

</head>
<body>

<h1>Choose a book format</h1>
<div class="select">
   <select name="format" id="format">
      <option selected disabled>Choose a book format</option>
      <option value="pdf">PDF</option>
      <option value="txt">txt</option>
      <option value="epub">ePub</option>
      <option value="fb2">fb2</option>
      <option value="mobi">mobi</option>
   </select>
</div>

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