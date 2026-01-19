<?php
session_start();
include "db.php";
$products = mysqli_query($conn,"SELECT * FROM products");
?>
<!DOCTYPE html>
<html>
<head>
<title>GlowSkin Store</title>
<style>
body{margin:0;font-family:Arial;background:#f6f7fb}
a{text-decoration:none;color:black}
.hero{
  background:linear-gradient(135deg,#7f00ff,#e100ff);
  color:white;text-align:center;padding:120px 20px;
  animation:fadeIn 1.5s;
}
@keyframes fadeIn{
  from{opacity:0;transform:translateY(30px)}
  to{opacity:1;transform:translateY(0)}
}
.hero h1{font-size:50px}
.hero button{
  padding:15px 30px;border:none;border-radius:30px;
  background:white;color:#7f00ff;font-size:18px;cursor:pointer
}
.products{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:20px;padding:40px}
.card{
  background:white;border-radius:15px;padding:15px;
  box-shadow:0 10px 20px rgba(0,0,0,0.1);
  transition:.3s;
}
.card:hover{transform:translateY(-10px)}
.card img{width:100%;height:180px;object-fit:cover;border-radius:10px}
.card h3{margin:10px 0}
.btn{
  display:inline-block;margin-top:10px;padding:8px 15px;
  background:#7f00ff;color:white;border-radius:20px
}
</style>
</head>
<body>

<?php include "navbar.php"; ?>

<div class="hero">
  <h1>Glow Naturally. Shine Daily.</h1>
  <p>Premium skincare for your perfect glow</p>
  <button onclick="location.href='#products'">Shop Now</button>
</div>

<h2 style="text-align:center;margin-top:40px">Our Products</h2>

<div class="products" id="products">
<?php while($p=mysqli_fetch_assoc($products)){ ?>
  <div class="card">
    <img src="images/<?php echo $p['image']; ?>">
    <h3><?php echo $p['name']; ?></h3>
    <p>₹<?php echo $p['price']; ?></p>
    <a class="btn" href="product.php?id=<?php echo $p['id']; ?>">View</a>
    <a class="btn" href="add_to_cart.php?id=<?php echo $p['id']; ?>">Add to Cart</a>
  </div>
<?php } ?>
</div>

</body>
</html>
