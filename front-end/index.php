

<!DOCTYPE html>
<html>
    <?php
    include './includes/head.php';
    $con_obj = new ConnectionBridge();
    $sql = "SELECT * FROM product WHERE product_status = '1'";
    $hot_offers = $con_obj->getAllData($sql);
//    echo '<pre>';
//    print_r($hot_offers);
    ?>
    <body>
        <!-- header -->
        <?php include './includes/header.php'; ?>
        <!-- //header -->
        <!-- banner -->
        <div class="banner">
            <?php include './includes/side-nav.php'; ?>
            <?php include './includes/slider.php'; ?>
            <div class="clearfix"></div>
        </div>
        <!-- banner -->
        <div class="banner_bottom">
            <div class="wthree_banner_bottom_left_grid_sub">
            </div>
            <div class="wthree_banner_bottom_left_grid_sub1">
                <div class="col-md-4 wthree_banner_bottom_left">
                    <div class="wthree_banner_bottom_left_grid">
                        <img src="images/4.jpg" alt=" " class="img-responsive" />
                        <div class="wthree_banner_bottom_left_grid_pos">
                            <h4>Discount Offer <span>25%</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wthree_banner_bottom_left">
                    <div class="wthree_banner_bottom_left_grid">
                        <img src="images/5.jpg" alt=" " class="img-responsive" />
                        <div class="wthree_banner_btm_pos">
                            <h3>introducing <span>best store</span> for <i>groceries</i></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wthree_banner_bottom_left">
                    <div class="wthree_banner_bottom_left_grid">
                        <img src="images/6.jpg" alt=" " class="img-responsive" />
                        <div class="wthree_banner_btm_pos1">
                            <h3>Save <span>Upto</span> $10</h3>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- top-brands -->
        <div class="top-brands">
            <div class="container">
                <h3>Hot Offers</h3>
                <div class="agile_top_brands_grids">

                    <?php
                    foreach ($hot_offers as $product) {
                        if ($product['product_discount'] > 0 && $product['product_discount'] < $product['product_price']) {
                            ?>
                            <div class="col-md-3 top_brand_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos"><img src="images/offer.png" alt=" " class="img-responsive" /></div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block" >
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img title=" " alt=" " src="../secure/uploads/products/<?php echo $product['product_images'] ?>" /></a>		
                                                        <p><?php echo $product['product_name']?></p>
                                                        <h4><?php echo $product['product_discount']; ?><span><?php echo $product['product_price']; ?></span></h4>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details">
                                                        <form action="checkout.html" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
                                                                <input type="hidden" name="amount" value="7.99" />
                                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                                            </fieldset>

                                                        </form>

                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php }
                    } ?>



                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //top-brands -->
        <!-- fresh-vegetables -->
        <div class="fresh-vegetables">
            <div class="container">
                <h3>Top Products</h3>
                <div class="w3l_fresh_vegetables_grids">
                    <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
                        <div class="w3l_fresh_vegetables_grid2">
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">All Brands</a></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Vegetables</a></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Fruits</a></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i><a href="drinks.html">Juices</a></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i><a href="pet.html">Pet Food</a></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i><a href="bread.html">Bread & Bakery</a></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i><a href="household.html">Cleaning</a></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Spices</a></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dry Fruits</a></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dairy Products</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9 w3l_fresh_vegetables_grid_right">
                        <div class="col-md-4 w3l_fresh_vegetables_grid">
                            <div class="w3l_fresh_vegetables_grid1">
                                <img src="images/8.jpg" alt=" " class="img-responsive" />
                            </div>
                        </div>
                        <div class="col-md-4 w3l_fresh_vegetables_grid">
                            <div class="w3l_fresh_vegetables_grid1">
                                <div class="w3l_fresh_vegetables_grid1_rel">
                                    <img src="images/7.jpg" alt=" " class="img-responsive" />
                                    <div class="w3l_fresh_vegetables_grid1_rel_pos">
                                        <div class="more m1">
                                            <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w3l_fresh_vegetables_grid1_bottom">
                                <img src="images/10.jpg" alt=" " class="img-responsive" />
                                <div class="w3l_fresh_vegetables_grid1_bottom_pos">
                                    <h5>Special Offers</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 w3l_fresh_vegetables_grid">
                            <div class="w3l_fresh_vegetables_grid1">
                                <img src="images/9.jpg" alt=" " class="img-responsive" />
                            </div>
                            <div class="w3l_fresh_vegetables_grid1_bottom">
                                <img src="images/11.jpg" alt=" " class="img-responsive" />
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="agileinfo_move_text">
                            <div class="agileinfo_marquee">
                                <h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>
                            </div>
                            <div class="agileinfo_breaking_news">
                                <span> </span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //fresh-vegetables -->
        <!-- newsletter -->

        <!-- //newsletter -->
        <!-- footer -->
<?php include './includes/footer.php'; ?>
        <!-- //footer -->
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                            $(this).toggleClass('open');
                        }
                );
            });
        </script>
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <!-- //here ends scrolling icon -->
        <script src="js/minicart.js"></script>
        <script>
            paypal.minicart.render();

            paypal.minicart.cart.on('checkout', function (evt) {
                var items = this.items(),
                        len = items.length,
                        total = 0,
                        i;

                // Count the number of each item in the cart
                for (i = 0; i < len; i++) {
                    total += items[i].get('quantity');
                }

                if (total < 3) {
                    alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                    evt.preventDefault();
                }
            });

        </script>
    </body>
</html>
