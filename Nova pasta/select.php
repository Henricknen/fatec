<?php
// select table date
require_once("conection.php");

// MYSQL query select data from table
$mysql_query = "SELECT * FROM users";
$result = $conn->query($mysql_query);

while($user_data = mysqli_fetch_array($result)) {
    echo $user_data['id'] . " " . $user_data['nome'] . "<br>";
}

//connection close
mysqli_close($conn);
?>