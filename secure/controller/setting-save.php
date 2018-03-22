<?php

include '../class/connectionBridge.php';
$con_obj = new ConnectionBridge();
$address = addslashes($_POST['address']);
$sql = "INSERT INTO settings(contact_email, contact_phone, support_email, support_phone, facebook, google_plus, twitter, tumblr, myspace, address) VALUES ('$_POST[contact_email]', '$_POST[contact_phone]', '$_POST[support_email]', '$_POST[support_phone]', '$_POST[facebook]', '$_POST[google_plus]', '$_POST[twitter]', '$_POST[tumblr]', '$_POST[myspace]', '$address')";

$status = $con_obj->insertData($sql);

if ($status) {
    $_SESSION['err_msg'] = "<div class='alert alert-success'>Product Save Successfully!.</div>";
} else {
    $_SESSION['err_msg'] = "<div class='alert alert-danger'>Unable to save Product!.</div>";
}

header("Location: ../add-setting.php");
?>