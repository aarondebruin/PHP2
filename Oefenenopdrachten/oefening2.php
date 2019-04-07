<?php

function evenDag($nummer){
    if($nummer % 2 == 0){
        echo "Even";
    }
    else{
        echo "Oneven";
    }
}

$nummer =  date('j');
evenDag($nummer)

?>
   
