<?php
// Include the database connection code
var_dump($_POST);
include('includes/dbc.php');

// Start the session
session_start();

// Retrieve the product ID from the POST request
$product_id = isset($_POST['id']) ? $_POST['id'] : '';

// Validate the product ID
if (empty($product_id)) {
  echo "Invalid product ID.";
  exit;
}

// Retrieve the product information from the database
$query = "SELECT * FROM products WHERE id = $product_id";
$result = mysqli_query($con, $query);
$product = mysqli_fetch_assoc($result);

// Validate the product information
if (empty($product)) {
  echo "Product not found.";
  exit;
}

// Add the product to the shopping cart
if (isset($_SESSION['cart'][$product_id])) {
  $_SESSION['cart'][$product_id]['quantity']++;
} else {
  $_SESSION['cart'][$product_id] = array(
    'name' => $product['name'],
    'price' => $product['price'],
    'quantity' => 1
  );
}

// Redirect the user back to the product page
header("Location: products.php");
exit;
?>