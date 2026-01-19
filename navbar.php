<?php if(session_status()===PHP_SESSION_NONE){session_start();} ?>
<div style="background:#7f00ff;padding:15px;color:white;display:flex;justify-content:space-between">
  <div>
    <b>GlowSkin</b>
    <a href="index.php" style="color:white;margin-left:15px">Home</a>
    <a href="about.php" style="color:white;margin-left:15px">About</a>
    <a href="cart.php" style="color:white;margin-left:15px">Cart</a>
  </div>
  <div>
    <a href="login.php" style="color:white;margin-right:10px">Login</a>
    <a href="register.php" style="color:white">Register</a>
  </div>
</div>
