<?php
class Marca{
    private $id;
    private $nombre;
    private $ruta_img;

    public function __construct($id, $nombre, $ruta_img){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> ruta_img = $ruta_img;
    }

    public function getId(){
        return $this -> id;
    }
    public function getNombre(){
        return $this -> nombre;
    }
    public function getRuta_img(){
        return $this -> ruta_img;
    }

    public function setId($id){
        $this -> id = $id;
    }
    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }
    public function setRuta_img($ruta_img){
        $this -> ruta_img = $ruta_img;
    }
}
?>