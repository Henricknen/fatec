<?php

    $not1 = $_POST["prim"];
    $not2 = $_POST["seg"];
    $not3 = $_POST["ter"];
    $not4 = $_POST["quar"];

    $med = $not1 + $not2 + $not3 + $not4 / 4;

    if($med >= 7) {
        echo "O aluno foi aprovado...<br>";
    } else {
        echo "O aluno foi reprovado...<br>";
    } 
    
    echo "Com a média $med";

?>