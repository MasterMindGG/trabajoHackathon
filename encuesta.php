
<?php

include('conexion.php');

$pais = $_REQUEST['pais'];
echo $pais;
//if (isset($_REQUEST['pais'])) {
    //$pais = $_REQUEST['pais'];
    //echo $pais;
if(($pais == 'Paraguay') or ($pais == 'Argentina') or ($pais == 'Uruguay'))
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="arbol.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="stylesheet" href="styles.css">  -->
    <title>Document</title>
    

</head>
<body>

<div class="form_paises">

<h1 class="titulo">Encuesta Hackathon</h1>




<div id="conteItemsCarrusel">
    
    <form action="registrare.php" method="POST">

        <div class="itemCarrusel" id="itemCarrusel-1">
            <div class="tarjetaCarrusel" id="tarjetaCarrusel-1">
                <div class="form_generales">
                    <div class="general">
                        <h3>Generales</h3>
                    

                        <br><label class="label" for="">Pais</label class="label"><br>
                        <input class="input" type="text" name="pais" value="<?php echo $pais; ?>">
                    

                        <br><label class="label" for="">Edad</label class="label"><br>
                        <input class="input" type="number" name="edad" min="12" max="99">
                    

                        <br><label class="label" for="">Genero</label class="label"><br>
                        <input class="input" type="radio" name="genero" value="Masculino"> Masculino
                        <input class="input" type="radio" name="genero" value="Femenino"> Femenino
                        <input class="input" type="radio" name="genero" value="Otro"> Otro
                    
                        <br><label class="label" for="">Departamentos/Provincias</label class="label"><br>

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
                    
                            <br><label class="label" for="">Email</label class="label"><br>
                                <input class="input" type="email" name="email" placeholder="ejemplo@gmail.com">

                </div>
                
            </div>
            <div class="flechasCarrusel">
                <a href="#itemCarrusel-8">
                    <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
        
                </a>
                <a href="#itemCarrusel-2">
                    <img src="images/flechaDerecha.png" alt="flechaDerecha">
                        
                </a>    
                </div>     
            </div>
        </div>
        

         <!-- Seccion Educacion -->
        <div class="itemCarrusel" id="itemCarrusel-2">
            <div class="tarjetaCarrusel" id="tarjetaCarrusel-2">
                <div class="form_educacion">
                            <div class="educacion"><h3>Seccion Educacion</h3></div>
                    
                    <br><label class="label" for="">En que especialidad tecnica estas?</label class="label"><br>
                    <input class="input" type="text" name="bachiller">
                    
                    <br><label class="label" for="">Quien decide las pasantias?</label class="label"><br>
                    <input class="input" type="radio" name="pasantias" value="La institucion"> La institucion 
                    <input class="input" type="radio" name="pasantias" value="Elijo yo"> Elijo yo <br>
                    <input class="input" type="radio" name="pasantias" value="Cualquiera de las anteriores"> Cualquiera de las anteriores <br> 
                    <input class="input" type="radio" name="pasantias" value="No tengo pasantias"> No tengo pasantias 

                </div>
                
                <div class="flechasCarrusel">
                    <a href="#itemCarrusel-1">
                        <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
                        
                    </a>
                    <a href="#itemCarrusel-3">
                        <img src="images/flechaDerecha.png" alt="flechaDerecha">
                        
                    </a>    
                    
                </div>
            </div>
        </div>
        
        <!-- SEGUNDA PARTE ENCUESTA  -->
        <div class="itemCarrusel" id="itemCarrusel-3">
            <div class="tarjetaCarrusel" id="tarjetaCarrusel-3">
                <div class="form_educacion">
                            <div class="educacion"><h3>Seccion Educacion</h3></div>
                    
                    <br><label class="label" for="">Como es la carga horaria?</label class="label"><br>
                    <input class="input" type="radio" name="cargahr" value="Insuficiente"> Insuficiente <br>
                    <input class="input" type="radio" name="cargahr" value="Suficiente"> Suficiente <br>
                    <input class="input" type="radio" name="cargahr" value="Excesivo"> Excesivo 

                    <br><label class="label" for="">Que opinas de los contenidos que estas estudiando?</label class="label"><br>
                    <input class="input" type="radio" name="contenidos" value="Desactualizado"> Desactualizado <br> 
                    <input class="input" type="radio" name="contenidos" value="Bueno"> Bueno <br>
                    <input class="input" type="radio" name="contenidos" value="Malo"> Excelente 

                </div>
                
                <div class="flechasCarrusel">
                    <a href="#itemCarrusel-2">
                        <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
                        
                    </a>
                    <a href="#itemCarrusel-4">
                        <img src="images/flechaDerecha.png" alt="flechaDerecha">
                        
                    </a>    
                    
                </div>
            </div>
        </div>



        <!-- SEGUNDA PARTE ENCUESTA -->
        <div class="itemCarrusel" id="itemCarrusel-4">
            <div class="tarjetaCarrusel" id="tarjetaCarrusel-4">
                <div class="form_convivencia">

                    <h3>Seccion Convivencia</h3>

                    <br><label class="label" for="">Como calificarias el funcionamiento del centro de estudiantes?</label class="label"><br>
                    <input class="input" type="radio" name="funcioncentro" value="Bueno"> Bueno 
                    <input class="input" type="radio" name="funcioncentro" value="Malo"> Malo <br>
                    <input class="input" type="radio" name="funcioncentro" value="Excelente"> No hay 

                    <br><label class="label" for="">Como calificarias la relacion entre alumnos?</label class="label"><br>
                    <input class="input" type="radio" name="relalumnos" value="Excelente"> Excelente 
                    <input class="input" type="radio" name="relalumnos" value="Bueno"> Bueno 
                    <input class="input" type="radio" name="relalumnos" value="Malo"> Malo 


                    <br><label class="label" for="">Como calificarias la relacion con los docentes?</label class="label"><br>
                    <input class="input" type="radio" name="reldocentes" value="Excelente"> Excelente 
                    <input class="input" type="radio" name="reldocentes" value="Bueno"> Bueno 
                    <input class="input" type="radio" name="reldocentes" value="Malo"> Malo 

                    </div>
                
            </div>
            <div class="flechasCarrusel">
                <a href="#itemCarrusel-3">
                    <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
                        
                </a>
                <a href="#itemCarrusel-5">
                    <img src="images/flechaDerecha.png" alt="flechaDerecha">
                        
                </a>    
                    
            </div>

            <div class="itemCarrusel" id="itemCarrusel-5">
            <div class="tarjetaCarrusel" id="tarjetaCarrusel-5">
                <div class="form_convivencia">

                    <h3>Seccion Convivencia</h3>
                    <br><label class="label" for="">Haz sufrido Bullying?</label class="label"><br>
                    <input class="input" type="radio" name="bullying" value="Si"> Si 
                    <input class="input" type="radio" name="bullying" value="No"> No 

                    <br><label class="label" for="">Tienen apoyo psicologico en tu institucion?</label class="label"><br>
                    <input class="input" type="radio" name="psicologo" value="Si"> Si 
                    <input class="input" type="radio" name="psicologo" value="No"> No 
                    
            </div>
            <div class="flechasCarrusel">
                <a href="#itemCarrusel-4">
                    <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
                        
                </a>
                <a href="#itemCarrusel-6">
                    <img src="images/flechaDerecha.png" alt="flechaDerecha">
                        
                </a>    
                    
            </div>




        </div>
        <div class="itemCarrusel" id="itemCarrusel-6">
            <div class="tarjetaCarrusel" id="tarjetaCarrusel-6">
                <div class="form_infraestructura">
                    <h3>Seccion Infraestructura</h3>

                    <br><label class="label" for="">En que estado esta la institucion/edificio</label class="label"><br> 
                    <input class="input" type="radio" name="estadoinstitucional" value="Descuidado"> Descuidado 
                    <input class="input" type="radio" name="estadoinstitucional" value="Regular"> Regular 
                    <input class="input" type="radio" name="estadoinstitucional" value="Muy bier cuidado"> Muy bien cuidado 

                    <br><label class="label" for="">Que tal es la calidad del internet/wifi?</label class="label"><br> 
                    <input class="input" type="radio" name="wifi" value="Excelente"> Excelente 
                    <input class="input" type="radio" name="wifi" value="Bueno"> Bueno 
                    <input class="input" type="radio" name="wifi" value="Malo"> Malo 

                </div>
                
            </div>
            <div class="flechasCarrusel">
                <a href="#itemCarrusel-5">
                    <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
                    
                </a>
                <a href="#itemCarrusel-7">
                    <img src="images/flechaDerecha.png" alt="flechaDerecha">
                        
                </a>    
                    
            </div>
        </div>
        




