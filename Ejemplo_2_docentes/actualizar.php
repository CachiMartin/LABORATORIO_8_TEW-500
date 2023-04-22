<?php

require_once "config.php";

//ASIGNANDO DATOS A LAS VARIABLES
$ci = 0003214;
$nombres = "gonzalo";
$apellidos = "miranda castillo";
$fecha_nacimiento = "08-12-1989";
$direccion = "estrella del norte";
$celular = 23386910;

//VARIABLE DE ID
$id = 1;

//PREPARAR LA CONSULTA EN SQL
$sql = "UPDATE Docentes SET ci = $ci, nombres='$nombres',
 apellidos='$apellidos', fecha_nacimiento = '$fecha_nacimiento',
  direccion = '$direccion', celular = $celular  WHERE id_docente=$id;";
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
