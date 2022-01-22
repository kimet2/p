<table style="border: 1;">
 <tr>
    <th>Origen</th>
    <th>Destí</th>
    <th>Data Anada</th>
    <th>Data Tornada</th>
    <th>Nº Places</th>
    <th>Preu vol</th>
    <th>Preu total</th>
    <th>Data ticket</th>
 </tr>
<?php

    while($row = $tickets->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['origen']."</td>";
        echo "<td>".$row['desti']."</td>";
        echo "<td>".$row['data_anada']."</td>";
        echo "<td>".$row['data_tornada']."</td>";
        echo "<td>".$row['n_places']."</td>";
        echo "<td>".$row['preu']."</td>";
        echo "<td>".$row['total']."</td>";
        echo "<td>".$row['data_ticket']."</td>";
        echo "</tr>";
    }
?>


</table>