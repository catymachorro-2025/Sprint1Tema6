<?php 
require_once 'C:\Users\Usuario\Documents\Curso PHP\Sprint1Tema7\Ejercicio2.php';
// cambios hechos comprobando que se presiono el boton de Enviar

if (isset($_POST['submit'])) {
    session_start();
    
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['contrasena'] = $_POST['contrasena'];
//guardando las variables en las variables de sesion
}
//esto es lo que se borró:
// session_start();
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // $username_post = isset($_POST["username"]) ? $_POST["username"] : ''; 
    // $email_post = isset($_POST["email"]) ? $_POST["email"] : '';
    // $contrasena_post = isset($_POST["contrasena"]) ? $_POST["contrasena"] : ''; 

    // $_SESSION["username"] = $username_post;
    // $_SESSION["email"] = $_SESSION["email"] = $email_post;
    // $_SESSION["contrasena"] = $contrasena_post;

?>