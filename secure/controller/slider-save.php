<?php
session_start();
include '../class/connectionBridge.php';
$con_obj = new ConnectionBridge();

$slider_url = addslashes($_POST['slider_url']);
$slider_title = addslashes($_POST['slider_title']);
$sort_order = $_POST['sort_order'];
$slider_status = $_POST['slider_status'];

$ext_array = ['jpg', 'jpeg', 'png', 'gif'];

if ($_FILES) {
    $ext = array_pop(explode('.', $_FILES['slider_images']['name']));

    if (in_array($ext, $ext_array)) {
        $file_name = time() . '_' .'.'. $ext;
        move_uploaded_file($_FILES['slider_images']['tmp_name'], '../uploads/slider/'.$file_name);
    } else {
        $_SESSION['err_msg'] = "<div class='alert alert-danger'>Invalid Formate</div>";
        header("Location:../add-slider.php");
        exit();
    }
}



$sql = "INSERT INTO slider(slider_url, slider_title, slider_images, sort_order, slider_status) "
        . "VALUES ('$slider_url', '$slider_title', '$file_name', '$sort_order', '$slider_status')";

$status = $con_obj->insertData($sql);

if ($status) {
    $_SESSION['err_msg'] = "<div class='alert alert-success'>Slider Image Save Successfully!.</div>";
} else {
    $_SESSION['err_msg'] = "<div class='alert alert-danger'>Unable to save Product!.</div>";
}

header("Location:../add-slider.php");



?>