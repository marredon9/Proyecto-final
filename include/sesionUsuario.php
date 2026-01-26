<?php
class SesionUsuario {
    /*private */ public $id;
    /*private */ public $nombre;
    /*private */ public $apellido1;
    /*private */ public $apellido2;
    /*private */ public $dni;
    /*private */ public $email;
    /*private */ //public $fechaNacimiento;
    /*private */ public $esAdmin;
    
    function __construct($id, $nombre, $apellido1, $apellido2, $dni, $email, /*$fechaNacimiento,*/ $esAdmin) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->dni = $dni;
        $this->email = $email;
        //$this->fechaNacimiento = $fechaNacimiento;
        $this->esAdmin = $esAdmin;
    }

    function getId() { return $this->id; }
    function getNombre() { return $this->nombre; }
    function getApellido1() { return $this->apellido1; }
    function getApellido2() { return $this->apellido2; }
    function getDni() { return $this->dni; }
    //function getFechaNacimiento() { return $this->fechaNacimiento; }
    function getEsAdmin() { return $this->esAdmin; }
}

function obtenerSesion() {
    //session_start();
    if (isset($_SESSION["sesion"])) {
        return unserialize($_SESSION["sesion"]);
    } else {
        return "";
    }
}

function guardarSesion($sesion) {
    $_SESSION["sesion"] = serialize($sesion);
}

function borrarSesion() {
    $_SESSION["sesion"] = serialize("");
}

//llamar esta funcion en paginas de admin
//si un usuario no administrador entra a una pagina de admin mediante URL, con esta funcion se le expulsa automaticamente
function verificarAdmin($sesion) {
    if ($sesion == "" || !($sesion->esAdmin)) {
        header("Location: index.php");
    }
}
?>