var cartCount = 0;

// Function to add an item to the cart
function addToCart() {
  // Increment the cart count
  cartCount++;

  // Update the cart number in the navbar
  document.getElementById('cart-number').innerHTML = cartCount;
}
