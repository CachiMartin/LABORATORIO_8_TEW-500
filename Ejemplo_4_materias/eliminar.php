<?php

require_once "config.php";

//VARIABLE DE ID
$id = 7;

//PREPARAR LA CONSULTA EN SQL
$sql = "DELETE FROM Materias WHERE id_materia = $id;";
echo $sql;

//EJECUTA LA CONSULTA
$respuesta = mysqli_query($conn, $sql);
echo $respuesta;

//VERIFICA LA RESPUESTA DE LA CONSULTA
if ($respuesta) {
    echo "REGISTRO ELIMINADO EXITOSAMENTE.";
}else{
    echo "ERROR AL ELIMINARSE".mysqli_error();
}

//CERRAR LA CONEXION 
mysqli_close($conn);
