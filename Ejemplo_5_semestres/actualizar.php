<?php

require_once "config.php";

//ASIGNANDO DATOS A LAS VARIABLES
$numeral = 1;
$literal = "primer";
//VARIABLE DE ID
$id = 1;

//PREPARAR LA CONSULTA EN SQL
$sql = "UPDATE Semestres SET numeral=$numeral, 
literal='$literal' WHERE id_semestre=$id;";
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
