
<h2 class="text-center pt-5 pb-3">Mostrar Vols</h2>
<form class="container mt-5 mb-5" action="views/mostrar.php" method="post" enctype="multipart/form-data">
<table class="table">
        <tr>
            <th>Codi</th>
            <th scope="col">Origen</th>
            <th scope="col">Destí</th>
            <th scope="col">Preu</th>
            <th scope="col">Foto</th>
        </tr>
         
        <?php
        if(isset($_SESSION["foto"])){
            for ($i=0; $i < sizeof($_SESSION['codi']); $i++) { 
                echo "<tr>"; //crea fila
                echo "<td>" . $_SESSION['codi'][$i] . "</td>"; //primera columna
                echo "<td>" . $_SESSION['origen'][$i] . "</td>"; //segona
                echo "<td>" . $_SESSION['desti'][$i] . "</td>"; //tercera
                echo "<td>" . $_SESSION['preu'][$i]."</td>"; //quarta
                echo "<td><img src='" . $_SESSION['foto'][$i] . "'  width=\"50\" height=\"60\"></td>"; //sisena
                echo "</tr>"; //tanco fila
           // session_destroy();
          }     
           }     ?>
        
        </table>   
        </form>  
        
