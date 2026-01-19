<?php
include "db.php";
$id = intval($_GET['id']);
$q = mysqli_query($conn,"SELECT * FROM products WHERE id=$id");
$p = mysqli_fetch_assoc($q);
if(!$p){ die("Product not found"); }
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $p['name']; ?></title>
<style>
body{font-family:Arial;background:#f6f7fb;padding:40px}
.box{
  background:white;padding:30px;border-radius:20px;
  max-width:600px;margin:auto;
  box-shadow:0 10px 20px rgba(0,0,0,0.1)
}
img{
  width:100%;
  height:auto;
  object-fit:contain;
  border-radius:15px;
}
.btn{
  padding:10px 20px;background:#7f00ff;color:white;
  border-radius:25px;text-decoration:none;display:inline-block;margin-top:15px
}
</style>
</head>
<body>

<?php include "navbar.php"; ?>

<div class="box">
  <img src="images/<?php echo $p['image']; ?>">
  <h1><?php echo $p['name']; ?></h1>
  <h2>₹<?php echo $p['price']; ?></h2>
  <p><?php echo $p['description']; ?></p>
  <a class="btn" href="add_to_cart.php?id=<?php echo $p['id']; ?>">Add to Cart</a>
</div>

</body>
</html>
