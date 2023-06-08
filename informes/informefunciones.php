<!DOCTYPE html>
<html>
<head>
    <title>Página de Informes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;/>
</head>
<body>
    <h1>Informes</h1>
<!-- Formulario con botones para ejecutar los informes -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="informe1" value="Informe 1">
        <input type="submit" name="informe2" value="Informe 2">
        <input type="submit" name="informe3" value="Informe 3">
        <input type="submit" name="informe4" value="Informe 4">
        <input type="submit" name="informe5" value="Informe 5">
    </form>
        
    <?php
    // Función para generar y mostrar el informe 1
    function generarInforme1() {
        echo "<h2>Informe 1</h2>";
        // Lógica y consulta SQL para generar el informe 1
        // ...
        echo "<p>Este es el contenido del informe 1.</p>";
    }

    // Función para generar y mostrar el informe 2
    function generarInforme2() {
        echo "<h2>Informe 2</h2>";
        // Lógica y consulta SQL para generar el informe 2
        // ...
        echo "<p>Este es el contenido del informe 2.</p>";
    }

    // Función para generar y mostrar el informe 3
    function generarInforme3() {
        echo "<h2>Informe 3</h2>";
        // Lógica y consulta SQL para generar el informe 3
        // ...
        echo "<p>Este es el contenido del informe 3.</p>";
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
