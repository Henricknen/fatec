<?php

    $primeiro = $_POST['pri'];
    $segundo = $_POST['seg'];
    $terceiro = $_POST['terc'];
    $quarto = $_POST['quart'];
    $quinto = $_POST['quint'];

    $times = $primeiro. "\r\n" .$segundo. "\r\n" .$terceiro. "\r\n" .$quarto. "\r\n" .$quinto. "\r\n";

    $arquivo = fopen("times.txt", "a");        // vai criar e abrir
    fwrite($arquivo, $conteudo);

    echo "Times salvos em [times.txt]";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>