<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minim</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />


    <!-- Custom CSS File -->
    <link rel="stylesheet" href="HTML Template/style.css">

    <?php
        //require functions.php file
       require('functions.php');
    ?>

    <link rel="icon" href="HTML Template/assets/images/logo.png">

</head>
<body>
<!-- start #header -->
<header>
    <!-- Primary Navigation -->
    <div class="wrapper font-oswald">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>Minim</h3>
            </div>

            <ul class="list-unstyled components">
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="cart.php">Cart</a></li>

            </ul>
        </nav>


        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-bars"></i>
                    </button>

                    <a href="#" class="navbar-brand"><img src="HTML Template/assets/images/logo.png" alt=""></a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                                    <span class="font-size-20 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                                    <span class="px-3 py-2 rounded-pill text-white color-primary-bg"><?php echo count($product->getData('cart'))?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <i class="fas fa-user-circle"></i>
                            </li>
                            <li class="nav-item">
                                <i class="fas fa-search"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- !Primary Navigation -->

        <!-- !start #header -->
</header>

<!-- start #main-site  -->
<main id="main-site">