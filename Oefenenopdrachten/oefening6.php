<?php

$string = "hallooo";
$char = "o";
echo CountChar($string, $char);

function CountChar($fstring, $fchar){
    return substr_count($fstring, $fchar);
}

 ?>
