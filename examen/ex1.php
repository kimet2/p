<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
        <h2 class="text-center pt-5 pb-3 ">NOTES ALUMNES</h2>

        <form action="ex1.php" method="post" enctype="multipart/form-data">

        <label for="">Nom</label>
        <input class="form-control" type="text" name="nom" id="" required><br>
        <label for="">Nota 1T</label>
        <input class="form-control" type="number" name="nota1" id="" required><br>
        <label for="">Nota 2T</label>
        <input class="form-control" type="number" name="nota2" id="" required><br>
        <label for="">Nota 3T</label>
        <input class="form-control" type="number" name="nota3" id="" required><br>
        <input class="btn btn-primary" type="submit" name="registrar" value="Registrar">

</form>

    <?php
        @session_start();
        if(isset($_REQUEST["registrar"])){
            $_SESSION["nom"][]=$_REQUEST["nom"];
            $_SESSION["nota1"][]=$_REQUEST["nota1"];
            $_SESSION["nota2"][]=$_REQUEST["nota2"];
            $_SESSION["nota3"][]=$_REQUEST["nota3"];
            //$_SESSION["promedio"][]=($_REQUEST["nota1"]+$_REQUEST["nota2"]+$_REQUEST["nota3"]/3);
        }
    ?>
    <h2 class="text-center pt-5 pb-3 ">NOTES DELS ALUMNES</h2>
    <div class="container mt-5 mb-5">
    <table class="table">
    <tr>
        <th>Nom</th>
        <th>Nota 1T</th>
        <th>Nota 2T</th>
        <th>Nota 3T</th>
        <th>Nota FINAL</th>
    </tr>

    <?php
         if(isset($_SESSION["nom"])){
            for ($i=0; $i < sizeof($_SESSION['nota1']); $i++) { 
                if((($_SESSION['nota1'][$i] + $_SESSION['nota2'][$i] + $_SESSION['nota3'][$i])/3)>=5){
                    echo "<tr>"; //crea fila
                    echo "<td><FONT COLOR='green'>" . $_SESSION['nom'][$i] . "</FONT></td>"; //primera columna
                    echo "<td><FONT COLOR='green'>" . $_SESSION['nota1'][$i] . "</FONT></td>"; //segona
                     echo "<td><FONT COLOR='green'>" . $_SESSION['nota2'][$i]."</FONT></td>"; //tercera
                    echo "<td><FONT COLOR='green'>" . $_SESSION['nota3'][$i] . "</FONT></td>"; //sisena
                    echo "<td><FONT COLOR='green'>" . (($_SESSION['nota1'][$i] + $_SESSION['nota2'][$i] + $_SESSION['nota3'][$i])/3) . "</FONT></td>";
                    echo "</tr>"; //tanco fila
                }else{
                    echo "<tr>"; //crea fila
                    echo "<td><FONT COLOR='FF0000'>" . $_SESSION['nom'][$i] . "</FONT></td>"; //primera columna
                    echo "<td><FONT COLOR='FF0000'>" . $_SESSION['nota1'][$i] . "</FONT></td>"; //segona
                     echo "<td><FONT COLOR='FF0000'>" . $_SESSION['nota2'][$i]."</FONT></td>"; //tercera
                    echo "<td><FONT COLOR='FF0000'>" . $_SESSION['nota3'][$i] . "</FONT></td>"; //sisena
                    echo "<td><FONT COLOR='FF0000'>" . (($_SESSION['nota1'][$i] + $_SESSION['nota2'][$i] + $_SESSION['nota3'][$i])/3) . "</FONT></td>";
                    echo "</tr>"; //tanco fila
                }
                
            
          }     
           } 
         // session_destroy();
           ?>
    
</table>
        </div>
    
</body>
</html>