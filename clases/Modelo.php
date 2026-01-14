<?php
class Modelo
{
    private $id;
    private $id_marca;
    private $potencia;
    private $asientos;
    private $puertas;
    private $maletero;
    private $traccion;
    private $modo;
    private $extras;

    public function __construct(
        $id,
        $id_marca,
        $potencia,
        $asientos,
        $puertas,
        $maletero,
        $traccion,
        $modo,
        $extras
    ) {
        $this->id = $id;
        $this->id_marca = $id_marca;
        $this->potencia = $potencia;
        $this->asientos = $asientos;
        $this->puertas = $puertas;
        $this->maletero = $maletero;
        $this->traccion = $traccion;
        $this->modo = $modo;
        $this->extras = $extras;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getId_marca()
    {
        return $this->id_marca;
    }
    public function getPotencia()
    {
        return $this->potencia;
    }
    public function getAsientos()
    {
        return $this->asientos;
    }
    public function getPuertas()
    {
        return $this->puertas;
    }
    public function getMaletero()
    {
        return $this->maletero;
    }
    public function getTraccion()
    {
        return $this->traccion;
    }
    public function getModo()
    {
        return $this->modo;
    }
    public function getExtras()
    {
        return $this -> extras;
    }

    public function setId($id){
        $this -> id = $id;
    }
    public function setId_marca($id_marca){
        $this -> id_marca = $id_marca;
    }
    public function setPotencia($potencia){
        $this -> potencia = $potencia;
    }
    public function setAsientos($asientos){
        $this -> asientos = $asientos;
    }
    public function setPuertas($puertas){
        $this -> puertas = $puertas;
    }
    public function setMaletero($maletero){
        $this -> maletero = $maletero;
    }
    public function setTraccion($traccion){
        $this -> traccion = $traccion;
    }
    public function setModo($modo){
        $this -> modo = $modo;
    }
    public function setExtras($extras){
        $this -> extras = $extras;
    }
}
?>