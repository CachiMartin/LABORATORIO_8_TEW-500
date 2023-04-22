<?php

require_once "config.php";

//ASIGNANDO DATOS A LAS VARIABLES
$nombre = "MECANICA - AUTOMOTRIZ";
$abreviacion = "MEC";

//PREPARAR LA CONSULTA EN SQL
$sql = "INSERT INTO Carreras VALUES (null, '$nombre',
 '$abreviacion');";
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