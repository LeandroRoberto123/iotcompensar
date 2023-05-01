<?php
// Iniciar la sesion y la conexion a bd
session_start();
require_once('config/database.php');

if (isset($_POST['submit_login'])) {

    // Obtener datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Consulta para comprobar las credenciales del usuario
    
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $login = mysqli_query($conexion, $sql);
    
    if($login && mysqli_num_rows($login) == 1){
    
        $usuario = mysqli_fetch_assoc($login);
        // Utilizar una sesion para guardar lo datos del usuario logeado
        $_SESSION['usuario_login'] = $usuario;
        header('Location: tabla.php');
        exit();
    
    }else{

        //Si algo falla enviar una sesion con el fallo
        $_SESSION['error'] = "Correo electrónico o contraseña incorrectos...";
        header('Location: index.php');
        exit();
    }
}

?>