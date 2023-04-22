<?php

require_once "config.php";

//ASIGNANDO DATOS A LAS VARIABLES
$nombre = "CONTROL Y AUTOMATIZACION INDUSTRIAL II";
$hora_academica = 6;
$tipo = "1";
$pensum = "2023";

//PREPARAR LA CONSULTA EN SQL
$sql = "INSERT INTO Materias VALUES (null, '$nombre',
$hora_academica, '$tipo', '$pensum');";
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