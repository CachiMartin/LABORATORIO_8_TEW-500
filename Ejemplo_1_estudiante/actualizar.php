<?php

require_once "config.php";

//ASIGNANDO DATOS A LAS VARIABLES
$nombres = "carlos";
$apellidos = "choque suares";
$edad = 20;
//VARIABLE DE ID
$id = 2;

//PREPARAR LA CONSULTA EN SQL
$sql = "UPDATE Estudiantes SET nombres='$nombres',
 apellidos='$apellidos', edad=$edad  WHERE id_estudiante=$id;";
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
