<div class="container my-5">
  <h1 class="mb-4">Shop Products</h1>

  <div class="row">
    <?php while ($row = mysqli_fetch_assoc($result)):
 
          ?>

    <div class="col-md-4 mb-4">
      <div class="card">
        <img
          class="card-img-top"
          src="<?php echo $row['image_path']; ?>"
          alt="Product Image"
          style="height: 250px"
        />
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['name']; ?></h5>
          <p class="card-text"><?php echo $row['description']; ?></p>
          <p class="card-text">
            Price:
            <?php echo $row['price']; ?>
          </p>
          <form action="add-to-cart.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
            <button type="submit" class="btn btn-primary">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</div>
