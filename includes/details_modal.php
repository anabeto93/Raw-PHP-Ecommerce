<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog"
     aria-labelledby="details-1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title col-11 text-center" id="details-1Label">Levis Jeans</h5>
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
                            <form action="add_cart.php" method="POST">
                                <div class="form-group">
                                    <div class="col-xs-3">
                                        <label for="quantity">Quantity:</label>
                                        <input type="number" class="form-control"
                                               id="quantity" name="quantity">

                                    </div>
                                    <p>Available: 3</p>
                                </div>
                                <div class="form-group">
                                    <label for="size">Size:</label>
                                    <select name="size" id="size" class="form-control">
                                        <option value=""></option>
                                        <option value="28">28</option>
                                        <option value="32">32</option>
                                        <option value="36">36</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">
                    <span class="fa fa-shopping-cart" aria-hidden="true"></span> Add to Cart
                </button>
            </div>
        </div>
    </div>
</div>