<?php 
$conexion = mysqli_connect("127.0.0.1:33065","administrador","12345","blog_master");

if(mysqli_connect_errno()){
    echo "Error al conectar a la base de datos!" . mysqli_connect_error();
}else{
    // echo "Conexión establecida correctamente!";
}
mysqli_query($conexion, "SET NAMES 'utf8'");

// $query = mysqli_query($conexion, "SELECT * FROM usuarios;");
// while ($usuario = mysqli_fetch_assoc($query)) {
//     echo $usuario['nombre'];
// }

// Iniciar la sesión
// echo $_SESSION['usuario'];
if(!isset($_SESSION['usuario'])){
    session_start();
}    

?>