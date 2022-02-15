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
@session_start();
while($row = $reserves->fetch_assoc()){
    if($row['codi_usuari'] == $_SESSION['codi'] || $_SESSION['rol'] == 'admin'){
        echo "<tr>";
        echo "<td>".$row['codi']."</td>";
        echo "<td>".$row['codi_vol']."</td>";
        echo "<td>".$row['codi_usuari']."</td>";
        echo "<td>".$row['data_anada']."</td>";
        echo "<td>".$row['data_tornada']."</td>";
        echo "<td>".$row['nombre_places']."</td>";
        echo "<td><a href='index.php?controller=reserva&action=modificarreserva&codi=".$row['codi']."'>Modificar</a></td>";
        echo "<td><a href='index.php?controller=reserva&action=eliminarreserva&codi=".$row['codi']."'>Eliminar</a></td>";
        echo "<td><a href='index.php?controller=ticket&action=pagartickets&codi=".$row['codi']."'>Pagar</a></td>";
        echo "</tr>";
    }
   
}
?>
</table>

<!-- <?php require_once('config.php'); ?>
<form action="charge.php" method="post">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $stripe['publishable_key']; ?>"
        data-description="Envia un donativo simbolico de 1€"
        data-amount="100"
        data-currency="eur"
        data-locale="es"></script>
</form> -->