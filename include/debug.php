<?php
function debug_header($string) {
    $string = str_replace("Location: ", "");
    ?><br><a href="<?=$string?>">Ir a <?=$string?></a><?php
}
?>