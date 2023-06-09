<?php
echo '<style>body { background-color: rgb(102, 102, 192);}</style>';
include('conexion.php');

$pais = $_REQUEST['pais'];
$edad = $_REQUEST['edad'];
$genero = $_REQUEST['genero'];
$departamento = $_REQUEST['departamento'];
$email = $_REQUEST['email'];

$bachiller = $_REQUEST['bachiller'];
$pasantias = $_REQUEST['pasantias'];
$cargahr = $_REQUEST['cargahr'];
$contenidos = $_REQUEST['contenidos'];

$funcioncentro = $_REQUEST['funcioncentro'];
$relalumnos = $_REQUEST['relalumnos'];
$reldocentes = $_REQUEST['reldocentes'];
$bullying = $_REQUEST['bullying'];
$psicologo = $_REQUEST['psicologo'];

$estadoinstitucional = $_REQUEST['estadoinstitucional'];
$wifi = $_REQUEST['wifi'];
$cantequipamientos = $_REQUEST['cantequipamientos'];
$calequipamientos = $_REQUEST['calequipamientos'];
$ace = $_REQUEST['ace'];
$muebles = $_REQUEST['muebles'];
$matespecificas = $_REQUEST['matespecificas'];



// prueba de recepcion de datos 
/*
echo'<h1>Prueba de rececpcion de datos </h1> <br> ';                    


echo '<br>'.$pais ;
echo '<br>'.$edad ;
echo '<br>'.$genero;
echo '<br>'.$departamento;
echo '<br>'.$email;

echo '<br>'.$bachiller;
echo '<br>'.$pasantias;
echo '<br>'.$cargahr;
echo '<br>'.$contenidos;

echo '<br>'.$funcioncentro;
echo '<br>'.$relalumnos;
echo '<br>'.$reldocentes;
echo '<br>'.$bullying;
echo '<br>'.$psicologo;

echo '<br>'.$estadoinstitucional;
echo '<br>'.$wifi;
echo '<br>'.$cantequipamientos;
echo '<br>'.$calequipamientos;
echo '<br>'.$ace;
echo '<br>'.$muebles;
echo '<br>'.$matespecificas;
*/

$sql="INSERT INTO `encuesta`(`pais`, `edad`, `genero`, `departamento`, `email`, `bachiller`, `pasantias`, `cargahr`, `contenidos`, `funcioncentro`, `relalumnos`, `reldocentes`, `bullying`, `psicologo`, `estadoinstitucion`, `wifi`, `cantequipamientos`, `calequipamientos`, `ace`, `muebles`, `matespecificas`)
 VALUES ( '$pais',$edad ,'$genero','$departamento','$email','$bachiller' ,'$pasantias' ,'$cargahr' ,'$contenidos' ,'$funcioncentro' ,'$relalumnos' ,'$reldocentes' ,'$bullying' ,'$psicologo' ,'$estadoinstitucional' ,'$wifi' ,'$cantequipamientos' ,'$calequipamientos' ,'$ace' ,'$muebles' ,'$matespecificas')";
//echo $sql;
if($mysqli->query($sql)===TRUE){
    echo ' <center><h1>Registro cargado</h1>';
    header("refresh:1;url=index.php");
};
?>