<?php 
if(isset($_REQUEST["eliminar3"])){
    $j = $_REQUEST["eliminar3"];
    $mysql=new mysqli('localhost','root','','vols');
    if($mysql->connect_errno){
        die($mysql->connect_error);
    }
    $sql="DELETE FROM reserva WHERE codi='$j'";
    $result=$mysql->query($sql);
    header("Location:../index.php");
}
?>