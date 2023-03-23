<?php
session_start();

// Retrieve the item ID and new quantity from the POST request
$item_id = $_POST['id'];
$quantity = $_POST['quantity'];

// Update the quantity of the item in the cart session variable
foreach ($_SESSION['cart'] as &$product) {
  if ($product['id'] == $item_id) {
    $product['quantity'] = $quantity;
  }
}

// Redirect back to the cart page
header("Location: cart.php");
exit();
?>