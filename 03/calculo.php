<?php

    $invest = $_POST['invest'];
    $valor = $_POST['valor'];

    if ($invest == 1) {
        echo "O rendimento é de: ".$valor * 3;
    } else if($invest == 2) {
        echo "O rendimento é de: ".$valor * 4;
    }

?>