<!--nuevoItem-->



        <div class="itemCarrusel" id="itemCarrusel-7">
            <div class="tarjetaCarrusel" id="tarjetaCarrusel-7">
                <div class="form_infraestructura">
                    <h3>Seccion Infraestructura</h3>
                    <br><label class="label" for="">Cual es el estado de los equipamientos tecnicos?</label class="label"><br> 
                    <input class="input" type="radio" name="calequipamientos" value="Descuidado"> Descuidado 
                    <input class="input" type="radio" name="calequipamientos" value="Regular"> Regular 
                    <input class="input" type="radio" name="calequipamientos" value="Muy bien cuidado"> Muy bien cuidado 
        
                    <br><label class="label" for="">Hay buenos equipos de climatizacion?</label class="label"><br> 
                    <input class="input" type="radio" name="ace" value="Si"> Si 
                    <input class="input" type="radio" name="ace" value="No"> No 
                    <input class="input" type="radio" name="ace" value="No hay"> No hay 

                    <br><label class="label" for="">Hay suficientes muebles para los alumnos de tu aula?</label class="label"><br> 
                    <input class="input" type="radio" name="muebles" value="Si"> Si 
                    <input class="input" type="radio" name="muebles" value="No"> No 
                    
                    
                </div>
                
            </div>
            <div class="flechasCarrusel">
                <a href="#itemCarrusel-6">
                    <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
                    
                </a>
                <a href="#itemCarrusel-8">
                    <img src="images/flechaDerecha.png" alt="flechaDerecha">
                        
                </a>    
                    
            </div>
        </div>

        <div class="itemCarrusel" id="itemCarrusel-8">
            <div class="tarjetaCarrusel" id="tarjetaCarrusel-">
                <div class="form_infraestructura">
                    <h3>Seccion Infraestructura</h3>
                    
                    <br><label class="label" for="">Hay algun espacio designado para las materias especificas?</label class="label"><br> 
                    <input class="input" type="radio" name="matespecificas" value="Si"> Si 
                    <input class="input" type="radio" name="matespecificas" value="No"> No 
                    <br><label class="label" for="">Tienen suficiente equipamientos para todos los alumnos?</label class="label"><br> 
                    <input class="input" type="radio" name="cantequipamientos" value="Si"> Si 
                    <input class="input" type="radio" name="cantequipamientos" value="No"> No 
                    <br><input class="input" class= "enviar" type="submit" value="Enviar">

                </div>
                
            </div>
            <div class="flechasCarrusel">
                <a href="#itemCarrusel-7">
                    <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
                    
                </a>
                <a href="#itemCarrusel-1">
                    <img src="images/flechaDerecha.png" alt="flechaDerecha">
                        
                </a>    
                    
            </div>
        </div>                    

                        <!--nuevofin-->
    </div>
       
   </form>
