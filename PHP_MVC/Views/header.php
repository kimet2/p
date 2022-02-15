<!DOCTYPE html>
<html lang="en">
<head>
  <title>MVC vols</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="p-5 bg-primary text-white text-center">
  <h1>MVC vols</h1>
</div>
<?php @session_start(); ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
    <?php if(!isset($_SESSION['usuari'])){
       header("Location: views/usuari/login.php");
    }
    else if($_SESSION['rol'] == 'admin'){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=vol&action=mostrarvols">Mostrar vols</a>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=vol&action=insertarvols">Insertar vols</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php?controller=usuari&action=mostrarusuari">Mostrar usuaris</a>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=usuari&action=insertarusuari">Insertar usuaris</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=reserva&action=mostrarreserva">Mostrar reserva</a>
    </li> 
    <li class="nav-item">
        <a class="nav-link" href="index.php?controller=ticket&action=mostrarticket">Mostrar tickets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=usuari&action=logout">Log out</a>
      </li>
      <?php } 
      else if($_SESSION['rol'] == 'usuari'){
        ?>
        <li class="nav-item">
        <a class="nav-link" href="index.php?controller=vol&action=mostrarvols">Mostrar vols</a>
        <li class="nav-item">
        <a class="nav-link" href="index.php?controller=reserva&action=mostrarreserva">Mostrar reserva</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=usuari&action=logout">Log out</a>
      </li>
      <?php } ?>
    </ul>
  </div>
</nav>