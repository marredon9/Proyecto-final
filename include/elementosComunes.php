<?php
function headerPagina() {
    ?>
<!-- Generado en elementosComunes.php->headerPagina() -->
    <?php
    headerPaginaTitulo("Alquiza - Alquiler de Coches en Ibiza");
}

function headerPaginaTitulo($titulo) {
    ?>

<!-- Generado en elementosComunes.php->headerPaginaTitulo() -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$titulo?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap  JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <!-- Estilos personalizados -->
    <!--<link id="css" rel="stylesheet" href="sass/main-<?php echo $_COOKIE['theme'] ?>.css" />-->
    <link id="css" rel="stylesheet" href="<?=lnk("sass/main-" . $_COOKIE['theme'] . ".css")?>" />
    <!-- Scripts personalizados -->
    <script src="<?=lnk("script.js")?>"></script>
    <!-- Mapa -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <?php
}

function fondoVideo() {
    ?>

<!-- Generado en elementosComunes.php->fondoVideo() -->
<video class="background-video" autoplay muted loop>
    <source src="<?=vid("olas.mp4")?>" type="video/mp4" />
    Tu navegador no soporta la etiqueta de video.
</video>

    <?php
}

function gestionarModoOscuro() {
    if (isset($_GET['tema'])) {
        // Cambiar el modo según el parámetro GET y guardar en cookie
        $nuevo_tema = $_GET['tema'];
        setcookie('theme', $nuevo_tema, time() + (30 * 24 * 60 * 60), "/");
        // Redirigir para evitar que se vuelva a enviar el formulario
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }if(!isset($_COOKIE['theme'])){
        setcookie('theme', 'light', time() + (30 * 24 * 60 * 60), "/");
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    // Obtener el tema de la cookie
    $tema = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
}

function tablaUsuarios($json) {
    ?>
    <table class="mx-auto">
        <tr>
            <td><b>ID</b></td>
            <td><b>Nombre Completo</b></td>
            <td><b>DNI</b></td>
            <td><b>E-mail</b></td>
            <td><b>Admin</b></td>
        </tr>
    <?php
    $usuarios = json_decode($json);
    //var_dump($usuarios[0]);
    //var_dump($usuarios);
    foreach ($usuarios as $usuario) {
        //var_dump($usuario);
        
        echo '
    
        <tr>
            <td><input type="text" disabled value="' .  $usuario["id"] ?>"></td>
            <td><input type="text" disabled value="<?= $usuario["nombre"] ?>"></td>
            <td><input type="text" disabled value="<?= $usuario["apellido1"] ?>"></td>
            <td><input type="text" disabled value="<?= $usuario["apellido2"] ?>"></td>
            <td><input type="text" disabled value="<?= $usuario["dni"] ?>"></td>
            <td><input type="text" disabled value="<?= $usuario["email"] ?>"></td>
            <?php

            if ($usuario["es_admin"]) {
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
     ';
    
    ?>
        </table>
    </div>
    <p>Wololo</p>
    <?php
}

?>