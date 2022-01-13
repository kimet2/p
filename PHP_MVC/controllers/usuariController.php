<?php
require_once 'models/usuari.php';
class usuariController{
    
    
    public function mostrarusuari(){
        $usuari = new usuari();
        $usuaris = $usuari->listar();

        require_once 'views/usuari/mostrarusuari.php';
    }
    
    public function insertarusuari(){
        require_once 'views/usuari/insertarusuari.php';
    }

    public function guardarusuari(){
        $usuari = new usuari();
        $usuari->nom = $_POST['nom'];
        $usuari->contrasenya = $_POST['contrasenya'];
        $usuari->correu = $_POST['correu'];
        $usuari->adreça = $_POST['adreça'];
        $usuari->dni = $_POST['dni'];
        $usuari->telefon = $_POST['telefon'];
        $usuari->num_tarjeta = $_POST['num_tarjeta'];
        $usuari->insertar();
        header("Location: index.php?controller=usuari&action=mostrarusuari");
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
        $usuari = new usuari();
        $usuari->codi = $_GET['codi'];
        $resultado = $usuari->buscar();
        $row = $resultado->fetch_assoc();
        require_once 'views/usuari/modificarusuaris.php';
    }

    public function eliminarusuari(){
        $usuari = new usuari();
        $usuari->codi = $_GET['codi'];
        $usuari->eliminar();
        header("Location: index.php?controller=usuari&action=mostrarusuari");
    }

}