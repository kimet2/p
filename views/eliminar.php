

<h2 class="text-center pt-5 pb-3">Eliminar Vols</h2>
<form action="views/eliminar.php" method="post" enctype="multipart/form-data">

<select class="text-center p-3 pb-3 border text-primary shadow-lg p-3 mb-5 bg-body rounded" name="vols" required>
    <?php
        @session_start();
        if(isset($_SESSION["foto"])){
            for($i=0;$i<sizeof($_SESSION['codi']);$i++){
                echo "<option value='$i'>".$_SESSION['codi'][$i] .' '.
                $_SESSION['origen'][$i] .' ' . $_SESSION ['desti'][$i] .' ' . $_SESSION 
                ['preu'][$i] .' ' . $_SESSION ['foto'][$i] ;    
            }
        }
    ?>

    <br>
    <br>
    </select> 
    <input type="submit" name="Eliminar" value="Elimina" class="btn btn-primary">
    </form>
    
    <?php

        if(isset($_REQUEST["Eliminar"])){
            $j=$_REQUEST["vols"];
            unset($_SESSION['codi'][$j]);
            unset($_SESSION['origen'][$j]);
            unset($_SESSION['desti'][$j]);
            unset($_SESSION['preu'][$j]);
            unset($_SESSION['foto'][$j]);
           header("Location:../vols.php");
        }
    ?>
    
    
