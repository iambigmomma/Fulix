<?php

require_once("includes/config.php");
require_once("includes/classes/PreviewProvider.php");
require_once("includes/classes/CategoryContainers.php");
require_once("includes/classes/Entity.php");
require_once("includes/classes/EntityProvider.php");

if(!isset($_SESSION["userLoggedIn"])) {
    header("Location: register.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Fulix</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/02e3a7e3d7.js" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>
<div class="wrapper">

