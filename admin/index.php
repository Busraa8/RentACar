<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'change-password.php'; </script>";
} else{

  echo "<script>alert('Invalid Details');</script>";

}

}

?>
<!DOCTYPE html>
<link rel="stylesheet" href="css/login.css">
<div id="container">
  
  <div id="left">
    <h1 id="welcome">Welcome</h1>
  </div>
  <div id="right">
    <form  method="POST">

    <h1 id="login">LogIn</h1><br>
    <input type="text" placeholder="Username" name="username" class="client-info">
    <label for="">Username</label>
    <input type="password" placeholder="Password" name="password" class="client-info">
    <label for="">Password</label>
    
    <button type="submit" name="login" id="submit" class="client-info" value="LogIn">LogIn</button>

    </form>
  </div>
  <script src="login.js"></script>
</div>
</html>

