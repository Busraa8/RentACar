<?php

include ("baglan.php");

if(isset($_POST["login"])){


    if (isset($email) && isset($pw)) {
        
        $secim = "SELECT * FROM kullanicilar WHERE email ='$email'";
        $calistir= mysqli_query($baglan,$secim);
        $kayitsayisi = mysqli_num_rows($calistir);

        if ($kayitsayisi>0) {

            $ilgilikayit = mysqli_fetch_assoc($calistir);
            $hashlisifre = $ilgilikayit["pw"];

            if (password_verify($pw,$hashlisifre)) {

                session_start();
                $_SESSION["email"]=$ilgilikayit["email"];
                $_SESSION["fName"]=$ilgilikayit["fName"];

                header("location:homepageout.php");
    
            }else {
                echo' <div class="alert alert-danger" role="alert">
           A simple success alert—check it out!
          </div>';
            }

        }else {
           echo' <div class="alert alert-danger" role="alert">
           A simple success alert—check it out!
          </div>';
        }





        mysqli_close($baglan);

       
    }

    
    
}




?>
<!DOCTYPE html>
<link rel="stylesheet" href="login.css">
<div id="container">
  
  <div id="left">
    <h1 id="welcome">Welcome</h1>
  </div>
  <div id="right">
    <form action="homepageout.php" method="POST">

    <h1 id="login">LogIn</h1><br>
    <input type="email" id="email" class="client-info">
    <label for="email">Email</label>
    <input type="password" id="password" class="client-info">
    <label for="password">Password</label>
    <a href="homepageout.php" style="text-decoration: none;">
      <button type="submit" name="login" id="submit" class="client-info" value="LogIn">LogIn</button>
    </a>
    </form>
    <a href="signup.php" style="text-decoration: none;">
      <button class="social" id="signup">Sign up</button>
    </a>
    <a href="forgotpass.html" style="text-decoration: none;">
      <button class="social" id="pw">forgot password</button>
    </a>
  </div>
  <script src="login.js"></script>
</div>
</html>