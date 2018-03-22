<?php

session_start();
include '../class/connectionBridge.php';
$con_obj = new ConnectionBridge();
$id = $_POST['slider_id'];
//$category_description = addslashes($_POST['category_description']);
$ext_array = ['jpg', 'jpeg', 'png', 'gif'];
if ($_FILES) {
    $ext = array_pop(explode('.', $_FILES['slider_images']['name']));

    if (in_array($ext, $ext_array)) {
        $file_name = time() . '_' . '.' . $ext;
        move_uploaded_file($_FILES['slider_images']['tmp_name'], '../uploads/slider/' . $file_name);
    } else {
        $_SESSION['err_msg'] = "<div class='alert alert-danger'>Invalid Formate</div>";
        header("Location:../manage-slider.php");
        exit();
    }
}


$sql = "UPDATE slider SET "
        . "slider_url = '$_POST[slider_url]', "
        . "slider_title = '$_POST[slider_title]', "
//            . "category_description = '$category_description', "
        . "slider_images = '$file_name', "
        . "sort_order = '$_POST[sort_order]', "
        . "slider_status = '$_POST[slider_status]'"
        . "WHERE slider_id = '$id'";
$status = $con_obj->updateData($sql);

if (!$status) {
    $_SESSION['err_msg'] = '<div class="alert alert-denger">Unable to Update</div>';
    header("Location: ../edit-slider.php");
}
header("Location: ../manage-slider.php");
?>