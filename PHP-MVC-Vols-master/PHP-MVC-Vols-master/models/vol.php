<?php
require_once("config/database.php");
class vol{
public $codi;
public $origen;
public $desti;
public $preu;
public $foto;
public $nombre_places;





public function insertar(){
    
    $conexion = new database();
    $sql = "INSERT INTO vol (origen,desti,preu,foto,nombre_places) VALUES ('$this->origen','$this->desti','$this->preu','$this->foto','$this->nombre_places')";
    $a = $conexion->connect();
    $a->query($sql);
    $a->close();
}

public function eliminar(){
    $conexion = new database();
    $sql = "DELETE FROM vol WHERE codi = '$this->codi'";
    $a = $conexion->connect();
    $a->query($sql);
    $a->close();
}

public function modificar(){
    $conexion = new database();
    $sql = "UPDATE vol SET origen = '$this->origen', desti = '$this->desti', preu = '$this->preu', foto = '$this->foto', nombre_places = '$this->nombre_places' WHERE codi = '$this->codi'";
    $a = $conexion->connect();
    $a->query($sql);
    $a->close();
}
 
public function buscar(){
    $conexion = new database();
    $sql = "SELECT * FROM vol WHERE codi = '$this->codi'";
    $a = $conexion->connect();
    $resultado = $a->query($sql);
    $a->close();
    return $resultado;
}

public function listar(){
    $conexion = new database();
    $sql = "SELECT * FROM vol";
    $a = $conexion->connect();
    $resultado = $a->query($sql);
    $a->close();
    return $resultado;
}

/**
 * Get the value of codi
 */ 
public function getCodi()
{
return $this->codi;
}

/**
 * Set the value of codi
 *
 * @return  self
 */ 
public function setCodi($codi)
{
$this->codi = $codi;

return $this;
}

/**
 * Get the value of origen
 */ 
public function getOrigen()
{
return $this->origen;
}

/**
 * Set the value of origen
 *
 * @return  self
 */ 
public function setOrigen($origen)
{
$this->origen = $origen;

return $this;
}

/**
 * Get the value of desti
 */
public function getDesti()
{
return $this->desti;
}

/**
 * Set the value of desti
 */
public function setDesti($desti): self
{
$this->desti = $desti;

return $this;
}

/**
 * Get the value of preu
 */
public function getPreu()
{
return $this->preu;
}

/**
 * Set the value of preu
 */
public function setPreu($preu): self
{
$this->preu = $preu;

return $this;
}

/**
 * Get the value of foto
 */
public function getFoto()
{
return $this->foto;
}

/**
 * Set the value of foto
 */
public function setFoto($foto): self
{
$this->foto = $foto;

return $this;
}

/**
 * Get the value of nombre_places
 */
public function getNombrePlaces()
{
return $this->nombre_places;
}

/**
 * Set the value of nombre_places
 */
public function setNombrePlaces($nombre_places): self
{
$this->nombre_places = $nombre_places;

return $this;
}
}
?>