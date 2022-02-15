<form action="index.php?controller=reserva&action=guardarreserva" method="post">
<?php @session_start(); ?>
         <input type="hidden" type="text" class="form-control" id="codi_vol" name="codi_vol" value=<?php echo $_REQUEST['codi'];?>>
     <div class="form-group">
        <label for="codi_usuari">Codi Usuari</label>
        <input type="hidden" class="form-control" id="codi_usuari" name="codi_usuari" value="<?php echo $_SESSION['codi'];?>">
    </div> 
    <div class="form-group">
        <label for="data_anada">Data anada</label>
        <input type="date" class="form-control" id="data_anada" name="data_anada" placeholder="Data Anada">
    </div>
    <div class="form-group">
        <label for="data_tornada">Data tornada</label>
        <input type="date" class="form-control" id="data_tornada" name="data_tornada" placeholder="Data Tornada">
    </div>
    <div class="form-group">
        <label for="nombre_places">Nombre places</label>
        <input type="text" class="form-control" id="nombre_places" name="nombre_places" placeholder="Nombre places">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

