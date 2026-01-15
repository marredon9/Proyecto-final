<?php
class Usuario{
    private $id;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $dni;
    private $email;
    private $contraseña;
    private $fecha_nac;
    private $es_admin;


    function __construct(int $id,string $nombre, string $apellido1, string $apellido2, string $dni, 
    string $email, string $contraseña, string $fecha_nac, $es_admin){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido1 = $apellido1;
        $this -> apellido2 = $apellido2;
        $this -> dni = $dni;
        $this -> email = $email;
        $this -> contraseña = $ $contraseña;
        $this -> fecha_nac = $fecha_nac;
        $this -> es_admin = $es_admin;
    }

    public function getId(){
        return $this -> id;
    }
    public function getNombre(){
        return $this -> nombre;
    }

    public function getApellido1(){
        return $this -> apellido1;
    }

    public function getApellido2(){
        return $this -> apellido2;
    }

    public function getDni(){
        return $this -> dni;
    }

    public function getEmail(){
        return $this -> email;
    }

    public function getContraseña(){
        return $this -> contraseña;
    }

    public function getFecha_nac(){
        return $this -> fecha_nac;
    }

    public function getEs_admin(){
        return $this -> es_admin;
    }

    public function setId($id){
        $this -> id = $id;
    }
    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }

    public function setApellido1($apellido1){
        $this -> apellido1 = $apellido1;
    }

    public function setApellido2($apellido2){
        $this -> apellido2 = $apellido2;
    }

    public function setDni($dni){
        $this -> dni = $dni;
    }

    public function setEmail($email){
        $this -> email = $email;
    }

    public function setContraseña($contraseña){
        $this -> contraseña = $contraseña;
    }

    public function setFecha_nac($fecha_nac){
        $this -> fecha_nac = $fecha_nac;
    }

    public function setEs_admin($es_admin){
        $this -> es_admin = $es_admin;
    }
}
?>