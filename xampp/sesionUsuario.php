<?php
/*
SE QUE LAS CLASES DEL ORM ESTAN DEFINIDAS ESTO ES PARA OTRA COSA.
Esta clase son los datos del inicio de sesion.
Cuando el usuario inicia sesion, se crea un objeto de este y se almacena en la sesion,
para que cuando se tengan que acceder a estos datos (por ejemplo, poner el nombre del 
usuario logueado) sin tener que hacer una consulta a la base de datos.
*/
class SesionUsuario
{
    /*private */
    public $id;
    /*private */
    public $nombre;
    /*private */
    public $apellido1;
    /*private */
    public $apellido2;
    /*private */
    public $dni;
    /*private */
    public $email;
    /*private */
    public $fechaNacimiento;
    /*private */
    public $esAdmin;

    function __construct($id, $nombre, $apellido1, $apellido2, $dni, $email, $fechaNacimiento, $esAdmin)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->dni = $dni;
        $this->email = $email;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->esAdmin = $esAdmin;
    }

    function getId()
    {
        return $this->id;
    }
    function getNombre()
    {
        return $this->nombre;
    }
    function getApellido1()
    {
        return $this->apellido1;
    }
    function getApellido2()
    {
        return $this->apellido2;
    }
    function getDni()
    {
        return $this->dni;
    }
    function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
    function getEsAdmin()
    {
        return $this->esAdmin;
    }
}
