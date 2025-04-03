
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <?php
session_start();
if($_SESSION['Active'] == false){ 
    header("location:login.php");
    exit;
}
/* the code above ensures that all pages are protected and accessible only after login */
?>

<?php require_once('../template/header.php'); ?>
