<?php 
require_once 'models/usuari.php';
@session_start();
class usuariController{
        
        public function mostrarusuaris(){
            if($_SESSION['rol']=='admin'){
                $usuari = new usuari();
                $usuaris = $usuari->mostrar();
                require_once 'views/usuaris/mostrarusuaris.php';
            }
            
        }
        
        public function mostrarusuariid(){
            if($_SESSION['rol']=='admin' and isset($_GET['codi'])){
                $id = $_GET['codi'];
                $usuari = new usuari();
                $usuari->setCodi($id);
                $usuari = $usuari->buscar();
            }
            require_once 'views/usuaris/show.php';
        }

        public function guardarusuari(){
            
            $usuari = new usuari();
            $usuari->setNom($_POST['nom']);
            $usuari->setDni($_POST['dni']);
            $usuari->setCorreu($_POST['correu']);
            $usuari->setContrasenya(md5($_POST['contrasenya']));
            $usuari->setAdreça($_POST['adreça']);
            $usuari->setTelefon($_POST['telefon']);
            //$usuari->setNum_tarjeta($_POST['num_tarjeta']);
            $usuari->insertar();
            header("Location: views/usuaris/login.php");
        }
        
        public function eliminarusuaris(){
            if($_SESSION['rol']=='admin' and isset($_GET['codi'])){
                $id = $_GET['codi'];
                $usuari = new usuari();
                $usuari->setCodi($id);
                $usuari->eliminar();
            }
            header('Location: index.php?controller=usuari&action=mostrarusuaris');
        }
        
        public function modificarusuaris(){
            if(isset($_GET['codi'])){
                $id = $_GET['codi'];
                $usuari = new usuari();
                $usuari->setCodi($id);
                $r = $usuari->buscar();
                $row = $r->fetch_assoc();
            }
            require_once 'views/usuaris/modificarusuaris.php';
        }
        
        public function insertarusuaris(){
            if($_SESSION['rol']=='admin'){
            require_once 'views/usuaris/insertarusuaris.php';
            }
        }

        public function logout(){
            session_destroy();
            header('Location: index.php');
        }


        public function login(){
            $usuari = new usuari();
            $usuari->setCorreu($_POST['correu']);
            $usuari->setContrasenya(md5($_POST['contrasenya']));
            $r = $usuari->login();
            $row = $r->fetch_assoc();
            echo $row['contrasenya'];
            echo $row['correu'];
            if($row['contrasenya'] == $usuari->getContrasenya()){
                $_SESSION['codi'] = $row['codi'];
                $_SESSION['usuari'] = $row['correu'];
                $_SESSION['rol'] = $row['rol'];
                header('Location: index.php?controller=vol&action=mostrarvols');
            }else{
                header('Location: views/usuaris/login.php');
            }
        }

        public function actualitzarusuaris(){
            
                $usuari = new usuari();
                $usuari->setCodi($_POST['codi']);
                $usuari->setNom($_POST['nom']);
                $usuari->setContrasenya(md5($_POST['contrasenya']));
                $usuari->setCorreu($_POST['correu']);
                $usuari->setAdreça($_POST['adreça']);
                $usuari->setDni($_POST['dni']);
                $usuari->setTelefon($_POST['telefon']);
                $usuari->setNum_tarjeta($_POST['num_tarjeta']);
                $usuari->modificar();
                header('Location: index.php?controller=usuari&action=mostrarusuaris');
            
        }
}
