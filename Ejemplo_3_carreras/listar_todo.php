<?php

require_once "config.php";

//PREPARAR LA CONSULTA EN SQL
$sql = "SELECT * FROM Carreras ;";
//echo $sql;

//EJECUTA LA CONSULTA
$respuesta = mysqli_query($conn, $sql);

//$fila = mysqli_fetch_assoc($respuesta);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Cod.</th>";
echo "<th>Nombre</th>";
echo "<th>Abreviacion</th>";
echo "</tr>";
while ($fila = mysqli_fetch_assoc($respuesta)) {
echo "<tr>";
echo "<td>".$fila['id_carrera']."</td>";
echo "<td>".$fila['nombre']."</td>";
echo "<td>".$fila['abreviacion']."</td>";
echo "</tr>";
}
echo "</table>";
//CERRAR LA CONEXION 
mysqli_close($conn);

?>