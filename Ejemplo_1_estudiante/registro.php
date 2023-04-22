<?php

require_once "config.php";

//ASIGNANDO DATOS A LAS VARIABLES
$nombres = "LUZ NATALIA";
$apellidos = "PARADA MAMANI";
$edad = 20;

//PREPARAR LA CONSULTA EN SQL
$sql = "INSERT INTO Estudiantes VALUES (null, '$nombres', '$apellidos', $edad);";
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