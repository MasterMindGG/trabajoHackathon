
<?php

include('conexion.php');

$pais = $_REQUEST['pais'];
echo $pais;
if(($pais == 'Paraguay') or ($pais == 'Argentina') or ($pais == 'Uruguay'))
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="stylesheet" href="styles.css">  -->
    <title>Document</title>
    

</head>
<body>

<h1>Encuesta hackathon</h1>
<h2>Generales</h2>
<form action="registrare.php" method="POST">

<label for="">Pais</label><br>
<input type="text" name="pais" value="<?php echo $pais; ?>">
<br>

<label for="">Edad</label><br>
<input type="number" name="edad" min="12" max="99">
<br>

<label for="">Genero</label><br>
<input type="radio" name="genero" value="Masculino"> Masculino
<input type="radio" name="genero" value="Femenino"> Femenino
<input type="radio" name="genero" value="Otro"> Otro
<br>
<label for="">Departamentos/Provincias</label><br>

<select name="departamento" class="form">
    <?php if($pais=='Brasil'){ ?>
   <option value="Acre">Acre</option>
<option value="Alagoas">Alagoas</option>
<option value="Amapá">Amapá</option>
<option value="Amazonas">Amazonas</option>
<option value="Bahía">Bahía</option>
<option value="Ceará">Ceará</option>
<option value="DistritoFederal(Brasilia)">DistritoFederal(Brasilia)</option>
<option value="EspíritoSanto">EspíritoSanto</option>
<option value="Goiás">Goiás</option>
<option value="Maranhão">Maranhão</option>
<option value="MatoGrosso">MatoGrosso</option>
<option value="MatoGrossodoSul">MatoGrossodoSul</option>
<option value="MinasGerais">MinasGerais</option>
<option value="Pará">Pará</option>
<option value="Paraíba">Paraíba</option>
<option value="Paraná">Paraná</option>
<option value="Pernambuco">Pernambuco</option>
<option value="Piauí">Piauí</option>
<option value="RíodeJaneiro">RíodeJaneiro</option>
<option value="RíoGrandedoNorte">RíoGrandedoNorte</option>
<option value="RíoGrandedoSul">RíoGrandedoSul</option>
<option value="Rondônia">Rondônia</option>
<option value="Roraima">Roraima</option>
<option value="SantaCatarina">SantaCatarina</option>
<option value="SãoPaulo">SãoPaulo</option>
<option value="Sergipe">Sergipe</option>
<option value="Tocantins">Tocantins</option>
    
    <?php }; 
    if($pais=='Paraguay'){ ?>
<option value="AltoParaguay">Alto Paraguay</option>
<option value="AltoParaná">Alto Paraná</option>
<option value="Amambay">Amambay</option>
<option value="Asunción(DistritoCapital)">Asunción</option>
<option value="Boquerón">Boquerón</option>
<option value="Caaguazú">Caaguazú</option>
<option value="Caazapá">Caazapá</option>
<option value="Canindeyú">Canindeyú</option>
<option value="Central">Central</option>
<option value="Concepción">Concepción</option>
<option value="Cordillera">Cordillera</option>
<option value="Guairá">Guairá</option>
<option value="Itapúa">Itapúa</option>
<option value="Misiones">Misiones</option>
<option value="Ñeembucú">Ñeembucú</option>
<option value="Paraguarí">Paraguarí</option>
<option value="PresidenteHayes">Presidente Hayes</option>
<option value="SanPedro">San Pedro</option>
    
    <?php 
    };
    if($pais=='Argentina'){ ?>
<option value="BuenosAires">Buenos Aires</option>
<option value="LaPampa">La Pampa</option>
<option value="LaRioja">La Rioja</option>
<option value="Mendoza">Mendoza</option>
<option value="Misiones">Misiones</option>
<option value="Neuquén">Neuquén</option>
<option value="RíoNegro">Río Negro</option>
<option value="Salta">Salta</option>
<option value="SanJuan">San Juan</option>
<option value="SanLuis">San Luis</option>
<option value="SantaCruz">Santa Cruz</option>
<option value="Catamarca">Catamarca</option>
<option value="Chaco">Chaco</option>
<option value="Chubut">Chubut</option>
<option value="Córdoba">Córdoba</option>
<option value="Corrientes">Corrientes</option>
<option value="EntreRíos">Entre Ríos</option>
<option value="Formosa">Formosa</option>
<option value="Jujuy">Jujuy</option>
<option value="SantaFe">Santa Fe</option>
<option value="SantiagodelEstero">Santiago del Estero</option>
<option value="TierradelFuego">Tierra del Fuego</option>
<option value="Tucumán">Tucumán</option>
    
    <?php }; 
    if($pais=='Uruguay'){ ?>
<option value="Artigas">Artigas</option>
<option value="Montevideo">Montevideo</option>
<option value="Paysandú">Paysandú</option>
<option value="RíoNegro">Río Negro</option>
<option value="Rivera">Rivera</option>
<option value="Rocha">Rocha</option>
<option value="Salto">Salto</option>
<option value="SanJosé">San José</option>
<option value="Soriano">Soriano</option>
<option value="Tacuarembó">Tacuarembó</option>
<option value="TreintayTres">Treinta y Tres</option>
<option value="Canelones">Canelones</option>
<option value="CerroLargo">Cerro Largo</option>
<option value="Colonia">Colonia</option>
<option value="Durazno">Durazno</option>
<option value="Flores">Flores</option>
<option value="Florida">Florida</option>
<option value="Lavalleja">Lavalleja</option>
<option value="Maldonado">Maldonado</option>
<?php }; ?>
</select>
<br>
<label for="">Email</label><br>
<input type="email" name="email" placeholder="ejemplo@gmail.com">

