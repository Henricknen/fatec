<?php

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $imc = $peso / ($altura * $altura);

    if($imc < 18.5) {
        echo "<h3>Magreza...</h3>";
    } else if($imc >= 18.5 and  $imc < 24.9) {
        echo "<h3>Normal...</h3>";
    } else if($imc >= 25 and $imc < 29.9) {
        echo "<h3>Sobrepeso...</h3>";
    } else if($imc >= 30 and $imc < 39.9) {
        echo "<h3>Obesidade...</h3>";
    } else if($imc > 40) {
        echo "<h3>Obesidade grave</h3>";
    }

?>