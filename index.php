<?php

$dados = array(
    ['firstname' => 'John','lastname' => 'Doe','email' => 'john@example.com'],
    ['firstname' => 'Mary','lastname' => 'Moe','email' => 'mary@example.com'],
    ['firstname' => 'July','lastname' => 'Dooley','email' => 'july@example.com']
);

if (isset($_GET['var'])){
    $var = $_GET['var'];
    if ($var == "csv") {
        //cvs
        $headers = ['Firstname', 'Lastname', 'Email'];
        $filecsv = fopen('tabela.csv', 'w+');
        fputcsv($filecsv , $headers); // Criar com cabeçalho        
        foreach ($dados as $fields ) {
            fputcsv($filecsv, $fields);
        }        
        fclose($filecsv);
        //Criar aquivo na pasta do servidor
        echo "Export to CSV:<br>";
        echo "O arquivo tabela.csv foi criado com " . filesize("tabela.csv")  . " bytes.";

        //baixar o arquivo
        $filepath = "tabela.csv";
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: utf-8");   
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        readfile($filepath);


    } else if ($var == "json") {
        //json




    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabela</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container" style="padding-top: 50px;">

  <h2>Tabela exemplo</h2>
  <p>Tabela para exportação de dados:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
  <p>Export to: <a href="?var=csv">csv</a> | <a href="?var=json">json</a></p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
