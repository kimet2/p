<form action="index.php?controller=reserva&action=actualitzarreserva" method="post">
        
<input class="form-control" id="codi" name="codi" type="hidden" value=<?php echo $row['codi'];?>>         
<input type="hidden" type="text" class="form-control" id="codi_vol" name="codi_vol" value=<?php echo $row['codi_vol'];?>>
    <div class="form-group">
        <label for="data_anada">Data anada</label>
        <input type="date" class="form-control" id="data_anada" name="data_anada" value=<?php echo $row['data_anada'];?>>
    </div>
    <div class="form-group">
        <label for="data_tornada">Data tornada</label>
        <input type="date" class="form-control" id="data_tornada" name="data_tornada" value=<?php echo $row['data_tornada'];?>>
    </div>
    <div class="form-group">
        <label for="nombre_places">Nombre places</label>
        <input type="text" class="form-control" id="nombre_places" name="nombre_places" value=<?php echo $row['nombre_places'];?>>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

