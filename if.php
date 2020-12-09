<?php
    $isFemale = true;
    $isTall = false;
    if ($isFemale && $isTall) {
        echo "You are female and tall";
    } elseif ($isFemale && !$isTall) {
        echo "Your are female and not tall";
    }    
    else {
        echo "You are not female and tall";
    }
    echo "<br>";
    
    function getMax(Int $num1, Int $num2){
        if ($num1>$num2) {
            return $num1;
        } else {
            return $num2;
        }
    }

    echo getMax(5,9)


?>