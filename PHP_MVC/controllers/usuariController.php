<?php
require_once 'models/usuari.php';
class usuariController{
    
    
    public function mostrarusuaris(){
        $usuari = new usuari();
        $usuaris = $usuari->listar();

        require_once 'views/usuari/mostrarusuari.php';
    }
    
    public function insertarusuaris(){
        require_once 'views/usuari/insertarusuari.php';
    }

    public function guardarusuaris(){
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
}