</div>

</body>
</html>
<?php 
}
//}
else
{
    
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="arbol.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    <link rel="stylesheet" href="styles.css">  -->
        <title>Document</title>
        
    
    </head>
    <body>
    
    <div class="form_paises">
    
    <h1 class="titulo">Encuesta Hackathon</h1>
    
    
    
    
    <div id="conteItemsCarrusel">
        
        <form action="registrare.php" method="POST">
    
            <div class="itemCarrusel" id="itemCarrusel-1">
                <div class="tarjetaCarrusel" id="tarjetaCarrusel-1">
                    <div class="form_generales">
                        <div class="general">
                            <h3>Generales</h3>
                        
    
                            <br><label class="label" for="">Pais</label class="label"><br>
                            <input class="input" type="text" name="pais" value="<?php echo $pais; ?>">
                        
    
                            <br><label class="label" for="">idade</label class="label"><br>
                            <input class="input" type="number" name="edad" min="12" max="99">
                        
    
                            <br><label class="label" for="">Genero</label class="label"><br>
                            <input class="input" type="radio" name="genero" value="Masculino"> Masculino
                            <input class="input" type="radio" name="genero" value="Femenino"> Femenino
                            <input class="input" type="radio" name="genero" value="Otro"> Otro
                        
                            <br><label class="label" for="">estados</label class="label"><br>
    
                            <select name="departamento" class="form">
                                <?php if($pais=='Brasil'){ ?>
                        <option value="Acre">Acre</option>
                        <option value="Alagoas">Alagoas</option>
                        <option value="Amapá">Amapá</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Bahía">Bahía</option>
                        <option value="Ceará">Ceará</option>
                        <option value="DistritoFederal(Brasilia)">Distrito Federal(Brasilia)</option>
                        <option value="EspíritoSanto">EspíritoSanto</option>
                        <option value="Goiás">Goiás</option>
                        <option value="Maranhão">Maranhão</option>
                        <option value="MatoGrosso">Mato Grosso</option>
                        <option value="MatoGrossodoSul">Mato Grosso do Sul</option>
                        <option value="MinasGerais">Minas Gerais</option>
                        <option value="Pará">Pará</option>
                        <option value="Paraíba">Paraíba</option>
                        <option value="Paraná">Paraná</option>
                        <option value="Pernambuco">Pernambuco</option>
                        <option value="Piauí">Piauí</option>
                        <option value="RíodeJaneiro">Río de Janeiro</option>
                        <option value="RíoGrandedoNorte">Río Grande do Norte</option>
                        <option value="RíoGrandedoSul">Río Grande do Sul</option>
                        <option value="Rondônia">Rondônia</option>
                        <option value="Roraima">Roraima</option>
                        <option value="SantaCatarina">Santa Catarina</option>
                        <option value="SãoPaulo">São Paulo</option>
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
                        
                                <br><label class="label" for="">Email</label class="label"><br>
                                    <input class="input" type="email" name="email" placeholder="ejemplo@gmail.com">
    
                    </div>
                    
                </div>
                <div class="flechasCarrusel">
                    <a href="#itemCarrusel-8">
                        <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
            
                    </a>
                    <a href="#itemCarrusel-2">
                        <img src="images/flechaDerecha.png" alt="flechaDerecha">
                            
                    </a>    
                    </div>     
                </div>
            </div>
            
    
             <!-- Seccion Educacion -->
            <div class="itemCarrusel" id="itemCarrusel-2">
                <div class="tarjetaCarrusel" id="tarjetaCarrusel-2">
                    <div class="form_educacion">
                                <div class="educacion"><h3>Seção de Educação</h3></div>
                        
                        <br><label class="label" for="">Qual o curso tecnico?</label class="label"><br>
                        <input class="input" type="text" name="bachiller">
                        
                        <br><label class="label" for="">Quem decide local de estagio ?</label class="label"><br>
                        <input class="input" type="radio" name="pasantias" value="La institucion">A instituição
                        <input class="input" type="radio" name="pasantias" value="Elijo yo">Eu decido <br>
                        <input class="input" type="radio" name="pasantias" value="Cualquiera de las anteriores">Qualquer uma das anteriores <br> 
                        <input class="input" type="radio" name="pasantias" value="No tengo pasantias">Não tenho estagio 
    
                    </div>
                    
                    <div class="flechasCarrusel">
                        <a href="#itemCarrusel-1">
                            <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
                            
                        </a>
                        <a href="#itemCarrusel-3">
                            <img src="images/flechaDerecha.png" alt="flechaDerecha">
                            
                        </a>    
                        
                    </div>
                </div>
            </div>
            
            <!-- SEGUNDA PARTE ENCUESTA  -->
            <div class="itemCarrusel" id="itemCarrusel-3">
                <div class="tarjetaCarrusel" id="tarjetaCarrusel-3">
                    <div class="form_educacion">
                                <div class="educacion"><h3>Seção educação</h3></div>
                        
                        <br><label class="label" for="">Como e a sua carga horaria?</label class="label"><br>
                        <input class="input" type="radio" name="cargahr" value="Insuficiente"> Insuficiente <br>
                        <input class="input" type="radio" name="cargahr" value="Suficiente"> Suficiente <br>
                        <input class="input" type="radio" name="cargahr" value="Excesivo"> Excesivo 
    
                        <br><label class="label" for="">O que acha do conteudo do que esta estudando?</label class="label"><br>
                        <input class="input" type="radio" name="contenidos" value="Desactualizado"> Desatualizado <br> 
                        <input class="input" type="radio" name="contenidos" value="Bueno"> Bom <br>
                        <input class="input" type="radio" name="contenidos" value="Malo"> Excelente 
    
                    </div>
                    
                    <div class="flechasCarrusel">
                        <a href="#itemCarrusel-2">
                            <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
                            
                        </a>
                        <a href="#itemCarrusel-4">
                            <img src="images/flechaDerecha.png" alt="flechaDerecha">
                            
                        </a>    
                        
                    </div>
                </div>
            </div>
    
    
    
            <!-- SEGUNDA PARTE ENCUESTA -->
            <div class="itemCarrusel" id="itemCarrusel-4">
                <div class="tarjetaCarrusel" id="tarjetaCarrusel-4">
                    <div class="form_convivencia">
    
                        <h3>Seção de convivencia</h3>
    
                        <br><label class="label" for="">Como se caracteriza o centro de estudantes/gremio?</label class="label"><br>
                        <input class="input" type="radio" name="funcioncentro" value="Bueno"> Bom
                        <input class="input" type="radio" name="funcioncentro" value="Malo"> Mau <br>
                        <input class="input" type="radio" name="funcioncentro" value="Excelente"> Não tem
    
                        <br><label class="label" for="">Como classificaria a convivencia entre os estudantes?</label class="label"><br>
                        <input class="input" type="radio" name="relalumnos" value="Excelente"> Excelente 
                        <input class="input" type="radio" name="relalumnos" value="Bueno">  Bom
                        <input class="input" type="radio" name="relalumnos" value="Malo"> Mau 
    
    
                        <br><label class="label" for="">Como calificarias la relacion con los docentes?</label class="label"><br>
                        <input class="input" type="radio" name="reldocentes" value="Excelente"> Excelente 
                        <input class="input" type="radio" name="reldocentes" value="Bueno"> Bom 
                        <input class="input" type="radio" name="reldocentes" value="Malo"> Mau 
    
                        </div>
                    
                </div>
                <div class="flechasCarrusel">
                    <a href="#itemCarrusel-3">
                        <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
                            
                    </a>
                    <a href="#itemCarrusel-5">
                        <img src="images/flechaDerecha.png" alt="flechaDerecha">
                            
                    </a>    
                        
                </div>
    
                <div class="itemCarrusel" id="itemCarrusel-5">
                <div class="tarjetaCarrusel" id="tarjetaCarrusel-5">
                    <div class="form_convivencia">
    
                        <h3>Seção de convivencia</h3>
                        <br><label class="label" for="">tem sofrido Bullying?</label class="label"><br>
                        <input class="input" type="radio" name="bullying" value="Si"> Sim 
                        <input class="input" type="radio" name="bullying" value="No"> não
    
                        <br><label class="label" for="">Tienen apoyo psicologico en tu institucion?</label class="label"><br>
                        <input class="input" type="radio" name="psicologo" value="Si"> Sim 
                        <input class="input" type="radio" name="psicologo" value="No"> não 
                        
                </div>
                <div class="flechasCarrusel">
                    <a href="#itemCarrusel-4">
                        <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
                            
                    </a>
                    <a href="#itemCarrusel-6">
                        <img src="images/flechaDerecha.png" alt="flechaDerecha">
                            
                    </a>    
                        
                </div>
    
    
    
    
            </div>
            <div class="itemCarrusel" id="itemCarrusel-6">
                <div class="tarjetaCarrusel" id="tarjetaCarrusel-6">
                    <div class="form_infraestructura">
                        <h3>Seção de infraestrutura</h3>
    
                        <br><label class="label" for="">Em que estado estão as paredes onde estuda</label class="label"><br> 
                        <input class="input" type="radio" name="estadoinstitucional" value="Descuidado"> Descuidado 
                        <input class="input" type="radio" name="estadoinstitucional" value="Regular"> Regular 
                        <input class="input" type="radio" name="estadoinstitucional" value="Muy bier cuidado"> Muito bem cuidado 
    
                        <br><label class="label" for="">Qual a qualidade da internet/wifi?</label class="label"><br> 
                        <input class="input" type="radio" name="wifi" value="Excelente"> Excelente 
                        <input class="input" type="radio" name="wifi" value="Bueno"> Bom 
                        <input class="input" type="radio" name="wifi" value="Malo"> Mau 
    
                    </div>
                    
                </div>
                <div class="flechasCarrusel">
                    <a href="#itemCarrusel-5">
                        <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
                        
                    </a>
                    <a href="#itemCarrusel-7">
                        <img src="images/flechaDerecha.png" alt="flechaDerecha">
                            
                    </a>    
                        
                </div>
            </div>
            
    
    
    
    
    <!--nuevoItem-->
    
    
    
            <div class="itemCarrusel" id="itemCarrusel-7">
                <div class="tarjetaCarrusel" id="tarjetaCarrusel-7">
                    <div class="form_infraestructura">
                        <h3>Seção deinfraestrutura</h3>
                        <br><label class="label" for="">qual o estado dos  equipamientos tecnicos?</label class="label"><br> 
                        <input class="input" type="radio" name="calequipamientos" value="Descuidado"> Descuidado 
                        <input class="input" type="radio" name="calequipamientos" value="Regular"> Regular 
                        <input class="input" type="radio" name="calequipamientos" value="Muy bien cuidado">Muito bem  cuidado 
            
                        <br><label class="label" for="">Tem bom equipamentos de aclimatação?</label class="label"><br> 
                        <input class="input" type="radio" name="ace" value="Si"> Sim 
                        <input class="input" type="radio" name="ace" value="No"> Não 
                        <input class="input" type="radio" name="ace" value="No hay"> Não tem
    
                        <br><label class="label" for="">tem assentos sufisiente para todos os aluno?</label class="label"><br> 
                        <input class="input" type="radio" name="muebles" value="Si"> Sim 
                        <input class="input" type="radio" name="muebles" value="No"> Não 
                        
                        
                    </div>
                    
                </div>
                <div class="flechasCarrusel">
                    <a href="#itemCarrusel-6">
                        <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
                        
                    </a>
                    <a href="#itemCarrusel-8">
                        <img src="images/flechaDerecha.png" alt="flechaDerecha">
                            
                    </a>    
                        
                </div>
            </div>
    
            <div class="itemCarrusel" id="itemCarrusel-8">
                <div class="tarjetaCarrusel" id="tarjetaCarrusel-">
                    <div class="form_infraestructura">
                        <h3>Seção de infaestrutura</h3>
                        
                        <br><label class="label" for="">tem um espaçoespecifico para uma materia?</label class="label"><br> 
                        <input class="input" type="radio" name="matespecificas" value="Si"> Sim 
                        <input class="input" type="radio" name="matespecificas" value="No"> Não 
                        <br><label class="label" for="">tem equipamentos suficiente para todos os alunos?</label class="label"><br> 
                        <input class="input" type="radio" name="cantequipamientos" value="Si"> Sim 
                        <input class="input" type="radio" name="cantequipamientos" value="No"> Não 
                        <br><input class="input" class= "enviar" type="submit" value="Enviar">
    
                    </div>
                    
                </div>
                <div class="flechasCarrusel">
                    <a href="#itemCarrusel-7">
                        <img src="images/flechaIzquierda.png" alt="flechaIzquierda">
                        
                    </a>
                    <a href="#itemCarrusel-1">
                        <img src="images/flechaDerecha.png" alt="flechaDerecha">
                            
                    </a>    
                        
                </div>
            </div>                    
    
                            <!--nuevofin-->
        </div>
           
       </form>
    </div>
    
    </body>
    </html>
<?php
}
?>