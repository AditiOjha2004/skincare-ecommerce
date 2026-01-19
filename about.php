<!DOCTYPE html>
<html>
<head>
<title>About GlowSkin</title>
<style>
body{margin:0;font-family:Arial;background:#f6f7fb;color:#333}
.hero{
  height:60vh;
  background:linear-gradient(135deg,#7f00ff,#e100ff);
  display:flex;align-items:center;justify-content:center;
  color:white;text-align:center;
  animation:fadeDown 1.5s;
}
@keyframes fadeDown{
  from{opacity:0;transform:translateY(-40px)}
  to{opacity:1;transform:translateY(0)}
}
.hero h1{font-size:60px;margin:0}
.hero p{font-size:22px;margin-top:10px}

.section{
  max-width:1000px;margin:auto;padding:60px 20px;
  animation:fadeUp 1.5s;
}
@keyframes fadeUp{
  from{opacity:0;transform:translateY(40px)}
  to{opacity:1;transform:translateY(0)}
}
.cards{
  display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:25px;margin-top:30px;
}
.card{
  background:white;padding:30px;border-radius:20px;
  box-shadow:0 10px 25px rgba(0,0,0,.1);
  transition:.3s;
}
.card:hover{transform:translateY(-10px)}
.card h3{margin-top:0;color:#7f00ff}
.values{
  background:white;border-radius:20px;padding:40px;
  margin-top:40px;box-shadow:0 10px 25px rgba(0,0,0,.1)
}
.badge{
  display:inline-block;background:#7f00ff;color:white;
  padding:8px 15px;border-radius:20px;margin:5px
}
</style>
</head>
<body>

<?php include "navbar.php"; ?>

<div class="hero">
  <div>
    <h1>GlowSkin</h1>
    <p>Glow Naturally. Shine Daily.</p>
  </div>
</div>

<div class="section">
  <h2>Who We Are</h2>
  <p>
    GlowSkin is a modern skincare brand focused on clean, effective and affordable skincare for all skin types.
    We combine science, nature and beauty to give your skin the care it truly deserves.
  </p>

  <div class="cards">
    <div class="card">
      <h3>🌿 Natural</h3>
      <p>Made with skin-friendly ingredients inspired by nature.</p>
    </div>
    <div class="card">
      <h3>🧪 Tested</h3>
      <p>Dermatologically tested and safe for daily use.</p>
    </div>
    <div class="card">
      <h3>💜 Gentle</h3>
      <p>Perfect for sensitive and all skin types.</p>
    </div>
  </div>

  <div class="values">
    <h2>Our Mission</h2>
    <p>
      To make skincare simple, affordable and powerful for everyone.
      We believe glowing skin is for all — not just for a few.
    </p>

    <h3>Why Choose GlowSkin?</h3>
    <div>
      <span class="badge">Cruelty Free</span>
      <span class="badge">Eco Friendly</span>
      <span class="badge">Affordable</span>
      <span class="badge">Premium Quality</span>
      <span class="badge">Loved by Thousands</span>
    </div>
  </div>
</div>

</body>
</html>
