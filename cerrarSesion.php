<?php
session_start();
unset($_SESSION["sesion"]);
header("Location: index.php");
?>
<?= navbar() ?>
<?= footer() ?>