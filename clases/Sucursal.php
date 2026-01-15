<?php
class Sucursal {
    private $id;
    private $nombre;
    private $telefono;
    private $direccion;
    private $latitud;
    private $longitud;

    public function __construct($id, $nombre, $telefono, $direccion, $latitud, $longitud){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> telefono = $telefono;
        $this -> direccion = $direccion;
        $this -> latitud = $latitud;
        $this -> longitud = $longitud;
    }

    public function getId(){
        return $this -> id;
    }
    public function getNombre(){
        return $this -> nombre;
    }
    public function getTelefono(){
        return $this -> telefono;
    }
    public function getDireccion(){
        return $this -> direccion;
    }
    public function getLatitud(){
        return $this -> latitud;
    }
    public function getLongitud(){
        return $this -> longitud;
    }

    public function setId($id){
        $this -> id = $id;
    }
    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }
    public function setTelefono($telefono){
        $this -> telefono = $telefono;
    }
    public function setDireccion($direccion){
        $this -> direccion = $direccion;
    }
    public function setLatitud($latitud){
        $this -> latitud = $latitud;
    }
    public function setLongitud($longitud){
        $this -> longitud = $longitud;
    }

}
?>