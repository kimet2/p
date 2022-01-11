
<h2 class="text-center pt-5 pb-3 ">Mostrar Vols</h2>
<div class="container mt-5 mb-5">
<table class="table">
    <tr>
        <th>Codi</th>
        <th>Origen</th>
        <th>Destí</th>
        <th>Preu</th>
        <th>Foto</th>
        <th>Nombre_places</th>
        <th>Eliminar</th>
        <th>Actualitzar</th>
    </tr>

<?php

    $mysql = new mysqli('localhost','root','','vols');
    if($mysql->connect_errno){
        die($mysql->connect_error);
    }
    $sql = "SELECT * FROM vol";
    $result=$mysql->query($sql);
    if($result){

        while($row=$result->fetch_assoc()){
            echo "<tr>"; //crea fila
                echo "<td>" .$row['codi']."</td>"; //primera columna
                echo "<td>" . $row['origen'] . "</td>"; //segona
                echo "<td>" . $row['desti']."</td>"; //tercera
                echo "<td>" . $row['preu']."</td>";
                echo "<td><img src='../img/".$row['foto']."' width='100'></td>";                
                echo "<td>" . $row['nombre_places']."</td>"; //sisena
                echo "<td><a href=\"views/actualitzar.php?actualitza=".$row['codi']."\">Actualitzar</a></td>";
                echo "<td><a href=\"views/eliminar.php?elimina=".$row['codi']."\">Eliminar</a></td>";
                echo "</tr>"; //tanco fila
        }
    }

?>
</table>