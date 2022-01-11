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
    <?php
    @session_start();
    if(isset($_REQUEST["actualitza"])){// url del boto actualitzar del index
        $j=$_REQUEST['actualitza'];
        $_SESSION["index"] = $j;
    }
    
    ?>
    <<h2 class="text-center pt-5 pb-3 ">Afegir productes</h2>

    <form action="actualitza.php" method="post" enctype="multipart/form-data">

    <label for="">Codi</label>
    <input class="form-control" type="number" name="codi" id="" <?php echo "value=".$_SESSION['codi'][$j]; ?>><br>
    <label for="">Nom</label>
    <input class="form-control" type="text" name="nom" id="" <?php echo "value=".$_SESSION['nom'][$j]; ?>><br>
    <label for="">Preu</label>
    <input class="form-control" type="number" name="preu" id="" <?php echo "value=".$_SESSION['preu'][$j]; ?>><br>
    <label for="">Foto</label>
    <input class="form-control" type="file" name="foto" id="" <?php echo "value=".$_SESSION['foto'][$j]; ?>><br>
    <input class="btn btn-primary" type="submit" name="actualitzar" value="Registrar">

</form>
<?php
    if(isset($_REQUEST["actualitzar"])){// url del botó
        $j= $_SESSION["index"];
        $_SESSION["codi"][$j]=$_REQUEST["codi"];
        $_SESSION["nom"][$j]=$_REQUEST["nom"];
        $_SESSION["preu"][$j]=$_REQUEST["preu"];
        copy($_FILES['foto']['tmp_name'], "img/" . $_FILES['foto']['name']);
        $_SESSION["foto"][$j]="img/" . $_FILES['foto']['name'];
        header("Location:index.php");
    }
?>
</body>
</html>