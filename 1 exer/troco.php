<?php

    $vpag = $_POST["f_pag"];       
    $vprod = $_POST["f_val"];
    $vtroco = $vprod - $vpag;

    echo "Voçê pagou R$:".$vpag."<br/>num produto de R$:".$vprod."<br/> e receberá R$:".$vtroco." de troco";

?>

