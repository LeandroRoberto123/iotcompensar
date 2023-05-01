<?php
function getInfo($conexion)
{
    $sql = "SELECT p.nombre, p.identificacion, p.direccion, r.estado FROM registros as r inner join personas as p on r.id_persona = p.id";
    $personas = mysqli_query($conexion, $sql);

    $result = array();
    if ($personas && mysqli_num_rows($personas) >= 1) {
        $result = $personas;
    }

    return $result;
}