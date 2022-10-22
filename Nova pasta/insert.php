<?php 

//insert data int table
require_once('connection.php');

$mysql_query = "INSERT INTO users (nome, email, datanasc) VALUES 
                        ('Nicole raimunda', 'nico@email.com', '2033-10-14'),
                        ('Vivivan texeira', 'vivivan@gmail.com', '2004-04-02'),
                        ('Evandro teixeira', 'evandro@gamil.com', '2000-08-06')";

$result = $conn->query($mysql_query);

if($result) {
    echo "Records inserted sucessfully.";
} else {
    echo "Error inserted records: ".$conn->error;
}
    mysqli_close($conn);
?>