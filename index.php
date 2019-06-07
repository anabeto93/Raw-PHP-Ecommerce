<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Richard's Boutique</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- Top Nav Bar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Richard's Boutique</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Men
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Shirts</a>
                    <a class="dropdown-item" href="#">Pants</a>
                    <a class="dropdown-item" href="#">Shoes</a>
                    <a class="dropdown-item" href="#">Accessories</a>
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
</nav>

<!-- Header -->
<div id="headerWrapper">
    <div id="back-flower">
    </div>
    <div id="logotext">
        <img src="images/headerlogo/text2.png" alt="">
    </div>
    <div id="fore-flower">
        <img src="images/headerlogo/fore-flower2.png" alt="Foreground flower">
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar -->
        <div class="col-md-2">
            Left Side Bar
        </div>

        <!--main content-->
        <div class="col-md-8">
            <h2 class="text-center">Feature Products</h2>
            <div class="row">
                <div class="col-md-3">
                    <h4>Woman's Shirt</h4>
                    <img src="images/products/women7.png" alt="Woman's Shirt" class="img-thumb"/>
                    <p class="list-price text-danger">List Price: <strike>$54.99</strike></p>
                    <p class="price">Our Price: $34.99 </p>
                    <button type="button" class="btn btn-sm btn-success"
                            data-toggle="modal" data-target="#details-1">Details
                    </button>
                </div>
                <div class="col-md-3">
                    <h4>Levis Jeans</h4>
                    <img src="images/products/men4.png" alt="Levi Jeans" class="img-thumb"/>
                    <p class="list-price text-danger">List Price: <strike>$45.99</strike></p>
                    <p class="price">Our Price: $29.99 </p>
                    <button type="button" class="btn btn-sm btn-success"
                            data-toggle="modal" data-target="#details-1">Details
                    </button>
                </div>
                <div class="col-md-3">
                    <h4>Holister Shirt</h4>
                    <img src="images/products/men1.png" alt="Holister Shirt" class="img-thumb"/>
                    <p class="list-price text-danger">List Price: <strike>$25.99</strike></p>
                    <p class="price">Our Price: $19.99 </p>
                    <button type="button" class="btn btn-sm btn-success"
                            data-toggle="modal" data-target="#details-1">Details
                    </button>
                </div>
                <div class="col-md-3">
                    <h4>Fancy Shoes</h4>
                    <img src="images/products/women6.png" alt="Fancy Shoes" class="img-thumb"/>
                    <p class="list-price text-danger">List Price: <strike>$69.99</strike></p>
                    <p class="price">Our Price: $19.99</p>
                    <button type="button" class="btn btn-sm btn-success"
                            data-toggle="modal" data-target="#details-1">Details
                    </button>
                </div>
                <div class="col-md-3">
                    <h4>Boys Hoodie</h4>
                    <img src="images/products/boys1.png" alt="Boys Hoodie" class="img-thumb"/>
                    <p class="list-price text-danger">List Price: <strike>$24.99</strike></p>
                    <p class="price">Our Price: $18.99</p>
                    <button type="button" class="btn btn-sm btn-success"
                            data-toggle="modal" data-target="#details-1">Details
                    </button>
                </div>
                <div class="col-md-3">
                    <h4>Girls Dress</h4>
                    <img src="images/products/girls3.png" alt="Girls Dress" class="img-thumb"/>
                    <p class="list-price text-danger">List Price: <strike>$54.99</strike></p>
                    <p class="price">Our Price: $19.99</p>
                    <button type="button" class="btn btn-sm btn-success"
                            data-toggle="modal" data-target="#details-1">Details
                    </button>
                </div>
                <div class="col-md-3">
                    <h4>Woman's Skirt</h4>
                    <img src="images/products/women3.png" alt="Woman's Skirt" class="img-thumb"/>
                    <p class="list-price text-danger">List Price: <strike>$29.99</strike></p>
                    <p class="price">Our Price: $19.99</p>
                    <button type="button" class="btn btn-sm btn-success"
                            data-toggle="modal" data-target="#details-1">Details
                    </button>
                </div>
                <div class="col-md-3">
                    <h4>Purse</h4>
                    <img src="images/products/women5.png" alt="Purpose" class="img-thumb"/>
                    <p class="list-price text-danger">List Price: <strike>$49.99</strike></p>
                    <p class="price">Our Price: $39.99</p>
                    <button type="button" class="btn btn-sm btn-success"
                            data-toggle="modal" data-target="#details-1">Details
                    </button>
                </div>
            </div>
        </div>

        <!-- Right Sidebar-->
        <div class="col-md-2">Right Sidebar</div>
    </div>

</div>

<!-- Footer -->
<footer class="text-center" id="footer">
    &copy; Copyright 2016-2019 <a href="https://humvite.com">Humvite Tech Solutions</a>
</footer>

<!--Details Modal-->
<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog"
     aria-labelledby="details-1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="details-1Label">Levis Jeans</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="center-block">
                                <img src="images/products/men4.png" alt="Levis Jeans"
                                     class="details img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h4>Details</h4>
                            <p>These jeans are amazing!. </p>
                            <hr>
                            <p>Price: $34.99</p>
                            <p>Brand: Levis</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"> <span class="fa fa-shopping-cart" aria-hidden="true"></span> Add to Cart</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        console.log('Ready for some UX actions');


    });

    $(window).scroll(function () {
        var vscroll = $(this).scrollTop();
        //console.log(vscroll);

        $('#logotext').css({
            "transform": `translate(-50%, ${0.85 * vscroll}px)`
        });

        $('#fore-flower').css({
            "transform": `translate(${vscroll / 5}px, -${vscroll / 12}px)`
        })
    });
</script>
</body>
</html>