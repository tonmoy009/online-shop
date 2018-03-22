<?php
    $sql = "SELECT * FROM slider WHERE slider_status = 1 ORDER BY sort_order ASC";
    $sliders = $con_obj->getAllData($sql);
//    echo '<pre>';
//    print_r($sliders);
//    exit();
?>

<div class="w3l_banner_nav_right">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <?php foreach ($sliders as $slider){?>
                            <li>
                                <div class="w3l_banner_nav_right_banner" style="background:url(../secure/uploads/slider/<?php echo $slider['slider_images']?>) no-repeat 0px 0px;">
                                    <h3>Make your <span>food</span> with Spicy.</h3>
                                    <div class="more">
                                        <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                    </div>
                                </div>
                            </li>
                            <?php }?>
                            
                        </ul>
                    </div>
                </section>
                <!-- flexSlider -->
                <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
                <script defer src="js/jquery.flexslider.js"></script>
                <script type="text/javascript">
                    $(window).load(function () {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            start: function (slider) {
                                $('body').removeClass('loading');
                            }
                        });
                    });
                </script>
                <!-- //flexSlider -->
            </div>