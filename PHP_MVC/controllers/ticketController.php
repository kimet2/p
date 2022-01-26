<?php
require_once 'models/ticket.php';
class reservaController{
    public function mostrartickets(){  
        $ticket = new ticket();
        $tickets = $ticket->mostrar();
        require_once 'views/ticket/mostrarticket.php';
    }
    public function eliminartickets(){
        if(isset($_GET['codi'])){
            $id = $_GET['codi'];
            $ticket = new ticket();
            $ticket->setCodi($id);
            $ticket->eliminar();
        }
        header('Location: index.php?controller=ticket&action=mostrarticket');
    }
    public function pagartickets(){
        $ticket = new ticket();
        $ticket->setCodi_reserva($_GET['codi']);
        $ticket->insertar();
        header("Location: index.php?controller=ticket&action=mostrarticket");
    }

    public function index(){
        require_once 'index.php';
    }
}
?>