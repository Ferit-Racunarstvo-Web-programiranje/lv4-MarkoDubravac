<?php
session_start();
include "db_conn.php";

if(!isset($_SESSION['products'])){
  $sql = "SELECT * FROM fruits";
  $stmt = $spoj->prepare($sql);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($db_id, $db_name, $db_price, $db_image, $db_description);

  $fruitArray = array();
  for($i = 0; $i<$stmt->num_rows; $i++){
    $stmt->fetch();
    $fruitArray[] = array(
      'id'=>$db_id,
      'name'=>$db_name,
      'price'=>$db_price,
      'image'=>$db_image,
      'description'=>$db_description
    ); 
  }
  
  $_SESSION['products'] = $fruitArray;
  $spoj->close();
  header("Location: home.php");
  exit();
}

header("Location: home.php");
?>