<?php include "includes/head.php"?>
<!-- Top Nav Bar -->
<?php include "includes/navigation.php" ?>

<!-- Header -->
<?php include "includes/headerfull.php" ?>
        <!-- Left Sidebar -->
        <?php include "includes/left_sidebar.php" ?>

        <!--main content-->
        <div class="col-md-8">
            <h2 class="text-center">Featured Products</h2>
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
        <?php include "includes/right_sidebar.php" ?>
    </div><!-- End of Row -->

</div><!-- End of Container-Fluid -->

<!--Details Modal-->
<?php include "includes/details_modal.php" ?>

<!-- Footer -->
<?php include "includes/footer.php" ?>