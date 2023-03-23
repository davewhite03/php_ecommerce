<?php
// Include the database connection code
include('includes/dbc.php');
session_start();
// Retrieve the product information from the database
$query = "SELECT id, name, description, price, image, image_path FROM products";
$result = mysqli_query($con, $query);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Ecommerce Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  
    <?php include('includes/nav.inc')?>
    <?php include('includes/product.inc')?>
   
    <footer class="bg-dark text-center text-white py-3">
        <p>&copy; 2023 My Ecommerce Store</p>
    </footer>
</body>
</html>