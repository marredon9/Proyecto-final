<?php
class Alquiler{
    private $id;
    private $id_us;
    private $id_ve;
    private $tipo_pago;
    private $fianza;
    private $id_suc_rec;
    private $id_suc_dev;

    public function __construct($id, $id_us, $id_ve, $tipo_pago, $fianza, $id_suc_rec, $id_suc_dev){
        $this -> id = $id;
        $this -> id_us = $id_us;
        $this -> id_ve = $id_ve;
        $this -> tipo_pago = $tipo_pago;
        $this -> fianza = $fianza;
        $this -> id_suc_rec = $id_suc_rec;
        $this -> id_suc_dev = $id_suc_dev;
    }

    public function getId(){
        return $this -> id;
    }
    public function getId_us(){
        return $this -> id_us;
    }
    public function getId_ve(){
        return $this -> id_ve;
    }
    public function getTipo_pago(){
        return $this -> tipo_pago;
    }
    public function getFianza(){
        return $this -> fianza;
    }
    public function getId_suc_rec(){
        return $this -> id_suc_rec;
    }
    public function getId_suc_dev(){
        return $this -> id_suc_dev;
    }

    public function setId($id){
        $this -> id = $id;
    }
    public function setId_us($id_us){
        $this -> id_us = $id_us;
    }
    public function setId_ve($id_ve){
        $this -> id_ve = $id_ve;
    }
    public function setTipo_pago($tipo_pago){
        $this -> tipo_pago = $tipo_pago;
    }
    public function setFianza($fianza){
        $this -> fianza = $fianza;
    }
    public function setId_suc_rec($id_suc_rec){
        $this -> id_suc_rec = $id_suc_rec;
    }
    public function setId_suc_dev($id_suc_dev){
        $this -> id_suc_dev = $id_suc_dev;
    }
}
?>