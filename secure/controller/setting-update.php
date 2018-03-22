<?php
    include '../class/connectionBridge.php';
    $con_obj = new ConnectionBridge();
    $id = $_POST['setting_id'];
    $sql = "UPDATE settings SET "
            . "contact_email = '$_POST[contact_email]', "
            . "contact_phone = '$_POST[contact_phone]', "
            . "support_email = '$_POST[support_email]', "
            . "support_phone = '$_POST[support_phone]', "
            . "facebook = '$_POST[facebook]', "
            . "google_plus = '$_POST[google_plus]', "
            . "twitter = '$_POST[twitter]',"
            . "tumblr = '$_POST[tumblr]', "
            . "myspace = '$_POST[myspace]', "
            . "address = '$_POST[address]' "
            . "WHERE setting_id = '$id'";
    
    $status = $con_obj->updateData($sql);
    
    if (!$status) {
    $_SESSION['err_msg'] = '<div class="alert alert-denger">Unable to Update</div>';
    header("Location: ../edit-setting.php");
}
header("Location: ../manage-setting.php");
?>