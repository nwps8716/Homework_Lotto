<?php
header("content-type: text/html; charset=utf-8");

$lotto[] = array();

echo "本次樂透號碼: <br>";

    for ($i = 0 ; $i < 6 ; $i++) {
        
        $number = rand(1,49) . "<br />";
        
        if (in_array($number , $lotto)) {
            $i--;
        }
        else{
            $lotto[$i] = $number;
            echo $lotto[$i];
        }
        
    }


?>