<?php
ob_start();
//include header.php
include('header.php');
?>

<?php
    //include product-section
    include('Template/product-section.php');

    //include featured-products
    include('Template/featured-products.php');

?>


<?php
//include footer.php
include('footer.php');
?>