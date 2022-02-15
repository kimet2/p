<?php
require_once 'models/reserva.php';
class reservaController{
    public function mostrarreserva(){  
        /* $vol = new vol();
        $vols = $vol->listar(); */
        $reserva = new reserva();
        $reserves = $reserva->mostrar();
        require_once 'views/reserva/mostrarreserva.php';
    }
    public function insertarreserva(){
        require_once 'views/reserva/insertarreserva.php';
    }

    public function guardarreserva(){
        $reserva = new reserva();
        $reserva->codi_vol = $_POST['codi_vol'];
        $reserva->codi_usuari = $_POST['codi_usuari'];
        $reserva->data_anada = $_POST['data_anada'];
        $reserva->data_tornada = $_POST['data_tornada'];
        $reserva->nombre_places = $_POST['nombre_places'];
        $reserva->insertar();
        header("Location: index.php?controller=reserva&action=mostrarreserva");

    }

    public function actualitzarreserva(){
        $reserva = new reserva();
        $reserva->codi = $_POST['codi'];
        $reserva->data_anada = $_POST['data_anada'];
        $reserva->data_tornada = $_POST['data_tornada'];
        $reserva->nombre_places = $_POST['nombre_places'];
        $reserva->modificar();
        header("Location: index.php?controller=reserva&action=mostrarreserva");
    }
    public function modificarreserva(){
        if(isset($_GET['codi'])){
            $id = $_GET['codi'];
            $reserva = new reserva();
            $reserva->codi = $_GET['codi'];
            $resultado = $reserva->buscar();
            $row = $resultado->fetch_assoc();
        }
        
        require_once 'views/reserva/modificarreservas.php';
    }

    public function eliminarreserva(){
        if(isset($_GET['codi'])){
        $id = $_GET['codi'];
        $reserva = new reserva();
        $reserva->codi = $_GET['codi'];
        $reserva->eliminar();
        }
        header("Location: index.php?controller=reserva&action=mostrarreserva");

    }

    public function index(){
        require_once 'index.php';
    }
}
?>