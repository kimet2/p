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
        $reserva->nom = $_POST['nom'];
        $reserva->contrasenya = $_POST['contrasenya'];
        $reserva->correu = $_POST['correu'];
        $reserva->adreça = $_POST['adreça'];
        $reserva->dni = $_POST['dni'];
        $reserva->telefon = $_POST['telefon'];
        $reserva->num_tarjeta = $_POST['num_tarjeta'];
        $reserva->modificar();
        header("Location: index.php?controller=usuari&action=mostrarusuari");
    }
    public function index(){
        require_once 'index.php';
    }
}
?>