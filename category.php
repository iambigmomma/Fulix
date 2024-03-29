<?php
require_once("includes/header.php");

if(!isset($_GET['id'])){
    ErrorMessage::show("No id passed to the page");
}

$preview = new PreviewProvider($con, $userLoggedIn);
echo $preview->createCategroyPreviewVideo($_GET['id']);

$containers = new CategoryContainers($con, $userLoggedIn);
echo $containers->showCategory($_GET['id']);

?>
