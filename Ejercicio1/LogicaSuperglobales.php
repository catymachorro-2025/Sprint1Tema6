<?php 
require_once 'C:\Users\Usuario\Documents\Curso PHP\Sprint1Tema7\Ejercicio2.php';


session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username_post = isset($_POST["username"]) ? $_POST["username"] : ''; 
    $email_post = isset($_POST["email"]) ? $_POST["email"] : '';
    $contrasena_post = isset($_POST["contrasena"]) ? $_POST["contrasena"] : ''; 

}
?>