<form action="index.php?controller=reserva&action=guardarreserves" method="post">

<div class="form-group">
        <input type="hidden" class="form-control" id="codi_vol" name="codi_vol" value="<?php echo $_REQUEST["codi"];?>">
    </div>

    <div class="form-group">
        <label for="data_anada">Data Anada</label>
        <input type="date" class="form-control" id="data_anada" name="data_anada" placeholder="Data Reserva">
    </div>
    <div class="form-group">
        <label for="data_tornada">Data Tornada</label>
        <input type="date" class="form-control" id="data_tornada" name="data_tornada" placeholder="Data Inici">
    </div>

    <div class="form-group">
        <label for="nombre_places">Nombre places</label>
        <input type="number" class="form-control" id="nombre_places" name="nombre_places" placeholder="Num Persones">
    </div>
    
    <div class="form-group">
        <label for="codi_usuari">Codi usuari</label>
        <input type="text" class="form-control" id="codi_usuari" name="codi_usuari" placeholder="codi_usuari">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>