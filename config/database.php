<?php 
$conexion = mysqli_connect("127.0.0.1:33065", "administrador", "12345", "iot_ucompensar");

if(mysqli_connect_errno()){
    echo "Error al conectar a la base de datos!" . mysqli_connect_error();
}else{
    // echo "Conexión establecida correctamente!";
}
mysqli_query($conexion, "SET NAMES 'utf8'");
?>