<?php
    class Vehiculo{
        private $id;
        private $matricula;
        private $estado;
        private $id_modelo;
        private $id_m; //marca
        private $baca;
        private $bola;
        private $ruta_img;
        private $tiene_defecto;
        private $motor;
        private $antiniebla_trasero;
        private $capacidad;
        private $silla_ninos;
        private $id_usuario;
        private $eminisiones;
        private $tipo;
        private $id_sucursal;

        public function __construct($id, $matricula, $id_modelo, $id_m,
         $baca, $bola, $ruta_img, $tiene_defecto, $motor, $antiniebla_trasero, 
         $capacidad, $silla_ninos, $id_usuario, $eminisiones, $tipo, $id_sucursal){
            $this -> id = $id;
            $this -> matricula = $matricula;
            $this -> id_modelo = $id_modelo;
            $this -> id_m = $id_m;
            $this -> baca = $baca;
            $this -> bola = $bola;
            $this -> ruta_img = $ruta_img;
            $this -> tiene_defecto = $tiene_defecto;
            $this -> motor = $motor;
            $this -> antiniebla_trasero = $antiniebla_trasero;
            $this -> capacidad = $capacidad;
            $this -> silla_ninos = $silla_ninos;
            $this -> id_sucursal = $id_sucursal;
            $this -> id_usuario = $id_usuario;
            $this -> eminisiones = $eminisiones;
            $this -> tipo = $tipo;
         }

        public function getId(){
            return $this -> id;
        }

        public function getMatricula(){
            return $this -> matricula;
        }

        public function getEstado(){
            return $this -> estado;
        }

        public function getId_modelo(){
            return $this -> id_modelo;
        }

        public function getId_m(){
            return $this -> id_m;
        }

        public function getBaca(){
            return $this -> baca;
        }

        public function getBola(){
            return $this -> bola;
        }

        public function getRuta_img(){
            return $this -> ruta_img;
        }

        public function getTiene_defecto(){
            return $this -> tiene_defecto;
        }

        public function getMotor(){
            return $this -> motor;
        }

        public function getAntiniebla_trasero(){
            return $this -> antiniebla_trasero;
        }

        public function getCapacidad(){
            return $this -> capacidad;
        }

        public function getSilla_ninos(){
            return $this -> silla_ninos;
        }

        public function getId_usuario(){
            return $this -> id_usuario;
        }

        public function getTipo(){
            return $this -> tipo;
        }

        public function getEmisiones(){
            return $this -> eminisiones;
        }

        public function getId_sucursal(){
            return $this -> id_sucursal;
        }

        public function setId($id){
            $this -> id = $id;
        }

        public function setMatricula($matricula){
            $this -> matricula = $matricula;
        }
        public function setEstado($estado){
            $this -> estado = $estado;
        }
        public function setId_modelo($id_modelo){
            $this -> id_modelo = $id_modelo;
        }
        public function setId_m($id_m){
            $this -> id_m = $id_m;
        }
        public function setBaca($baca){
            $this -> baca = $baca;
        }
        public function setBola($bola){
            $this -> bola = $bola;
        }
        public function setRuta_img($ruta_img){
            $this -> ruta_img = $ruta_img;
        }
        public function setTiene_defecto($tiene_defecto){
            $this -> tiene_defecto = $tiene_defecto;
        }
        public function setMotor($motor){
            $this -> motor = $motor;
        }
        public function setAntiniebla_trasero($antiniebla_trasero){
            $this -> antiniebla_trasero = $antiniebla_trasero;
        }
        public function setCapacidad($capacidad){
            $this -> capacidad = $capacidad;
        }

        public function setSilla_ninos($silla_ninos){
            $this -> silla_ninos = $silla_ninos;
        }

        public function setId_usuario($id_usuario){
            $this -> id_usuario = $id_usuario;
        }

        public function setEmisiones($eminisiones){
            $this -> eminisiones = $eminisiones;
        }

        public function setTipo($tipo){
            $this -> tipo = $tipo;
        }

        public function setId_sucursal($id_sucursal){
            $this -> id_sucursal = $id_sucursal;
        }
    }
    
?>