<?php
function debug_header($string) {
    $string = str_replace("Location: ", "", $string);
    ?><br><a href="<?=$string?>">Ir a <?=$string?></a><?php
}
?>