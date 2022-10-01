<?php

    $invest = $_POST['invest'];
    $valor = $_POST['valor'];

    if ($invest == 1) {
        echo "O valor do investimento é: ". $valor + ($valor * 0.03);
    } else if($invest == 2) {
        echo "O valor do investimento é: ". $valor + ($valor * 0.04);
    }

?>

