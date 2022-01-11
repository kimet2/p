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
    <h2 class="text-center pt-5 pb-3 bg-info text-dark">Inscripció dades alumnes</h2>

    <form class="container mt-5 mb-5 bg-info" action="alumnes.php" method="post" enctype="multipart/form-data">
    <div class="p-3 mb-2 bg-transparent text-dark"></div>
    <label for="">Nom complet</label>
    <input class="form-control"type="text" name="nom" id="" required><br>
    <label for="">DNI</label>
    <input class="form-control"class="form-control"type="text" name="dni" id="" required><br>
    <label for="">Telefon</label>
    <input class="form-control"type="text" name="telefon" id="" required><br>
    <label for="">Email</label>
    <input class="form-control"type="email" name="email" id="" required><br>
    <label for="">Data de naixement</label>
    <input class="form-control"type="date" name="data" id="" required><br>
    <label for="">Comarca</label>
    <select name="comarca" id="" required>
        <option value="segria">segria</option>
        <option value="urgell">urgell</option>
        <option value="noguera">noguera</option>
        <option value="segarra">segarra</option>
    </select><br>
    <h3 class="pt-5 pb-3">Cicle formatiu</h3>
    <div class="form-check">CFGS DAM<input class="form-check-input"type="checkbox" value="CFGS_DAM" name="CFGS_DAM" id=""></div>
    <div class="form-check">CFGS ARI<input class="form-check-input"type="checkbox" value="CFGS_ARI" name="CFGS_ARI" id=""></div>
    <div class="form-check">CFGS AUTO<input class="form-check-input"type="checkbox" value="CFGS_AUTO" name="CFGS_AUTO" id=""></div>
    <div class="form-check">CFGS MP<input class="form-check-input"type="checkbox" value="CFGS_MP" name="CFGS_MP" id=""><br></div>
    <label for="">Observacions</label><br><br>
    <textarea name="observacions" id="" cols="30" rows="10" ></textarea><br><br>
    <label for="">Foto carnet</label><br>
    <input class="form-control"type="file" name="foto" id="" ><br>
    <label for="">Currículum</label><br>
    <input class="form-control"type="file" name="curriculum" id=""><br><br>
    <input class="form-control bg-warning text-dark"type="submit" name="registrar" value="registrar">



    </form>
</body>
</html>

