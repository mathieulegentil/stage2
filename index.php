<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour.mu</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <div class="top">
        <!--  Top begin -->

        <div class="container">
            <!--  container begin -->

            <div class="col-md-6 offer">
                <!--  col-md-6 offer begin -->

                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="checkout.php">4 Items In Your Cart | Total Price: $300</a>

            </div> <!--  col-md-6 offer end -->

            <div class="col-md-6">
                <!--  col-md-6 begin -->

                <ul class="menu">
                    <!--  menu begin -->

                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go To Cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">Login</a>
                    </li>

                </ul> <!--  menu end -->

            </div> <!--  col-md-6 end -->

        </div> <!--  container end -->

    </div> <!--  Top end -->

    <div id="navbar" class="navbar navbar-default">
        <!--  navbar navbar-default begin -->

        <div class="container">
            <!--  container begin -->

            <div class="navbar-header">
                <!--  navbar-header begin -->

                <a href="index.php" class="navbar-brand home">
                    <!--  navbar-brand home begin -->

                    <img src="images/ecom-store-logo.png" alt="Bonjour.mu-logo" class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.png" alt="Bonjour.mu-logo Mobile" class="visible-xs">
                </a> <!--  navbar-brand home end -->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <!--  navbar-brand home begin -->
                    <span class="sr-only">Toggle Navigation</span>

                    <i class="fa fa-align-justify"></i>
                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <!--  navbar-brand home begin -->
                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search"></i>
                </button>

            </div> <!--  navbar-header end -->

            <div class="navbar-collapse collapse" id="navigation">
                <!--  navbar-collapse collapse begin -->

                <div class="padding-nav">
                    <!--  padding-nav begin -->

                    <ul class="nav navbar-nav left">
                        <!--  nav navbar-nav left begin -->

                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>

                    </ul> <!--  nav navbar-nav left end -->

                </div> <!--  padding-nav end -->

                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <!--  btn navbar-btn btn-primary begin -->

                    <i class="fa fa-shopping-cart"></i>

                    <span>4 Items In Your Cart</span>

                </a> <!--  btn navbar-btn btn-primary end -->

                <div class="navbar-collapse collapse right">
                    <!--  navbar-collapse collapse begin -->
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <!--  btn btn-primary navbar-btn begin -->
                        <span class="sr-only">Toggle Search</span>

                        <i class="fa fa-search"></i>

                    </button> <!--  btn btn-primary navbar-btn end -->

                </div> <!--  navbar-collapse collapse right end -->

                <div class="collapse clearfix" id="search">
                    <!--  collapse clearfix begin -->

                    <form method="get" action="results.php" class="navbar-form">
                        <!--  navbar-form begin -->

                        <div class="input-group">
                            <!--  input-group begin -->

                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                            <span class="input-group-btn">
                                <!--  input-group-btn begin -->

                                <button type="submit" name="search" value="Search" class="btn btn-primary">
                                    <!--  btn btn-primary begin -->

                                    <i class="fa fa-search"></i>

                                </button> <!--  btn btn-primary end -->
                            </span> <!--  input-group-btn end -->
                        </div><!--  input-group end -->

                    </form> <!--  navbar-form end -->

                </div> <!--  collapse clearfix end -->

            </div> <!--  navbar-collapse collapse end -->

        </div> <!--  container end -->

    </div> <!--  navbar navbar-default end -->

    <div class="container" id="slider">
        <!--  container begin -->

        <div class="col-md-12">
            <!--  col-md-12 begin -->

            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <!--  carousel slide begin -->

                <ol class="carousel-indicators">
                    <!--  carousel-indicators begin -->

                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>

                </ol> <!--  carousel-indicators end -->

                <div class="carousel-inner">
                    <!--  carousel-inner begin -->

                    <div class="item active">

                        <img src="admin_area/slides_images/slide-1.jpg" alt="Slider Image 1">

                    </div>

                    <div class="item">

                        <img src="admin_area/slides_images/slide-2.jpg" alt="Slider Image 2">

                    </div>

                    <div class="item">

                        <img src="admin_area/slides_images/slide-3.jpg" alt="Slider Image 3">

                    </div>

                    <div class="item">

                        <img src="admin_area/slides_images/slide-4.jpg" alt="Slider Image 4">

                    </div>

                </div> <!--  carousel-inner end -->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <!--  left carousel-control begin -->

                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>

                </a> <!--  left carousel-control end -->

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <!--  right carousel-control begin -->

                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>

                </a> <!--  right carousel-control end -->

            </div> <!--  carousel slide end -->

        </div> <!--  col-md-12 end -->

    </div> <!--  container end -->

    <div id="advantages">
        <!--  advantages begin -->

        <div class="container">
            <!--  container begin -->

            <div class="same-height-row">
                <!--  same-height-row begin -->

                <div class="col-sm-4">
                    <!--  col-sm-4 begin -->

                    <div class="box same-height">
                        <!--  box same-height begin -->

                        <div class="icon">
                            <!--  icon begin -->

                            <i class="fa fa-heart"></i>

                        </div> <!--  icon end -->

                        <h3><a href="#">Best Offers</a></h3>

                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

                    </div> <!--  box same-height end -->

                </div> <!--  col-sm-4 end -->
                <div class="col-sm-4">
                    <!--  col-sm-4 begin -->

                    <div class="box same-height">
                        <!--  box same-height begin -->

                        <div class="icon">
                            <!--  icon begin -->

                            <i class="fa fa-tag"></i>

                        </div> <!--  icon end -->

                        <h3><a href="#">Best Prices</a></h3>

                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>

                    </div> <!--  box same-height end -->

                </div> <!--  col-sm-4 end -->
                <div class="col-sm-4">
                    <!--  col-sm-4 begin -->

                    <div class="box same-height">
                        <!--  box same-height begin -->

                        <div class="icon">
                            <!--  icon begin -->

                            <i class="fa fa-thumbs-up"></i>

                        </div> <!--  icon end -->

                        <h3><a href="#">100% Original</a></h3>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    </div> <!--  box same-height end -->

                </div> <!--  col-sm-4 end -->

            </div> <!--  same-height-row end -->

        </div> <!--  container end -->

    </div> <!--  advantages end -->

    <div id="hot">
        <!--  #hot begin -->

        <div class="box">
            <!--  box begin -->

            <div class="container">
                <!--  container begin -->

                <div class="col-md-12">
                    <!--  col-md-12 begin -->

                    <h2>
                        Our Latest Products
                    </h2>

                </div> <!--  col-md-12 end -->

            </div> <!--  container end -->

        </div> <!--  box end -->

    </div> <!--  #hot end -->

    <div id="content" class="container">
        <!--  content begin -->

        <div class="row">
            <!--  row begin -->

            <div class="col-sm-4 col-sm-6 single">
                <!--  col-sm-4 col-sm-6 single begin -->

                <div class="product">
                    <!--  product begin -->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                    </a>

                    <div class="text">
                        <!--  text begin -->

                        <h3>
                            <a href="details.php">Bonjour.mu T-Shirt</a>
                        </h3>

                        <p class="price">$30</p>

                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>

                    </div> <!--  text begin -->

                </div> <!--  product end -->

            </div> <!--  col-sm-4 col-sm-6 single end -->
            <div class="col-sm-4 col-sm-6 single">
                <!--  col-sm-4 col-sm-6 single begin -->

                <div class="product">
                    <!--  product begin -->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 1">
                    </a>

                    <div class="text">
                        <!--  text begin -->

                        <h3>
                            <a href="details.php">Bonjour.mu T-Shirt</a>
                        </h3>

                        <p class="price">$30</p>

                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>

                    </div> <!--  text begin -->

                </div> <!--  product end -->

            </div> <!--  col-sm-4 col-sm-6 single end -->
            <div class="col-sm-4 col-sm-6 single">
                <!--  col-sm-4 col-sm-6 single begin -->

                <div class="product">
                    <!--  product begin -->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                    </a>

                    <div class="text">
                        <!--  text begin -->

                        <h3>
                            <a href="details.php">Bonjour.mu T-Shirt</a>
                        </h3>

                        <p class="price">$30</p>

                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>

                    </div> <!--  text begin -->

                </div> <!--  product end -->

            </div> <!--  col-sm-4 col-sm-6 single end -->
            <div class="col-sm-4 col-sm-6 single">
                <!--  col-sm-4 col-sm-6 single begin -->

                <div class="product">
                    <!--  product begin -->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 1">
                    </a>

                    <div class="text">
                        <!--  text begin -->

                        <h3>
                            <a href="details.php">Bonjour.mu T-Shirt</a>
                        </h3>

                        <p class="price">$30</p>

                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>

                    </div> <!--  text begin -->

                </div> <!--  product end -->

            </div> <!--  col-sm-4 col-sm-6 single end -->
            <div class="col-sm-4 col-sm-6 single">
                <!--  col-sm-4 col-sm-6 single begin -->

                <div class="product">
                    <!--  product begin -->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 1">
                    </a>

                    <div class="text">
                        <!--  text begin -->

                        <h3>
                            <a href="details.php">Bonjour.mu T-Shirt</a>
                        </h3>

                        <p class="price">$30</p>

                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>

                    </div> <!--  text begin -->

                </div> <!--  product end -->

            </div> <!--  col-sm-4 col-sm-6 single end -->
            <div class="col-sm-4 col-sm-6 single">
                <!--  col-sm-4 col-sm-6 single begin -->

                <div class="product">
                    <!--  product begin -->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 1">
                    </a>

                    <div class="text">
                        <!--  text begin -->

                        <h3>
                            <a href="details.php">Bonjour.mu T-Shirt</a>
                        </h3>

                        <p class="price">$30</p>

                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>

                    </div> <!--  text begin -->

                </div> <!--  product end -->

            </div> <!--  col-sm-4 col-sm-6 single end -->
            <div class="col-sm-4 col-sm-6 single">
                <!--  col-sm-4 col-sm-6 single begin -->

                <div class="product">
                    <!--  product begin -->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 1">
                    </a>

                    <div class="text">
                        <!--  text begin -->

                        <h3>
                            <a href="details.php">Bonjour.mu T-Shirt</a>
                        </h3>

                        <p class="price">$30</p>

                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>

                    </div> <!--  text begin -->

                </div> <!--  product end -->

            </div> <!--  col-sm-4 col-sm-6 single end -->
            <div class="col-sm-4 col-sm-6 single">
                <!--  col-sm-4 col-sm-6 single begin -->

                <div class="product">
                    <!--  product begin -->

                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 1">
                    </a>

                    <div class="text">
                        <!--  text begin -->

                        <h3>
                            <a href="details.php">Bonjour.mu T-Shirt</a>
                        </h3>

                        <p class="price">$30</p>

                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>

                            <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>

                            </a>
                        </p>

                    </div> <!--  text begin -->

                </div> <!--  product end -->

            </div> <!--  col-sm-4 col-sm-6 single end -->

        </div> <!--  row end -->

    </div> <!--  content end -->

    <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>

</html>