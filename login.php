<?php
session_start();
$conn=new mysqli("localhost","root","","skincare_db");
$msg="";
if(isset($_POST['login'])){
  $u=$_POST['username'];
  $p=md5($_POST['password']);
  $r=$conn->query("SELECT * FROM users WHERE username='$u' AND password='$p'");
  if($r->num_rows){
    $_SESSION['user']=$u;
    header("Location:index.php");
  } else $msg="Invalid login!";
}
?>
<html>
<head>
<style>
body{font-family:Arial;background:linear-gradient(135deg,#a18cd1,#fbc2eb);display:flex;justify-content:center;align-items:center;height:100vh;}
.card{background:white;padding:30px;border-radius:12px;width:300px;text-align:center;}
input,button{width:100%;padding:10px;margin:8px 0;border-radius:6px;border:1px solid #ccc;}
button{background:#6a11cb;color:white;border:none;font-weight:bold;}
</style>
</head>
<body>
<div class="card">
<h2>Login</h2>
<form method="post">
<input name="username" placeholder="Username" required>
<input name="password" type="password" placeholder="Password" required>
<button name="login">Login</button>
</form>
<p><?php echo $msg; ?></p>
<a href="register.php">Create account</a>
</div>
</body>
</html>
