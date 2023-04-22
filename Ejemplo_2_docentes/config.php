<?php 
//DOCENTES
//VARIABLES DE DATOS DE CONEXION A LA BASE DE DATOS
$host = "localhost";
$user = "root";
$password = "";
$database = "LABO_8_CRUD_LNPM";

//CONEXION A LA BASE DE DATOS PROCEDIMINETOS
$conn = mysqli_connect($host, $user, $password, $database);

//VERIFICAR SI TIENE ERROR EN LA CONEXION
if (!$conn) {
    die("Conexion Fallida ".mysqli_connect_error());
}

?>