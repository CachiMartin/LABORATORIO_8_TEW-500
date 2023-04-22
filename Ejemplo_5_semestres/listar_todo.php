<?php

require_once "config.php";

//PREPARAR LA CONSULTA EN SQL
$sql = "SELECT * FROM Semestres ;";
//echo $sql;

//EJECUTA LA CONSULTA
$respuesta = mysqli_query($conn, $sql);

//$fila = mysqli_fetch_assoc($respuesta);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Cod.</th>";
echo "<th>Numeral</th>";
echo "<th>Literal</th>";
echo "</tr>";
while ($fila = mysqli_fetch_assoc($respuesta)) {
echo "<tr>";
echo "<td>".$fila['id_semestre']."</td>";
echo "<td>".$fila['numeral']."</td>";
echo "<td>".$fila['literal']."</td>";
echo "</tr>";
}
echo "</table>";
//CERRAR LA CONEXION 
mysqli_close($conn);

?>