<!-- Seccion Educacion -->

<h1>Seccion Educacion</h1>
<label for="">En que especialidad tecnica estas?</label><br>
<input type="text" name="bachiller">
<br>
<label for="">Quien decide las pasantias?</label><br>
<input type="radio" name="pasantias" value="La institucion"> La institucion <br>
<input type="radio" name="pasantias" value="Elijo yo"> Elijo yo <br>
<input type="radio" name="pasantias" value="Cualquiera de las anteriores"> Cualquiera de las anteriores <br>
<input type="radio" name="pasantias" value="No tengo pasantias"> No tengo pasantias <br>


<label for="">Como es la carga horaria?</label><br>
<input type="radio" name="cargahr" value="Insuficiente"> Insuficiente <br>
<input type="radio" name="cargahr" value="Suficiente"> Suficiente <br>
<input type="radio" name="cargahr" value="Excesivo"> Excesivo <br>

<label for="">Que opinas de los contenidos que estas estudiando?</label><br>
<input type="radio" name="contenidos" value="Desactualizado"> Desactualizado <br>
<input type="radio" name="contenidos" value="Bueno"> Bueno <br>
<input type="radio" name="contenidos" value="Malo"> Excelente <br>

<h1>Seccion Convivencia</h1>

<label for="">Como calificarias el funcionamiento del centro de estudiantes?</label><br>
<input type="radio" name="funcioncentro" value="Bueno"> Bueno <br>
<input type="radio" name="funcioncentro" value="Malo"> Malo <br>
<input type="radio" name="funcioncentro" value="Excelente"> No hay <br>

<label for="">Como calificarias la relacion entre alumnos?</label><br>
<input type="radio" name="relalumnos" value="Excelente"> Excelente <br>
<input type="radio" name="relalumnos" value="Bueno"> Bueno <br>
<input type="radio" name="relalumnos" value="Malo"> Malo <br>


<label for="">Como calificarias la relacion con los docentes?</label><br>
<input type="radio" name="reldocentes" value="Excelente"> Excelente <br>
<input type="radio" name="reldocentes" value="Bueno"> Bueno <br>
<input type="radio" name="reldocentes" value="Malo"> Malo <br>


<label for="">Haz sufrido Bullying?</label><br>
<input type="radio" name="bullying" value="Si"> Si <br>
<input type="radio" name="bullying" value="No"> No <br>

<label for="">Tienen apoyo psicologico en tu institucion?</label><br>
<input type="radio" name="psicologo" value="Si"> Si <br>
<input type="radio" name="psicologo" value="No"> No <br>

<h1>Seccion Infraestructura</h1>

<label for="">En que estado esta la institucion/edificio</label> <br>
<input type="radio" name="estadoinstitucional" value="Descuidado"> Descuidado <br>
<input type="radio" name="estadoinstitucional" value="Regular"> Regular <br>
<input type="radio" name="estadoinstitucional" value="Muy bier cuidado"> Muy bien cuidado <br>

<label for="">Que tal es la calidad del internet/wifi?</label> <br>
<input type="radio" name="wifi" value="Excelente"> Excelente <br>
<input type="radio" name="wifi" value="Bueno"> Bueno <br>
<input type="radio" name="wifi" value="Malo"> Malo <br>

<label for="">Tienen suficiente equipamientos para todos los alumnos?</label> <br>
<input type="radio" name="cantequipamientos" value="Pocos">Pocos<br>
<input type="radio" name="cantequipamientos" value="Suficientes">Suficiente<br>
<input type="radio" name="calequipamientos" value="Muchos">Muchos<br>
<input type="radio" name="calequipamientos" value="No tengo">No tengo equipamiento<br>

<label for="">Cual es el estado de los equipamientos tecnicos?</label> <br>
<input type="radio" name="calequipamientos" value="Obsoletos">Obsoletos<br>
<input type="radio" name="calequipamientos" value="Descuidados">Descuidados<br>
<input type="radio" name="calequipamientos" value="Bien cuidados">Bien cuidados<br>
<input type="radio" name="calequipamientos" value="No tengo">No tengo equipamiento<br>

<label for="">Hay buenos equipos de climatizacion?</label> <br>
<input type="radio" name="ace" value="Si"> Si <br>
<input type="radio" name="ace" value="No"> No <br>
<input type="radio" name="ace" value="No hay"> No hay <br>

<label for="">Hay suficientes muebles para los alumnos de tu aula?</label> <br>
<input type="radio" name="muebles" value="Si"> Si <br>
<input type="radio" name="muebles" value="No"> No <br>

<label for="">Hay algun espacio designado para las materias especificas?</label> <br>
<input type="radio" name="matespecificas" value="Si"> Si <br>
<input type="radio" name="matespecificas" value="No"> No <br>

<input type="submit">
</form>

</body>
</html>
<?php 
}

else
{
    //encuesta en portugues
}
?>