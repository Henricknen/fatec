<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <h1>Exemplos: php.net</h1>


<?php

$file = fopen("webdictionary.txt", "r" ) 
            or die("Falha na abertura do arquivo!");
echo fread($file, filesize("webdictionary.txt"));
fclose($file);

echo "<hr>";

$file = fopen("webdictionary.txt", "r" ) 
            or die("Falha na abertura do arquivo!");

while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);

echo "<hr>";

$file = fopen("newfile.txt", "w")
                or die("Falha na abertura do arquivo!");
$texto = "O Palmeiras não tem mundial!!\nEsse ano de novo\nNem a rainha conseguiu esperar";

fwrite($file, $texto);
fclose($file);

$file = fopen("newfile.txt", "r" ) 
            or die("Falha na abertura do arquivo!");
while (!feof($file)) {
    echo fgets($file) . "<br>";
}

fclose($file);

echo "<hr>";

?>



</body>
</html>