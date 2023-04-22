<?php

require_once "config.php";

//ASIGNANDO DATOS A LAS VARIABLES
$ci = 0101540;
$nombres = "GONZALO";
$apellidos = "MIRANDA CASTILLO";
$fecha_nacimiento = "02-10-1989";
$direccion = "ESTRELLA DEL NORTE";
$celular = 23568910;

//PREPARAR LA CONSULTA EN SQL
$sql = "INSERT INTO Docentes VALUES (null, $ci, '$nombres', '$apellidos', '$fecha_nacimiento', '$direccion', $celular);";
echo $sql;

//EJECUTA LA CONSULTA
$respuesta = mysqli_query($conn, $sql);
echo $respuesta;

//VERIFICA LA RESPUESTA DE LA CONSULTA
if ($respuesta) {
    echo "REGISTRO CREADO EXITOSAMENTE.";
}else{
    echo "ERROR AL CREAR EL REGISTRO".mysqli_error();
}

//CERRAR LA CONEXION 
mysqli_close($conn);
?>