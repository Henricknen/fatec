<?php

    $primeiro = $_POST['pri'];
    $segundo = $_POST['seg'];
    $terceiro = $_POST['ter'];
    $quarto = $_POST['quart'];
    $quinto = $_POST['quint'];

    $times = $primeiro. "\r\n" .$segundo. "\r\n" .$terceiro. "\r\n" .$quarto. "\r\n" .$quinto. "\r\n";

    
    echo "Os cinco times salvos foram: ". $times;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>times</title>
</head>
<body>
    
</body>
</html>