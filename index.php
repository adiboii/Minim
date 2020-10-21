<?php
    ob_start();
    //include header.php
    include('header.php');
?>

<?php
    //include banner-area.php
    include('Template/banner-area.php');

    //include featured-products
    include('Template/featured-products.php');

    //include special-price
    include('Template/special-price.php');

    //include blogs
    include('Template/blogs.php');
?>


<?php
    //include footer.php
    include('footer.php');
?>