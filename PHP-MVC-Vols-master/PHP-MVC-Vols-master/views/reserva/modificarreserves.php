<form action="index.php?controller=reserva&action=actualitzarreserves" method="post">

<div class="form-group">
        <input type="hidden" class="form-control" id="codi" name="codi" value="<?php echo $_REQUEST["codi"];?>">
    </div>

    <div class="form-group">
        <label for="data_anada">Data Anada</label>
        <input type="date" class="form-control" id="data_anada" name="data_anada" value="<?php echo $row["data_anada"];?>">
    </div>
    <div class="form-group">
        <label for="data_tornada">Data Tornada</label>
        <input type="date" class="form-control" id="data_tornada" name="data_tornada" value="<?php echo $row["data_tornada"];?>">
    </div>

    <div class="form-group">
        <label for="nombre_places">Nombre places</label>
        <input type="number" class="form-control" id="nombre_places" name="nombre_places" value="<?php echo $row["nombre_places"];?>">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>