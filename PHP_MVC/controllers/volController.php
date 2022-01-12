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

    public function actualitzarvols(){
        $vol = new vol();
        $vol->codi = $_POST['codi'];
        $vol->origen = $_POST['origen'];
        $vol->desti = $_POST['desti'];
        $vol->preu = $_POST['preu'];
        $vol->foto = $_POST['foto'];
        $vol->nombre_places = $_POST['nombre_places'];
        $vol->modificar();
        header("Location: index.php?controller=vol&action=mostrarvols");
    }
    public function modificarvols(){
        $vol = new vol();
        $vol->codi = $_GET['codi'];
        $resultado = $vol->buscar();
        $row = $resultado->fetch_assoc();
        require_once 'views/vol/modificarvols.php';
    }

    public function eliminarvols(){
        $vol = new vol();
        $vol->codi = $_GET['codi'];
        $vol->eliminar();
        header("Location: index.php?controller=vol&action=mostrarvols");
    }

    public function index(){
        require_once 'index.php';
    }
}

?>