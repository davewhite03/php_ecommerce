<?php
$host = "localhost:4306";
$username = "root";
$password = "";
$database = "ecommerce";

$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    echo "<p>Error connecting to database: " . mysqli_connect_error() . "</p>";
} else {
    
   
    $query = "SELECT * FROM products";
    $result = mysqli_query($con, $query);

    if (!$result) {
        echo "<p>Error executing query: " . mysqli_error($con) . "</p>";
    } else {
        while ($row = mysqli_fetch_assoc($result)) {

        }
    }
}
?>