<?php
session_start();

// Retrieve the item ID from the POST request
$item_id = $_POST['id'];
var_dump($item_id);

// Remove the item from the cart session variable
foreach ($_SESSION['cart'] as $key => $item) {
  if ($item['id'] == $item_id) {
    unset($_SESSION['cart'][$key]);
  }
}

// Redirect back to the cart page
header("Location: cart.php");
exit();
?>
