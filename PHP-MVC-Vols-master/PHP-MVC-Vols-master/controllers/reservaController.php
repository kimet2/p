<?php
require_once 'models/reserva.php';

class reservaController{

    public function mostrarreserves(){
        $reserva = new reserva();
        $reserves = $reserva->mostrar();
        require_once 'views/reserva/mostrarreserves.php';
    }
    public function insertarreserves(){        
        require_once 'views/reserva/insertarreserves.php';
    }
    public function eliminarreserves(){
        if(isset($_GET['codi'])){
            $id = $_GET['codi'];
            $reserva = new reserva();
            $reserva->setCodi($id);
            $reserva->eliminar();
        }
        header('Location: index.php?controller=reserva&action=mostrarreserves');
    }
    public function modificarreserves(){
        if(isset($_GET['codi'])){
            $id = $_GET['codi'];
            $reserva = new reserva();
            $reserva->setCodi($id);
            $r = $reserva->buscar();
            $row = $r->fetch_assoc();
        }
        require_once 'views/reserva/modificarreserves.php';
    }
    public function actualitzarreserves(){
        $reserva = new reserva();
        $reserva->setCodi($_POST['codi']);
        $reserva->setData_tornada($_POST['data_tornada']);
        $reserva->setDataAnada($_POST['data_anada']);
        $reserva->setNombrePlaces($_POST['nombre_places']);
        $reserva->modificar();
        header("Location: index.php?controller=reserva&action=mostrarreserves");
    }
    public function guardarreserves(){
        $reserva = new reserva();
        $reserva->setCodiUsuari($_POST['codi_usuari']);
        $reserva->setCodiVol($_POST['codi_vol']);
        $reserva->setData_tornada($_POST['data_tornada']);
        $reserva->setDataAnada($_POST['data_anada']);
        $reserva->setNombrePlaces($_POST['nombre_places']);
        $reserva->insertar();
        header("Location: index.php?controller=reserva&action=mostrarreserves");
    }
}