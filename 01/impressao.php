<?php

    $arquivo = fopen("nome_aluno.txt", "a");        // abrindo para escrita
    fwrite($arquivo, "Luis henrique s f");
    fwrite($arquivo, "\r\nPogramação web");
    fwrite($arquivo, "\r\nFatec PP");


    $arquivo = fopen("nome_aluno.txt", "r");        // abre o arquivo criado
    $conteudo = fread($arquivo, 100);

    echo $conteudo;
        
    fclose($arquivo);

?>

<!DOCTYPE html>
<html lang="pt-nr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imprimindo arquivo</title>
</head>
<body>
    
</body>
</html>