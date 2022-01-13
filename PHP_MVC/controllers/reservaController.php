<?php
require_once 'models/reserva.php';
class reservaController{
    public function mostrarreserva(){  
        /* $vol = new vol();
        $vols = $vol->listar(); */
        $reserva = new reserva();
        $reservas = $reserva->listar();
        require_once 'views/reserva/mostrarreserva.php';
    }
    public function insertarreserva(){
        require_once 'views/reserva/insertarreserva.php';
    }
    public function mostrarinner(){  
        /* $vol = new vol();
        $vols = $vol->listar(); */
        $reserva = new reserva();
        $sql = $reserva->innerjoin();
        require_once 'views/reserva/mostrarreserva.php';
    }
    public function guardarreserva(){
        $reserva = new reserva();
        $reserva->codi_vol = $_POST['codi_vol'];
        $reserva->innerjoin();
        $reserva->data_anada = $_POST['data_anada'];
        $reserva->data_tornada = $_POST['data_tornada'];
        $reserva->nombre_places = $_POST['nombre_places'];
        $reserva->insertar();
        header("Location: index.php?controller=reserva&action=mostrarreserva");

    }

    public function index(){
        require_once 'index.php';
    }
}
?>