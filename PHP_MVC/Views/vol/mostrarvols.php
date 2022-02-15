<!-- <table style="border: 1;">
    <tr>
    <th>codi</th>
    <th>origen</th>
    <th>desti</th>
    <th>preu</th>
    <th>foto</th>
    <th>nombre_places</th>
    <th>modificar</th>
    <th>eliminar</th>
    <th>Reservar</th>
    
    </tr>
while($row = $vols->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['codi']."</td>";
    echo "<td>".$row['origen']."</td>";
    echo "<td>".$row['desti']."</td>";
    echo "<td>".$row['preu']."</td>";
    echo "<td><img src='views/vol/img/".$row['foto']."' width=\"50\" height=\"60\"></td>";                
    echo "<td>".$row['nombre_places']."</td>";
    echo "<td><a href='index.php?controller=vol&action=modificarvols&codi=".$row['codi']."'>Modificar</a></td>";
    echo "<td><a href='index.php?controller=vol&action=eliminarvols&codi=".$row['codi']."'>Eliminar</a></td>";
    echo "<td><a href='index.php?controller=reserva&action=insertarreserva&codi=".$row['codi']."'>Reservar</a></td>";
    echo "</tr>";
}
echo "</table>";  -->
<div class="row">
<?php while($row = $vols->fetch_assoc()){?>

<div class="card col-md-6 col-lg-4 col-xl-3">
  <img class="card-img-top" src="views/vol/img/<?php echo $row['foto'];?>" alt="Card image cap">
  <div class="card-body">
	<h5 class="card-title"><?php echo $row['origen'] . " -> " . $row['desti'];?></h5>
	<p class="card-text">Preu: <?php echo $row['preu'];?> €</p>
	<p class="card-text">Places: <?php echo $row['nombre_places'];?></p>
  <?php if($_SESSION['rol'] == 'admin'){?>
   
	<a href="index.php?controller=vol&action=modificarvols&codi=<?php echo $row['codi'];?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
	<a href="index.php?controller=vol&action=eliminarvols&codi=<?php echo $row['codi'];?>" class="btn btn-primary"><i class="bi bi-trash"></i></a>
  <?php }?>
  <a href="index.php?controller=reserva&action=insertarreserva&codi=<?php echo $row['codi'];?>" class="btn btn-primary"><i class="bi bi-calendar2-plus"></i></a>
  </div>
</div>

<?php } ?>
</div>