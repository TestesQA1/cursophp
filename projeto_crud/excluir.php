<?php
include_once("inc/utils.php");
var_dump($_POST);
$connection = getConnection();

if($connection && $_POST){
    $removed = removeProduct($connection, $_POST['id']);
    if($removed){
        header("Location: lista.php?action=remove&message=success");
    }else {
        header("Location: lista.php?action=remove&message=failed");
    }
}
