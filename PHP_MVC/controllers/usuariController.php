<?php
require_once 'models/usuari.php';
@session_start();
class usuariController{
    
    
    public function mostrarusuari(){
        if($_SESSION['rol']=='admin'){
        $usuari = new usuari();
        $usuaris = $usuari->listar();

        require_once 'views/usuari/mostrarusuari.php';
    }
}
    
    public function insertarusuari(){
        if($_SESSION['rol']=='admin'){
        require_once 'views/usuari/insertarusuari.php';
    }
}
public function mostrarusuariid(){
    if($_SESSION['rol']=='admin' and isset($_GET['codi'])){
        $id = $_GET['codi'];
        $usuari = new usuari();
        $usuari->setCodi($id);
        $usuari = $usuari->buscar();
    }
    require_once 'views/usuari/show.php';
}


    public function guardarusuari(){
        $usuari = new usuari();
        $usuari->nom = $_POST['nom'];
        $usuari->contrasenya = md5($_POST['contrasenya']);
        $usuari->correu = $_POST['correu'];
        $usuari->adreça = $_POST['adreça'];
        $usuari->dni = $_POST['dni'];
        $usuari->telefon = $_POST['telefon'];
        $usuari->num_tarjeta = $_POST['num_tarjeta'];
        $usuari->insertar();
        header("Location: views/usuari/login.php");
    }

    public function actualitzarusuari(){
        $usuari = new usuari();
        $usuari->codi = $_POST['codi'];
        $usuari->nom = $_POST['nom'];
        $usuari->contrasenya = $_POST['contrasenya'];
        $usuari->correu = $_POST['correu'];
        $usuari->adreça = $_POST['adreça'];
        $usuari->dni = $_POST['dni'];
        $usuari->telefon = $_POST['telefon'];
        $usuari->num_tarjeta = $_POST['num_tarjeta'];
        $usuari->modificar();
        header("Location: index.php?controller=usuari&action=mostrarusuari");
    }
    public function modificarusuari(){
        if(isset($_GET['codi'])){
        $usuari = new usuari();
        $usuari->codi = $_GET['codi'];
        $resultado = $usuari->buscar();
        $row = $resultado->fetch_assoc();
        
    }
    require_once 'views/usuari/modificarusuaris.php';
}

    public function eliminarusuari(){
        if($_SESSION['rol']=='admin' and isset($_GET['codi'])){
            $id = $_GET['codi'];
            $usuari = new usuari();
            $usuari->setCodi($id);
            $usuari->eliminar();
    }
    header("Location: index.php?controller=usuari&action=mostrarusuari");
}
public function logout(){
    session_destroy();
    header('Location: index.php');
}
public function login(){
    $usuari = new usuari();
    $usuari->setCorreu($_POST['correu']);
    $usuari->setContrasenya(md5($_POST['contrasenya']));
    $resultado = $usuari->login();
    $row = $resultado->fetch_assoc();
    echo $row['contrasenya'];
    echo $row['correu'];
    if($row['contrasenya'] == $usuari->getContrasenya()){
        $_SESSION['codi'] = $row['codi'];
        $_SESSION['usuari'] = $row['correu'];
        $_SESSION['rol'] = $row['rol'];
        header('Location: index.php?controller=vol&action=mostrarvols');
    }else{
        header('Location: views/usuari/login.php');
    }
}
}