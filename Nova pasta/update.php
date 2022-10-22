<?php 

//insert data int table
require_once('connection.php');

$mysql_query = "UPDATE users SET NOME = 'jesse willian' WHERE id = 1";

$result = $conn->query($mysql_query);

if($result) {
    echo "Records inserted sucessfully.";
} else {
    echo "Error inserted records: ".$conn->error;
}
    mysqli_close($conn);
?>