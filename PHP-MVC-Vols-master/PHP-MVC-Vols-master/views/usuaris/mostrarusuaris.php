<table style="border: 1;">
    <tr>
    <th>DNI</th>
    <th>nom</th>
    <th>correu</th>
    <th>adreça</th>
    <th>telefon</th>
    <th>num_tarjeta</th>
    <th>rol</th>
    <th>modificar</th>
    <th>eliminar</th>
    
    </tr>
<?php   
while($row = $usuaris->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['dni']."</td>";
    echo "<td>".$row['nom']."</td>";
    echo "<td>".$row['correu']."</td>";
    echo "<td>".$row['adreça']."</td>";
    echo "<td>".$row['telefon']."</td>";
    echo "<td>".$row['num_tarjeta']."</td>";
    echo "<td>".$row['rol']."</td>";
    echo "<td><a href='index.php?controller=usuari&action=modificarusuaris&codi=".$row['codi']."'>Modificar</a></td>";
    echo "<td><a href='index.php?controller=usuari&action=eliminarusuaris&codi=".$row['codi']."'>Eliminar</a></td>";
    echo "</tr>";
}

?>
</table>