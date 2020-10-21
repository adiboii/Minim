<?php

shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['top_sale_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<section id="featured-products">
    <div class="container py-5">
        <h4 class="font-oswald font-size-20 text-center">Featured Products</h4>
        <hr>
        <!-- Owl carousel -->
        <div class="owl-carousel owl-theme">

            <?php foreach ($product_shuffle as $item) { ?>
            <div class="item py-2">
                <div class="product font-opensans" align="center">
                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/images/products/1.JPG"; ?>" alt="product1" style="width: 300px; height: auto;" class="img-fluid py-2""></a>
                    <div class="text-center">
                        <h6><?php echo  $item['item_name'] ?? "Unknown";  ?></h6>
                        <div class="price py-2">
                            <span>$<?php echo $item['item_price'] ?? '0' ; ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn color-primary-bg font-size-12" style="color: #fff">Add to Cart</button>';
                            }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <!-- !Owl carousel -->
    </div>
</section>