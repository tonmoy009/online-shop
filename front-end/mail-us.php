
<!DOCTYPE html>
<html>
    <?php
    include './includes/head.php';
    $con_obj = new ConnectionBridge();
    $sql = "SELECT * FROM settings";
    $settings = $con_obj->getAllData($sql);
    ?>

    <body>
        <!-- header -->
        <?php include './includes/header.php'; ?>
        <!-- //header -->
        <!-- products-breadcrumb -->
        <div class="products-breadcrumb">
            <div class="container">
                <ul>
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
                    <li>Mail Us</li>
                </ul>
            </div>
        </div>
        <!-- //products-breadcrumb -->
        <!-- banner -->
        <div class="banner">
            <?php include './includes/side-nav.php'; ?>
            <div class="w3l_banner_nav_right">
                <!-- mail -->
                <div class="mail">
                    <h3>Mail Us</h3>
                    <div class="agileinfo_mail_grids">
                        <div class="col-md-4 agileinfo_mail_grid_left">
                            <ul>
                                <li><i class="fa fa-home" aria-hidden="true"></i></li>
                                <li>address<span><?php echo $settings[0]['address'] ?></span></li>
                            </ul>
                            <ul>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
                                <li>email<span><a href="#"><?php echo $settings[0]['contact_email'] ?></a></span></li>
                            </ul>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                                <li>call to us<span><?php echo $settings[0]['contact_phone'] ?></span></li>
                            </ul>
                        </div>
                        <div class="col-md-8 agileinfo_mail_grid_right">
                            <form action="#" method="post">
                                <div class="col-md-6 wthree_contact_left_grid">
                                    <input type="text" name="Name" value="Name*" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Name*';
                                            }" required="">
                                    <input type="email" name="Email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Email*';
                                            }" required="">
                                </div>
                                <div class="col-md-6 wthree_contact_left_grid">
                                    <input type="text" name="Telephone" value="Telephone*" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Telephone*';
                                            }" required="">
                                    <input type="text" name="Subject" value="Subject*" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Subject*';
                                            }" required="">
                                </div>
                                <div class="clearfix"> </div>
                                <textarea  name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Message...';
                                        }" required="">Message...</textarea>
                                <input type="submit" value="Submit">
                                <input type="reset" value="Clear">
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <!-- //mail -->
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //banner -->
        <!-- map -->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d96748.15352429623!2d-74.25419879353115!3d40.731667701988506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sshopping+mall+in+New+York%2C+NY%2C+United+States!5e0!3m2!1sen!2sin!4v1467205237951" style="border:0"></iframe>
        </div>
        <!-- //map -->
        <!-- newsletter -->
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

        </script>s
    </body>
</html>