<?php
include './class/connectionBridge.php';
$con_obj = new ConnectionBridge();
//$sql = ;
$categories = $con_obj->getAllData("SELECT * FROM product_category");
$brands = $con_obj->getAllData("SELECT * FROM product_brand");
$sizes = $con_obj->getAllData("SELECT * FROM size");
$colors = $con_obj->getAllData("SELECT * FROM color");
?>
<!DOCTYPE html>
<html lang="en">

    <?php include './includes/head.php'; ?>

    <body class="fix-header card-no-border">
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div> 
        <div id="main-wrapper">

            <!-- Topbar header - style you can find in pages.scss -->
            <?php include './includes/head-nav.php'; ?> 
            <!-- End Topbar header -->

            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <?php include './includes/side-nav.php'; ?>
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Add Product</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                            <li class="breadcrumb-item active">Product </li>
                        </ol>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-sm-10 col-sm-offset-1">

                                            <form action="controller/product-save.php" method="POST" enctype="multipart/form-data">
                                                <?php echo isset($_SESSION['err_msg']) ? $_SESSION['err_msg'] : ''; ?>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Product Name</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Product Name" name="product_name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Product Model</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Product Model" name="product_model">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Product Category</label>
                                                    <select class="form-control" name="category">
                                                        <option value="0">Choose a Category</option>
                                                        <?php foreach ($categories as $category) { ?>
                                                            <option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Product price</label>
                                                    <input type="number" class="form-control" id="exampleInputEmail1"  placeholder="Product Price" name="product_price">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Product Quantity</label>
                                                    <input type="number" class="form-control" id="exampleInputEmail1"  placeholder="Product Quantity" name="product_quantity">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Product Size</label>

                                                    <div class="demo-checkbox">
                                                        <?php foreach ($sizes as $key => $size) { ?>
                                                            <input type="checkbox" id="basic_checkbox_size<?php echo $key; ?>" name="product_size[]" value="<?php echo $size['size_name']; ?>"  />
                                                            <label for="basic_checkbox_size<?php echo $key; ?>"><?php echo $size['size_name']; ?></label>
                                                        <?php } ?>

                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Product Color</label>

                                                    <div class="demo-checkbox">
                                                        <?php foreach ($colors as $key => $color) { ?>
                                                            <input type="checkbox" id="basic_checkbox_color<?php echo $key; ?>" name="product_color[]" value="<?php echo $color['color_name']; ?>"  />
                                                            <label for="basic_checkbox_color<?php echo $key; ?>"><?php echo $color['color_name']; ?></label>
                                                        <?php } ?>

                                                    </div>
                                                </div>

                                                

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Product Discount</label>
                                                    <input type="number" class="form-control" id="exampleInputEmail1"  placeholder="Product Discount" name="product_discount">
                                                </div>


                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Product Brand</label>
                                                    <select class="form-control" name="brand">
                                                        <option value="0">Choose a Brand</option>
                                                        <?php foreach ($brands as $brand) { ?>
                                                            <option value="<?php echo $brand['brand_id'] ?>"><?php echo $brand['brand_name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Product Image</label>
                                                    <input type="file" class="form-control" id="exampleInputEmail1"  name="product_images">
                                                </div>


                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Description</label>
                                                    <textarea class="textarea_editor form-control" rows="15" placeholder="Description" name="product_description"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Status</label>
                                                    <select class="form-control" name="product_status">
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary" name="btn">Submit</button>
                                                </div>


                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>



                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right sidebar -->
                    <!-- ============================================================== -->
                    <!-- .right-sidebar -->
                    <div class="right-sidebar">
                        <div class="slimscrollright">
                            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                            <div class="r-panel-body">
                                <ul id="themecolors" class="m-t-20">
                                    <li><b>With Light sidebar</b></li>
                                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                                </ul>
                                <ul class="m-t-20 chatonline">
                                    <li><b>Chat option</b></li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Right sidebar -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer">
                    © 2017 Admin Press Admin by themedesigner.in
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="../assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="js/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!--Custom JavaScript -->
        <script src="js/custom.min.js"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

        <script src="../assets/plugins/html5-editor/wysihtml5-0.3.0.js"></script>
        <script src="../assets/plugins/html5-editor/bootstrap-wysihtml5.js"></script>

        <script>
            $(document).ready(function () {
                $('.textarea_editor').wysihtml5();
            });
        </script>
    </body>

</html>

<?php unset($_SESSION['err_msg']); ?>