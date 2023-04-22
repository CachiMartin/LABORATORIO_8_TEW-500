<?php

require_once "config.php";

//ASIGNANDO DATOS A LAS VARIABLES
$nombre = "mecanica - automotriz";
$abreviacion = "mec";
//VARIABLE DE ID
$id = 3;

//PREPARAR LA CONSULTA EN SQL
$sql = "UPDATE Carreras SET nombre='$nombre',
 abreviacion='$abreviacion' WHERE id_carrera=$id;";
echo $sql;

//EJECUTA LA CONSULTA
$respuesta = mysqli_query($conn, $sql);
echo $respuesta;

//VERIFICA LA RESPUESTA DE LA CONSULTA
if ($respuesta) {
    echo "REGISTRO ACTUALIZADO EXITOSAMENTE.";
}else{
    echo "ERROR AL ACTUALIZARSE".mysqli_error();
}

//CERRAR LA CONEXION 
mysqli_close($conn);
