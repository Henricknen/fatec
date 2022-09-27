<?php

$arquivo = fopen("arquivo.txt", "r");
$contreudo = fread($arquivo, 100);

echo $contreudo;

fclose($arquivo);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imprimr</title>
</head>
<body>
    
</body>
</html>