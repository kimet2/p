<form action="index.php?controller=usuari&action=actualitzarusuaris" method="post">
<div class="form-group">
        <input type="hidden" class="form-control" id="codi" name="codi" value="<?php echo $row['codi'];?>">
    </div>
    <div class="form-group">
        <label for="dni">DNI</label>
        <input type="text" class="form-control" id="dni" name="dni" value="<?php echo $row['dni'];?>">
    </div>
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $row['nom'];?>">
    </div>
    <div class="form-group">
        <label for="correu">Correu</label>
        <input type="text" class="form-control" id="correu" name="correu" value="<?php echo $row['correu'];?>">
    </div>
    <div class="form-group">
        <label for="adreça">Adreça</label>
        <input type="text" class="form-control" id="adreça" name="adreça" value="<?php echo $row['adreça'];?>">
    </div>
    <div class="form-group">
        <label for="telefon">Telefon</label>
        <input type="text" class="form-control" id="telefon" name="telefon" value="<?php echo $row['telefon'];?>">
    </div>
    <div class="form-group">
        <label for="num_tarjeta">Num tarjeta</label>
        <input type="text" class="form-control" id="num_tarjeta" name="num_tarjeta" value="<?php echo $row['num_tarjeta'];?>">
    </div>
    <div class="form-group">
        <label for="contrasenya">Contrasenya</label>
        <input type="text" class="form-control" id="contrasenya" name="contrasenya" placeholder="Contrasenya" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>