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
if(isset($_REQUEST["reservar"])){

    $j = $_REQUEST["reservar"];
    $_SESSION['codi']=$j;
    $_SESSION['preu']=$x;

    $mysql=new mysqli('localhost','root','','vols');
    if($mysql->connect_errno){
        die($mysql->connect_error);
    }
    $sql="SELECT * FROM reserva WHERE codi='$j'";
    $result=$mysql->query($sql);
    $row=$result->fetch_assoc();
}
?>
<form class="container mt-5 mb-5" action="reserva.php" method="post" enctype="multipart/form-data">
    <label for="">Data Viatge</label>
    <input class="form-control"  type="text" name="dataviatge" id="" required><br>
    <label for="">Nombre Plaçes</label>
    <input class="form-control"  type="text" name="nombreplaces" id="" required><br>
    <input class="btn btn-primary"  type="submit" name="registrar" value="Registrar">

</form>
<?php
    if(isset($_REQUEST["registrar"])){
        $codiusuari=$_SESSION['codi'];
        $dataviatge=$_REQUEST['dataviatge'];
        $nombre_plaçes=$_REQUEST['nombreplaces'];
        $total=$_SESSION['preu']*$_REQUEST['nombreplaces'];
    }
?>




    
