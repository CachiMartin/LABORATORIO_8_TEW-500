<?php

require_once "config.php";

//ASIGNANDO DATOS A LAS VARIABLES
$nombre = "telematica ii";
$hora_academica = 2;
$tipo = "2";
$pensum = "2023";
//VARIABLE DE ID
$id = 4;

//PREPARAR LA CONSULTA EN SQL
$sql = "UPDATE Materias SET nombre='$nombre', 
hora_academica=$hora_academica, tipo='$tipo', 
pensum='$pensum' WHERE id_materia=$id;";
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
