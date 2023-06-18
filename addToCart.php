<?php
session_start();
include 'functions.php';

if(isset($_POST['quantity']) && isset($_POST['id'])){
    $quantity = $_POST['quantity'];
    $id = $_POST['id'];
    $fruit = $_SESSION['products'][$id];

    
    if(isset($_SESSION['cart']) || !empty($_SESSION['cart'])){
        $status = addToCart($fruit, $quantity);
        header('Location: home.php?message='.$status);
        exit();
    }else{
        $_SESSION['cart'] = array(
            array(
            'id'=>$fruit['id'],  
            'name'=>$fruit['name'],
            'price'=>$fruit['price'],
            'image'=>$fruit['image'],
            'quantity'=>$quantity
            )
        );
        header('Location: home.php?message='.$fruit['name'].' added');
        exit();
    }

}else{
    header("Location: home.php");
    exit();
}
?>