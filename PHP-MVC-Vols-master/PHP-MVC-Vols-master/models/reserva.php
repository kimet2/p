<?php
require_once("config/database.php");

class reserva
{

    private $codi;
    private $codi_vol;
    private $codi_usuari;
    private $data_anada;
    private $data_tornada;
    private $nombre_places;

public function insertar(){
            
            $conexion = new database();
            $sql = "INSERT INTO reserva (codi_vol,codi_usuari,data_anada,data_tornada,nombre_places) VALUES ('$this->codi_vol','$this->codi_usuari','$this->data_anada','$this->data_tornada','$this->nombre_places')";
            $a = $conexion->connect();
            $a->query($sql);
            $a->close();
    
}
public function mostrar(){
    $conexion = new database();
    $sql = "SELECT * FROM reserva";
    $a = $conexion->connect();
    $resultado = $a->query($sql);
    $a->close();
    return $resultado;
}

public function buscar(){
    $conexion = new database();
    $sql = "SELECT * FROM reserva WHERE codi = '$this->codi'";
    $a = $conexion->connect();
    $resultado = $a->query($sql);
    $a->close();
    return $resultado;
}
public function eliminar(){
    $conexion = new database();
    $sql = "DELETE FROM reserva WHERE codi = '$this->codi'";
    $a = $conexion->connect();
    $a->query($sql);
    $a->close();
}
public function modificar(){
    $conexion = new database();
    $sql = "UPDATE reserva SET data_anada = '$this->data_anada', data_tornada = '$this->data_tornada', nombre_places = '$this->nombre_places' WHERE codi = '$this->codi'";
    echo $sql;
    $a = $conexion->connect();
    $a->query($sql);
    $a->close();
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
     * Get the value of codi_vol
     */
    public function getCodiVol()
    {
        return $this->codi_vol;
    }

    /**
     * Set the value of codi_vol
     */
    public function setCodiVol($codi_vol): self
    {
        $this->codi_vol = $codi_vol;

        return $this;
    }

    /**
     * Get the value of codi_usuari
     */
    public function getCodiUsuari()
    {
        return $this->codi_usuari;
    }

    /**
     * Set the value of codi_usuari
     */
    public function setCodiUsuari($codi_usuari): self
    {
        $this->codi_usuari = $codi_usuari;

        return $this;
    }

    /**
     * Get the value of data_anada
     */
    public function getDataAnada()
    {
        return $this->data_anada;
    }

    /**
     * Set the value of data_anada
     */
    public function setDataAnada($data_anada): self
    {
        $this->data_anada = $data_anada;

        return $this;
    }

    /**
     * Get the value of data_tornada
     */
    public function getData_tornada()
    {
        return $this->data_tornada;
    }

    /**
     * Set the value of data_tornada
     *
     * @return  self
     */
    public function setData_tornada($data_tornada)
    {
        $this->data_tornada = $data_tornada;

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
