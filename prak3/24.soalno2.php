<?php
// *
// *#
// *#*

// *#*#*
// $line = 5;
for ($j = 1; $j <= 5; $j++){
    for ($i=1; $i <= $j; $i++){
        if($i % 2 == 1){
            echo "*";
        }
        else if($i % 2 == 0){
            echo "#";
        }
    }
    echo "<br>";
}

