<?php

session_start();
include '../class/connectionBridge.php';
$con_obj = new ConnectionBridge();
$product_name = addslashes($_POST['product_name']);
$product_model = addslashes($_POST['product_model']);
$category = $_POST['category'];
$product_price = $_POST['product_price'];
$product_quantity = $_POST['product_quantity'];
$product_size = json_encode($_POST['product_size']);
$product_color = json_encode($_POST['product_color']);
$brand = $_POST['brand'];
$product_discount = $_POST['product_discount'];
//$file_name = $_POST['product_images'];
$product_description = addslashes($_POST['product_description']);
$product_status = $_POST['product_status'];

$ext_array = ['jpg', 'jpeg', 'png', 'gif'];

if ($_FILES) {
    $ext = array_pop(explode('.', $_FILES['product_images']['name']));
    if (in_array($ext, $ext_array)) {
        $file_name = time() . '_' . $product_model . '.' . $ext;
        move_uploaded_file($_FILES['product_images']['tmp_name'], '../uploads/products/' .$file_name);
    } else {
        $_SESSION['err_msg'] = "<div class='alert alert-danger'>Invalid Formate</div>";
        header("Location:../add-product.php");
        exit();
    }
}




$sql = "INSERT INTO product (product_name, product_model, category_id, product_price, product_quantity, product_size, product_color, brand_id, product_discount, product_images, product_description, product_status) VALUES ('$product_name', '$product_model', '$category', '$product_price', '$product_quantity', '$product_size', '$product_color', '$brand', '$product_discount', '$file_name', '$product_description', '$product_status')";

$status = $con_obj->insertData($sql);
//echo '<pre>';
//print_r($status);
//exit();
if ($status) {
    $_SESSION['err_msg'] = "<div class='alert alert-success'>Product Save Successfully!.</div>";
} else {
    $_SESSION['err_msg'] = "<div class='alert alert-danger'>Unable to save Product!.</div>";
}

header("Location:../add-product.php");
?>