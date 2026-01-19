<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Your Cart</title>
  <style>
    body{font-family:Arial;background:#f6f7fb;padding:20px}
    table{width:100%;background:white;border-radius:10px;overflow:hidden}
    th,td{padding:12px;text-align:center;border-bottom:1px solid #eee}
    th{background:#7f00ff;color:white}
    img{width:60px;border-radius:10px}
    .total{font-size:20px;font-weight:bold;margin-top:20px}
    a.btn{
      background:#7f00ff;color:white;padding:8px 15px;
      text-decoration:none;border-radius:20px
    }
  </style>
</head>
<body>

<?php include "navbar.php"; ?>

<h2>Your Shopping Cart</h2>

<?php
if(empty($_SESSION['cart'])){
  echo "<p>Cart is empty.</p>";
  exit();
}
?>

<table>
<tr>
  <th>Image</th>
  <th>Name</th>
  <th>Price</th>
  <th>Qty</th>
  <th>Subtotal</th>
</tr>

<?php
$total = 0;
foreach($_SESSION['cart'] as $item){
  $sub = $item['price'] * $item['qty'];
  $total += $sub;
?>
<tr>
  <td><img src="images/<?php echo $item['image']; ?>"></td>
  <td><?php echo $item['name']; ?></td>
  <td>₹<?php echo $item['price']; ?></td>
  <td><?php echo $item['qty']; ?></td>
  <td>₹<?php echo $sub; ?></td>
</tr>
<?php } ?>
</table>

<div class="total">Total: ₹<?php echo $total; ?></div>
<br>
<a class="btn" href="index.php">Continue Shopping</a>
<a class="btn" href="checkout.php">Checkout</a>

</body>
</html>
