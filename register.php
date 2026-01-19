<?php
$conn=new mysqli("localhost","root","","skincare_db");
$msg="";
if(isset($_POST['register'])){
  $u=$_POST['username'];
  $p=md5($_POST['password']);
  $conn->query("INSERT INTO users(username,password) VALUES('$u','$p')");
  $msg="Registered successfully! Login now.";
}
?>
<html>
<head>
<style>
body{font-family:Arial;background:linear-gradient(135deg,#ff9a9e,#fad0c4);display:flex;justify-content:center;align-items:center;height:100vh;}
.card{background:white;padding:30px;border-radius:12px;width:300px;text-align:center;}
input,button{width:100%;padding:10px;margin:8px 0;border-radius:6px;border:1px solid #ccc;}
button{background:#ff4b2b;color:white;border:none;font-weight:bold;}
</style>
</head>
<body>
<div class="card">
<h2>Register</h2>
<form method="post">
<input name="username" placeholder="Username" required>
<input name="password" type="password" placeholder="Password" required>
<button name="register">Register</button>
</form>
<p><?php echo $msg; ?></p>
<a href="login.php">Already have account?</a>
</div>
</body>
</html>
