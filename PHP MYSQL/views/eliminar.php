<?php 
if(isset($_REQUEST["elimina"])){
    $j = $_REQUEST["elimina"];
    $mysql=new mysqli('localhost','root','','vols');
    if($mysql->connect_errno){
        die($mysql->connect_error);
    }
    $sql="DELETE FROM vol WHERE codi='$j'";
    $result=$mysql->query($sql);
    header("Location:../index.php");
}
?>