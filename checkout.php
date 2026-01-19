<?php
session_start();
include "db.php";

if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
  die("Your cart is empty. <a href='index.php'>Go Shopping</a>");
}

$total = 0;
$items = [];

foreach($_SESSION['cart'] as $id=>$qty){
  $id = intval($id);
  $qty = intval($qty);

  $q = mysqli_query($conn,"SELECT * FROM products WHERE id=$id");
  if($p = mysqli_fetch_assoc($q)){
    $price = floatval($p['price']);
    $subtotal = $price * $qty;

    $p['qty'] = $qty;
    $p['subtotal'] = $subtotal;
    $total += $subtotal;
    $items[] = $p;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<style>
body{font-family:Arial;background:#f6f7fb;padding:40px}
.box{
  max-width:700px;margin:auto;background:white;padding:30px;
  border-radius:20px;box-shadow:0 10px 20px rgba(0,0,0,.1)
}
.item{display:flex;justify-content:space-between;margin:10px 0}
.total{font-size:22px;font-weight:bold;margin-top:20px}
input,button{padding:10px;width:100%;margin-top:10px}
button{
  background:#7f00ff;color:white;border:none;border-radius:25px;
  font-size:18px;cursor:pointer
}
</style>
</head>
<body>

<?php include "navbar.php"; ?>

<div class="box">
  <h1>Checkout</h1>

  <?php foreach($items as $i){ ?>
    <div class="item">
      <span><?php echo $i['name']; ?> (x<?php echo $i['qty']; ?>)</span>
      <span>₹<?php echo $i['subtotal']; ?></span>
    </div>
  <?php } ?>

  <div class="total">Total: ₹<?php echo $total; ?></div>

  <form method="post" action="place_order.php">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="text" name="address" placeholder="Address" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
    <input type="hidden" name="total" value="<?php echo $total; ?>">
    <button type="submit">Place Order</button>
  </form>
</div>

</body>
</html>
