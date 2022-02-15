<?php
require_once 'models/ticket.php';

class ticketController{

    public function mostrartickets(){
        $ticket = new ticket();
        $resultat = $ticket->mostrar();
        require_once 'views/ticket/mostrartickets.php';
    }

    public function eliminartickets(){
        if(isset($_GET['codi'])){
            $id = $_GET['codi'];
            $ticket = new ticket();
            $ticket->setCodi($id);
            $ticket->eliminar();
        }
        header('Location: index.php?controller=ticket&action=mostrartickets');
    }
    public function modificartickets(){
        if(isset($_GET['codi'])){
            $id = $_GET['codi'];
            $ticket = new ticket();
            $ticket->setCodi($id);
            $r = $ticket->buscar();
            $row = $r->fetch_assoc();
        }
        require_once 'views/ticket/modificartickets.php';
    }
    public function actualizartickets(){
        $ticket = new ticket();
        $ticket->setCodi($_POST['codi']);
        $ticket->setData_ticket($_POST['data_ticket']);
        $ticket->setTotal($_POST['total']);
        $ticket->modificar();
        header("Location: index.php?controller=ticket&action=mostrartickets");
    }
    public function pagartickets(){
        $ticket = new ticket();
        $ticket->setCodi_reserva($_GET['codi']);
        $ticket->insertar();
        header("Location: index.php?controller=ticket&action=mostrartickets");
    }

}

?>