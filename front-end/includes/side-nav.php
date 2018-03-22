<?php
//include '../secure/class/connectionBridge.php';
//$con_obj = new ConnectionBridge();
$sql = "SELECT category_id, category_name FROM product_category WHERE status = 1 AND parent = 0 ORDER BY category_name DESC";
$categories = $con_obj->getAllData($sql);
?>

<div class="w3l_banner_nav_left">
    <nav class="navbar nav_bottom">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div> 
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav nav_1">
                <?php
                foreach ($categories as $category) {
                    $sql = "SELECT category_id, category_name FROM product_category WHERE status = 1 AND parent = '$category[category_id]'";
                    $sub_categories = $con_obj->getAllData($sql);
                    ?>
                    <li>

                        <a href="category-product.php?id=<?php echo base64_encode($category['category_id']);?>" <?php if (count($sub_categories) > 0) { ?>class="dropdown-toggle" data-toggle="dropdown"<?php } ?>><?php echo $category['category_name'] ?><?php if (count($sub_categories) > 0) { ?><span class="caret"></span><?php } ?></a>	


                        <?php if (count($sub_categories) > 0) { ?>

                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>	
                                        <?php foreach ($sub_categories as $sub_category) { ?>

                                            <li><a href="category-product.php?id=<?php echo base64_encode($sub_category['category_id']);?>"><?php echo $sub_category['category_name'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>                  
                            </div>	

                        <?php } ?>
                    </li>

                <?php } ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>