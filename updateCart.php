<?php
session_start();
include 'functions.php';

if(isset($_POST['quantity']) && isset($_POST['id'])){
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];
    $fruit = $_SESSION['products'][$id];
    $status = updateCart($fruit, $quantity);
    header('Location: cart.php?message='.$status);
    exit();

}else{
    header("Location: home.php");
    exit();
}
?>