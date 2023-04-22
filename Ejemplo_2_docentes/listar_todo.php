<?php

require_once "config.php";

//PREPARAR LA CONSULTA EN SQL
$sql = "SELECT * FROM Docentes ;";
//echo $sql;

//EJECUTA LA CONSULTA
$respuesta = mysqli_query($conn, $sql);

//$fila = mysqli_fetch_assoc($respuesta);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Cod.</th>";
echo "<th>CI</th>";
echo "<th>Nombres</th>";
echo "<th>Apellidos</th>";
echo "<th>Fecha Nacimiento</th>";
echo "<th>Direccion</th>";
echo "<th>Celular</th>";
echo "</tr>";
while ($fila = mysqli_fetch_assoc($respuesta)) {
echo "<tr>";
echo "<td>".$fila['id_docente']."</td>";
echo "<td>".$fila['ci']."</td>";
echo "<td>".$fila['nombres']."</td>";
echo "<td>".$fila['apellidos']."</td>";
echo "<td>".$fila['fecha_nacimiento']."</td>";
echo "<td>".$fila['direccion']."</td>";
echo "<td>".$fila['celular']."</td>";
echo "</tr>";
}
echo "</table>";
//CERRAR LA CONEXION 
mysqli_close($conn);

?>