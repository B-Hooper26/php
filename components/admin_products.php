<?php
require_once './inc/functions.php';

$products = $controllers->products()->get_all_products();
?>

<div class="container">
    <div class="row">
        <?php foreach ($products as $product): ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card h-100">
                <img src="<?= $product['Image'] ?>" 
                     class="card-img-top img-fluid" 
                     alt="image of <?= $product['Description'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $product['Product_name'] ?></h5>
                    <p class="card-text"><?= $product['Description'] ?></p>
                    <p class="card-text">Category: <?= $product['Category'] ?></p>
                    <p class="card-text">Price: <?= $product['Price'] ?></p>
                    <p class="card-text">Quantity: <?= $product['Quantity'] ?></p>
                    <a href="edit_product.php?id=<?= $product['Product_id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="delete_product.php?id=<?= $product['Product_id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
