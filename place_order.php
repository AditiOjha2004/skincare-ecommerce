<?php
session_start();
if(!isset($_SESSION['cart'])) die("No order found");

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$total = $_POST['total'];

unset($_SESSION['cart']);
?>
<!DOCTYPE html>
<html>
<head>
<title>Order Placed</title>
<style>
body{font-family:Arial;background:#f6f7fb;padding:40px;text-align:center}
.box{
  background:white;padding:40px;border-radius:20px;
  display:inline-block;box-shadow:0 10px 20px rgba(0,0,0,.1)
}
a{display:inline-block;margin-top:20px;color:#7f00ff}
</style>
</head>
<body>

<div class="box">
  <h1>Order Placed Successfully 🎉</h1>
  <p>Thank you <?php echo $name; ?>!</p>
  <p>Total Paid: ₹<?php echo $total; ?></p>
  <p>Delivery Address: <?php echo $address; ?></p>
  <a href="index.php">Continue Shopping</a>
</div>

</body>
</html>
