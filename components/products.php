<?php
require_once './inc/functions.php';

 $products =$controllers->products()->get_all_products();

foreach ($products as $product):
?>
<div class="col-4">
    <div class="card">
        <img src="<?= $product['Image'] ?>" 
            class="card-img-top" 
            alt="image of <?= $product['Description'] ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $product['Name'] ?></h5>
            <p class="card-text"><?= $product['Description'] ?></p>
            <p class="card-text"><?= $product['Price'] ?></p>
            <p class="card-text"><?= $product['Category'] ?></p>
            <p class="card-text"><?= $product['Quantity'] ?></p>
        </div>
    </div>
</div>

<?php 
endforeach;
?>
