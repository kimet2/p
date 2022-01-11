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
<h2 class="text-center pt-5 pb-3 ">Login</h2>
    <form class="container mt-5 mb-5 bg-info" action="login.php" method="post">
        <label for="">Introdueix el nom d'usuari</label>
    <input type="text" name="usuari" id="">
    <label for="">Introdueix la teva contrasenya</label>
    <input type="password" name="contrasenya" id="">
    <input class="btn btn-primary" type="submit" name="submit" value="login">

</form>
<?php
if(isset($_REQUEST["submit"])){
    session_start();
    if($_REQUEST["usuari"]=="jmllubes" and 
    $_REQUEST["contrasenya"]=="jmllubes123"){
        $_SESSION["usuari"]="usuari";
        echo "Benvingut usuari";
        header("location:vols.php"); 
    }
    else if($_REQUEST["usuari"]=="admin" and 
    $_REQUEST["contrasenya"]=="admin123"){
        $_SESSION["usuari"]="admin";
        echo "Benvingut admin";
        header("location:vols.php"); 
    }
    else{
        echo "Usuari o contrasenya incorrecta";
    }
}
?>
</body>
</html>