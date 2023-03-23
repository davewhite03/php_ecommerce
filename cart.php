<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Ecommerce Store - Cart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./js/cart.js" defer></script>
</head>
<body>
    <?php include('includes/nav.inc')?>
    <?php include('includes/dbc.php')?>

    <div class="container my-5">
        <h1 class="mb-5">Shopping Cart</h1>

        <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $total = 0; ?>
                <?php foreach ($_SESSION['cart'] as $product_id => $product): ?>
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td>$<?php echo number_format($product['price'], 2); ?></td>
                    <td>
                        <form action="update-cart.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                            <div class="input-group">
                                <input type="number" name="quantity" value="<?php echo $product['quantity']; ?>" min="1" class="form-control">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>$<?php echo number_format($product['price'] * $product['quantity'], 2); ?></td>
                    <td>
                        <form action="remove-from-cart.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
                <?php $total += $product['price'] * $product['quantity']; ?>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3" class="text-right"><strong>Total:</strong></td>
                    <td colspan="2">$<?php echo number_format($total, 2); ?></td>
                </tr>
            </tbody>
        </table>
        <?php else: ?>
        <p>Your cart is empty.</p>
        <?php endif; ?>
        
    </div>

    <?php include('includes/footer.inc')?>
</body>
</html>