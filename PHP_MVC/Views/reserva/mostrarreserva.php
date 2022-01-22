<table style="border: 1;">
    <tr>
    <th>codi</th>
    <th>codi_vol</th>
    <th>codi_usuari</th>
    <th>data_anada</th>
    <th>data_tornada</th>
    <th>nombre_places</th>
    <th>modificar</th>
    <th>eliminar</th>
    <th>pagar</th>
    </tr>
<?php
while($rows = $reservas->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$rows['codi']."</td>";
    echo "<td>".$rows['codi_vol']."</td>";
    echo "<td>".$rows['codi_usuari']."</td>";
    echo "<td>".$rows['data_anada']."</td>";
    echo "<td>".$rows['data_tornada']."</td>";
    echo "<td>".$rows['nombre_places']."</td>";
    echo "<td><a href='index.php?controller=reserva&action=modificarreserva&codi=".$rows['codi']."'>Modificar</a></td>";
    echo "<td><a href='index.php?controller=reserva&action=eliminarreserva&codi=".$rows['codi']."'>Eliminar</a></td>";
    echo "<td><a href='index.php?controller=ticket&action=pagartickets&codi=".$rows['codi']."'>Pagar</a></td>";
    echo "</tr>";
}
echo "</table>";