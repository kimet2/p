<h2 class="text-center pt-5 pb-3">Mostrar Vols</h2>

<table class="table">
    <tr>
        <th scope="col">Codi</th>
        <th scope="col">Origen</th>
        <th scope="col">Destí</th>
        <th scope="col">Preu</th>
        <th scope="col">Foto</th>
        <th scope="col">Nombre de places</th>

    </tr>
<?php
$mysql=new mysqli('localhost','root','','vols');
if($mysql->connect_errno){
    die($mysql->connect_error);
}
$sql="SELECT * FROM vol";
$result=$mysql->query($sql);
if($result){

while($row=$result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['codi']."</td>";
    echo "<td>".$row['origen']."</td>";
    echo "<td>".$row['desti']."</td>";
    echo "<td>".$row['preu']."</td>";
    echo "<td><img src='../img/".$row['foto']."' width='100'></td>";
    echo "<td>".$row['nombre_places']."</td>";
    echo "<td><a href=\"views/reserva.php?reservar=".$row['codi']." ".$row['preu']."\">Reserva</a></td>";
    echo "</tr>";
}

}   ?>

</table>

<h2 class="text-center pt-5 pb-3">Mostrar Vols</h2>

<table class="table">
    <tr>
        <th scope="col">Codi</th>
        <th scope="col">Codi_vol</th>
        <th scope="col">Codi_usuari</th>
        <th scope="col">data_viatge</th>
        <th scope="col">data_reserva</th>
        <th scope="col">Nombre de places</th>
        <th scope="col">total</th>
        <th scope="col">Eliminar</th>
        <th scope="col">Modificar</th>


    </tr>
<?php
$mysql=new mysqli('localhost','root','','vols');
if($mysql->connect_errno){
    die($mysql->connect_error);
}
$sql="SELECT * FROM reserva";
$result=$mysql->query($sql);
if($result){

while($row=$result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['codi']."</td>";
    echo "<td>".$row['codi_vol']."</td>";
    echo "<td>".$row['codi_usuari']."</td>";
    echo "<td>".$row['data_viatge']."</td>";
    echo "<td>".$row['data_reserva']."</td>";
    echo "<td>".$row['nombre_places']."</td>";
    echo "<td>".$row['total']."</td>";
    echo "<td><a href=\"views/eliminar2.php?eliminar3=".$row['codi']."\">Eliminar</a></td>";
    echo "<td><a href=\"views/actualitzar2.php?actualitzar3=".$row['codi']."\">Actualitzar</a></td>";
    echo "</tr>";
}

}   ?>

</table>