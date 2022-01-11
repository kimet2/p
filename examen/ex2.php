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
<h2 class="text-center pt-5 pb-3 ">Formulari inicial</h2>

<form action="ex2.php" method="post" enctype="multipart/form-data">

<label for="">Introdueix el tipus d'input</label>
<input class="form-control" type="text" name="tinput" id="" required><br>
<label for="">Introdueix el nom d'input</label>
<input class="form-control" type="text" name="ninput" id="" required><br>
<input class="btn btn-primary" type="submit" name="registrar" value="Enviar">

</form>

<?php
@session_start();
if(isset($_REQUEST["registrar"])){
    $_SESSION["tinput"][]=$_REQUEST["tinput"];
    $_SESSION["text"][]=$_REQUEST["text"];
}
?>

<h2 class="text-center pt-5 pb-3 ">Formulari Generat</h2>
<div class="container mt-5 mb-5">
    
<?php
         if(isset($_SESSION["tinput"])){
            for ($i=0; $i < sizeof($_SESSION['ninput']); $i++) { 
                echo "<br>";
                echo "<label for=''>" . $_SESSION['tinput'][$i] . "</label>";
                echo "<br>"; 
                echo "<label for=''>" . $_SESSION['text'][$i] . "</label>"; 
          }     
           } 
           //session_destroy();
           ?>
