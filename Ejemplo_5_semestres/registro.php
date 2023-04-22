<?php

require_once "config.php";

//ASIGNANDO DATOS A LAS VARIABLES
$numeral = 1;
$literal = "TERCER";

//PREPARAR LA CONSULTA EN SQL
$sql = "INSERT INTO Semestres VALUES (null, $numeral, '$literal');";
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