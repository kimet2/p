<?php
require_once 'models/vol.php';
class volController{

    public function mostrarvols(){
          
        $vol = new vol();
        $vols = $vol->listar();
        
        require_once 'views/vol/mostrarvols.php';
    }

    public function insertarvols(){
        require_once 'views/vol/insertarvols.php';
    }

    public function guardarvols(){
        $vol = new vol();
        $vol->origen = $_POST['origen'];
        $vol->desti = $_POST['desti'];
        $vol->preu = $_POST['preu'];
        $vol->foto = $_POST['foto'];
        $vol->nombre_places = $_POST['nombre_places'];
        $vol->insertar();
        header("Location: index.php?controller=vol&action=mostrarvols");
    }

    public function index(){
        require_once 'index.php';
    }





}

?>