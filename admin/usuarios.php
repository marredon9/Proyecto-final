<?php
include "include.php";

session_start();
$sesion = obtenerSesion();
if (!$sesion->esAdmin) {
    redirect("index.php");
}

// Iniciar sesión o verificar si hay una cookie de tema

gestionarModoOscuro();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?= headerPagina() ?>
</head>

<body>
    <!-- Navbar -->
    <?= navbarAdmin() ?>
    <!-- 
Esta hoja de estilos es solo para que el listado en HTML quede mas organizado.
Se puede quitar en cualquier momento sin problema
-->
    <div class="admin mt-5 mb-5 text-center">

        <h1>Listado de usuarios</h1>
        <div>
            <a href="<?= lnk("servlets/admin/exportarUsuariosCSV.php") ?>" class="btn btn-primary btn-lg px-5">Exportar CSV</a>
        </div>
        <div id="resultados"></div>
        <!--
        <table class="mx-auto">
            <tr>
                <td><b>ID</b></td>
                <td><b>Nombre Completo</b></td>
                <td><b>DNI</b></td>
                <td><b>E-mail</b></td>
                <td><b>Admin</b></td>
            </tr>
            <?php
            //hacer consulta a base de datos
            try {
                $stmt = $cn->prepare("SELECT * FROM usuario;");
                $stmt->execute();
                $res = $stmt->get_result();
                while ($r = $res->fetch_assoc()) {
                    $id = $r["id"] ?? "";
                    $nombre = $r["nombre"] ?? "";
                    $apellido1 = $r["apellido1"] ?? "";
                    $apellido2 = $r["apellido2"] ?? "";
                    $nombreCompleto = htmlspecialchars($nombre . " " . $apellido1 . " " . $apellido2);
                    $dni = $r["dni"] ?? "";
                    $email = $r["email"] ?? "";
                    $esAdmin = $r["es_admin"] == 1;
            ?>
                    <tr>
                        <td><input type="text" disabled value="<?= $id ?>"></td>
                        <td><input type="text" disabled value="<?= $nombreCompleto ?>"></td>
                        <td><input type="text" disabled value="<?= $dni ?>"></td>
                        <td><input type="text" disabled value="<?= $email ?>"></td>
                        <?php

                        if ($esAdmin) {
                        ?>
                            <td><input type="checkbox" disabled checked></td>
                        <?php
                        } else {
                        ?>
                            <td><input type="checkbox" disabled></td>
                        <?php
                        }

                        ?>
                    </tr>
            <?php
                }
            } catch (mysqli_sql_exception $e) {
            }
            ?>
        </table>
        -->
    </div>
    <script>
function cargarUsuarios() {
    let json;
    //primer fetch -> obtener lista de usuarios de la API en formato json
    fetch("<?=RUTA_ABS?>" + "api/getUsuarios.php")
    .then(response => response.json())
    .then(data => {
        //segundo fetch -> con los datos en formato json (guardado como texto en la variable) mandar datos a php para que genere la tabla.
        fetch("<?=RUTA_ABS?>" + "api/html/tabla.php", {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                "Content-Type": "application/json",
            },
        })
        .then((res) => res.text())
        .then((res) => {
            document.getElementById("resultados").innerHTML = res;
        })
        
    });
}

function actualizarUsuario(id) {
    let nombre = document.getElementById("us" + id + "_nombre").value;
    let apellido1 = document.getElementById("us" + id + "_apellido1").value;
    let apellido2 = document.getElementById("us" + id + "_apellido2").value;
    let dni = document.getElementById("us" + id + "_dni").value;
    let email = document.getElementById("us" + id + "_email").value;
    let admin = document.getElementById("us" + id + "_admin").checked == true ? 1 : 0;
    let params = [id, nombre, apellido1, apellido2, dni, email, admin];
    let status = "none";
    //console.log(params);
    fetch("<?=RUTA_ABS?>" + "api/editarUsuario.php", {
        method: "POST",
        body: JSON.stringify(params),
        headers: {
            "Content-Type": "application/json",
        },
    })
    .then((res) => res.text())
    .then((data) => {
        console.log(data);
    })
}
cargarUsuarios();
    </script>
    <?= footer() ?>
</body>
</html>