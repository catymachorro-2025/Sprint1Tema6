<?php 
require_once 'LogicaSuperglobales.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class = "contenedor">
        <form action="" method="post"> 
            <h1>Formulario Sprint 1 Tema 6</h1>

            <div class = "datos-formulario">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="datos-formulario">
                <label for="email">Correo Electronico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="datos-formulario">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required> 
            </div>

            <button type="submit" class="form-submit">Enviar</button>
        </form>
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "
    <hr>
    <h2>Datos Guardados:</h2>
    <pre>
    Nombre: " . $_SESSION["username"] . "
    Email: " . $_SESSION["email"] . "
    Contraseña: ". $_SESSION ["contrasena"] ."
    </pre>";
    }
     ?>
    </div>
</body>
</html>