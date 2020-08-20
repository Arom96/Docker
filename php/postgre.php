<?php

// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=25.2.91.197 dbname=serviciosdb user=postgres password=root")
    or die('No se ha podido conectar: ' . pg_last_error());

// Realizando una consulta SQL
$query = 'SELECT * FROM estudiantes';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

// Imprimiendo los resultados en HTML
echo "<table>
<tr>
  <th>Id</th>
  <th>Nombre</th>
  <th>Apellido</th>
  <th>Facultad</th>
</tr>";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);
?>