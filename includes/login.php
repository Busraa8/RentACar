<?php
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password,FullName FROM tblusers WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];
$_SESSION['fname']=$results->FullName;
$currentpage=$_SERVER['REQUEST_URI'];
echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>

<div role="document">
<div class="modal fade" id="loginform">
<link rel="stylesheet" href="assets/css/login.css">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<div id="container">
  
  <div id="left">
    <h1 id="welcome">Welcome</h1>
  </div>
  <div id="right">
   
  <div>
  <form method="post">

  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h1 id="login">LogIn</h1><br>
    </div>
    
    <input type="email" class="client-info" name="email">
    <label for="email">Email</label>
    <input type="password" class="client-info" name="password">
    <label for="password">Password</label>
    <a  style="text-decoration: none;">
    <input type="submit" name="login" value="Login" class="client-info">
    </a>
   
  </form>
    
    <a style="text-decoration: none;" href="#signupform" data-toggle="modal" data-dismiss="modal">
      <button class="social" id="signup">Sign up</button>
    </a>
    <a style="text-decoration: none;" href="#forgotpassword" data-toggle="modal" data-dismiss="modal">
      <button class="social" id="signup">forgot password</button>
    </a>
    
  </div>
  <script src="login.js"></script>
  
</div>

</div>



