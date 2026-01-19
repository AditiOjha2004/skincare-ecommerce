<?php
session_start();
include "db.php";

if(!isset($_GET['id'])){
  header("Location: index.php");
  exit();
}

$id = intval($_GET['id']);

$q = mysqli_query($conn,"SELECT * FROM products WHERE id=$id");
$p = mysqli_fetch_assoc($q);

if(!$p){
  header("Location: index.php");
  exit();
}

if(!isset($_SESSION['cart'])){
  $_SESSION['cart'] = [];
}

if(isset($_SESSION['cart'][$id])){
  $_SESSION['cart'][$id]['qty']++;
}else{
  $_SESSION['cart'][$id] = [
    "id"=>$p['id'],
    "name"=>$p['name'],
    "price"=>$p['price'],
    "image"=>$p['image'],
    "qty"=>1
  ];
}

header("Location: cart.php");
exit();
?>
