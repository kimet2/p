<form action="index.php?controller=usuari&action=guardarusuaris" method="post">

    <div class="form-group">
        <label for="origen">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
    </div>
    <div class="form-group">
        <label for="desti">Contrasenya</label>
        <input type="password" class="form-control" id="contrasenya" name="contrasenya" placeholder="Contrasenya">
    </div>
    <div class="form-group">
        <label for="preu">Correu</label>
        <input type="text" class="form-control" id="correu" name="correu" placeholder="Correu">
    </div>
    <div class="form-group">
        <label for="foto">Adreça</label>
        <input type="text" class="form-control" id="adreça" name="adreça" placeholder="Adreça">
    </div>
    <div class="form-group">
        <label for="nombre_places">Dni</label>
        <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI">
    </div>
    <div class="form-group">
        <label for="nombre_places">Telefon</label>
        <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon">
    </div>
    <div class="form-group">
        <label for="nombre_places">Numero_tarjeta</label>
        <input type="text" class="form-control" id="num_tarjeta" name="num_tarjeta" placeholder="NumeroTarjeta">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>