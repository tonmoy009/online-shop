
<!DOCTYPE html>
<html>
    <?php 
    
    include './includes/head.php';
    $id = base64_decode($_GET['id']);
    $categories = $con_obj->getAllData("SELECT * FROM product_category WHERE category_id = '$id'");
    $products = $con_obj->getAllData("SELECT * FROM product WHERE category_id = '$id'");
    
    ?>

    <body>
        <!-- header -->
        <?php include './includes/header.php';?>
        <!-- //header -->
        <!-- products-breadcrumb -->
        <div class="products-breadcrumb">
            <div class="container">
                <ul>
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
                    <li><?php echo $categories[0]['category_name']?></li>
                </ul>
            </div>
        </div>
        <!-- //products-breadcrumb -->
        <!-- banner -->
        <div class="banner">
            <?php include './includes/side-nav.php';?>
            <div class="w3l_banner_nav_right">
                <div class="w3l_banner_nav_right_banner4">
                    <h3>Best Deals For New Products<span class="blink_me"></span></h3>
                </div>
                <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
                    <h3><?php echo $categories[0]['category_name']?></h3>
                    <div class="w3ls_w3l_banner_nav_right_grid1">
                        <?php foreach ($products as $cat_product){?>
                        
                        
                        <div class="col-md-3 w3ls_w3l_banner_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="images/offer.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="product-details.php?id=<?php echo base64_encode($categories[0]['category_id']);?>"><img src="../secure/uploads/products/<?php echo $cat_product['product_images']?>" alt=" " class="img-responsive" /></a>
                                                    <p><?php echo $cat_product['product_name']?></p>
                                                    <h4>$<?php echo $cat_product['product_price']?></h4>
                                                </div>
                                                <div class="snipcart-details">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart" />
                                                            <input type="hidden" name="add" value="1" />
                                                            <input type="hidden" name="business" value=" " />
                                                            <input type="hidden" name="item_name" value="dishwash gel, lemon" />
                                                            <input type="hidden" name="amount" value="8.00" />
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
                       <?php }?>
                       
                        
                        <div class="clearfix"> </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //banner -->
      <?php include './includes/footer.php';?>
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