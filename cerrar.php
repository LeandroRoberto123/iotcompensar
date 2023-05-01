<?php 
session_start();

if(isset($_SESSION['usuario_login'])){
    session_destroy();
}
header('Location: index.php');

?>