<?php

include ("baglan.php");

if(isset($_POST["submit"])){


    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pw = password_hash($_POST["pw"],PASSWORD_DEFAULT);


    $ekle = "INSERT INTO kullanicilar(fName, lName, email, phone, pw) VALUES('$fName', '$lName', '$email', '$phone', '$pw')";

    $calistirekle = mysqli_query($baglan,$ekle);

    if ($calistirekle) {
        echo'<div class="alert alert-success" role="alert">
        A simple success alert—check it out!
      </div>';
        
    }
    else {
        echo'<div class="alert alert-denger" role="alert">
        A simple danger alert—check it out!
      </div>';
    }

   
    
    
}
mysqli_close($baglan);




?>
<!DOCTYPE html>
<link rel="stylesheet" href="login.css">
<div id="container">
  
  <div id="left">
    <h1 id="welcome">Welcome</h1>
  </div>
  <div id="right">
    
    <form action="signup.php" method= "POST">
      <h1 id="login">Sign Up</h1><br>
      
    <input type="text" name="fName" class="client-info">
    <label for="text">First Name</label>
    <input type="text" name="lName" class="client-info">
    <label for="text">Last Name</label>
    <input type="email" name="email" class="client-info">
    <label for="email">Email</label>
    <input type="text" name="phone" class="client-info">
    <label for="text">phone</label>
    <input type="password" name="pw" class="client-info">
    <label for="password">Password</label>

    
    <a href="login.php" style="text-decoration: none;">
      <button type="submit" id="submit" name="submit" class="client-info" value="Sign Up">Sign Up</button>
    </a>
</form>
  </div>
  <script src="login.js"></script>
</div>
</html>