<?php

$mysql = new mysqli("25.2.91.197", "root", "root", "serviciosdb");

$resultados = $mysql->query("select * from estudiantes");

echo "
<table>
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Facultad</th>
  </tr>";

foreach($resultados as $r){

    echo "<tr> <td>";
    echo $r["nombre"]."</td><td>";
    echo $r["apellido"]."</td><td>";
    echo $r["facultad"]."</td></tr>";
    
}

echo "</table>";