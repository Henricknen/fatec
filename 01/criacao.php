<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crinado arquivo</title>
</head>
<body>

    <?php

        $arquivo = fopen("nome_aluno.txt", "w+");      // vai gerar o arquivo "nome_aluno.txt"
        
        fclose($arquivo);


    ?>

    <h1>Abrir o arquivo criado</h1>
    <a href="impressao.php">abrir</a>
    
</body>
</html>