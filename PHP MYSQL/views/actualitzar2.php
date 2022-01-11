<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
<?php
@session_start();
?>
<div class="p-5 bg-primary text-white text-center">
  <h1>Vols</h1>
  <p>Pràctica de vols amb mysql</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
<?php
  if(isset($_SESSION['user'])){
    echo '<li class="nav-item">
        <a class="nav-link" href="login.php">Logout</a>
      </li>';
  }
?>
    </ul>
  </div>
</nav>

<h2 class="text-center pt-5 pb-3">Modificar Vols</h2>
<?php 
@session_start();
if(isset($_REQUEST["actualitzar3"])){
    $j = $_REQUEST["actualitzar3"];
    $_SESSION['codi']=$j;
    $mysql=new mysqli('localhost','root','','vols');
    if($mysql->connect_errno){
        die($mysql->connect_error);
    }
    $sql="SELECT * FROM reserva WHERE codi='$j'";
    $result=$mysql->query($sql);
    $row=$result->fetch_assoc();

?>
<form class="container mt-5 mb-5" action="actualitzar2.php" method="post" enctype="multipart/form-data">
    <label for="">Codi_vol</label>
    <input class="form-control"  type="text" name="codi_vol" value="<?php echo $row['codi_vol'];?>" required><br>
    <label for="">Codi_usuari</label>
    <input class="form-control"  type="text" name="codi_usuari" value="<?php echo $row['codi_usuari'];?>" required><br>
    <label for="">data_viatge</label>
    <input class="form-control"  type="date" name="data_viatge"value="<?php echo $row['data_viatge'];?>" required><br>
    <label for="">data_reserva</label>
    <input class="form-control"  type="date" name="data_reserva"value="<?php echo $row['data_reserva'];?>" required><br>
    <label for="">Nombre places</label>
    <input class="form-control"  type="number" name="nombreplaces" value="<?php echo $row['nombre_places'];?>" required><br>
    <label for="">Total</label>
    <input class="form-control"  type="number" name="total" value="<?php echo $row['total'];}?>" required><br>
    <input class="btn btn-primary"  type="submit" name="registrar" value="Registrar">

</form>
<?php

if(isset($_REQUEST["registrar"])){
    $codivol=$_REQUEST["codi_vol"];
    $codiusuari=$_REQUEST["codi_usuari"];
    $dataviatge=$_REQUEST["data_viatge"];
    $datareserva=$_REQUEST["data_reserva"];
    $nombre_places=$_REQUEST["nombreplaces"];
    $total=$_REQUEST["total"];
    $mysql=new mysqli('localhost','root','','vols');
    if($mysql->connect_errno){
        die($mysql->connect_error);
    }
    $sql="UPDATE reserva SET codi_vol='$codivol', codi_usuari='$codiusuari', data_viatge='$dataviatge', 
    data_reserva='$datareserva',nombre_places='$nombre_places',total='$total' WHERE codi=".$_SESSION['codi'];
    $result=$mysql->query($sql);
    
    header("Location:../index.php");
}
?>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>