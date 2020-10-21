<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php

/*  include cart items if it is not empty */
count($product->getData('cart')) ? include ('Template/cart-section.php') :  include ('Template/notFound/cart-notFound.php');
/*  include cart items if it is not empty */

/*  include wishlist section if it is not empty */
count($product->getData('wishlist')) ? include ('Template/wishlist-section.php') :  include ('Template/notFound/wishlist-notFound.php');
/*  include wishlist section if it is not empty */


/*  include featured-products section */
include ('Template/featured-products.php');
/*  include top sale section */

?>

<?php
// include footer.php file
include ('footer.php');
?>


