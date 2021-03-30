<?php
    $lottodate = date("d-m-Y");
    echo "The lottery numbers for $lottodate are ";
    for($n = 1; $n < 7; $n++){
        $number[$n] = rand(1, 49);
        echo "<br/> $number[$n]";
    }
?>