<?php
        

    $arquivo = fopen("arquivo.txt", "a");        // abrindo para escrita
    fwrite($arquivo, "Luis henrique s f");
    fwrite($arquivo, "\r\n Programação web");
    fwrite($arquivo, "\r\n Fatec PP");


    fclose($arquivo);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando arquivo</title>
</head>
<body>

    <h1>Ver arquivo criado</h1>
    <a href="imprimir.php">Ver</a>
    
</body>
</html>