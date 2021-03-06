<?php

session_start();
$_SESSION=array();
session_destroy();

header("location:login.php");


?>


<head>
  <meta charset="UTF-8">  
  <link
    href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,600,700"
    rel="stylesheet"
  />
  <script
    src="https://kit.fontawesome.com/37b0ae8922.js"
    crossorigin="anonymous"
  ></script>

</head>
<link rel="stylesheet" href="homepage.css">
<div class="wrapper">
  <div class="Container">
        <div class="nav">
            <div class="logo">
                RENT A CAR
            </div>
            <div class="menu">
                <ul class="navMenu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Locations</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
        <div class="header">
            <h1>Welcome to Rent a Car</h1>
            <p>Rent a Car is waiting for you</p>
            <a href="cars.html">
              <button type="button">All Cars</button>
            </a>
        </div>
    </div>
</div>

<div class="wrappereservation">
  <div class="btn-group">
    <div id="box">    
    <div id="header">
       <div class="color"  >
         <label><br><br><br><br><br><i class="fa fa-calendar-o" ></i> Choose City &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <i class="fa fa-calendar-o"></i> Pick-up Date&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                 
                    <i class="fa fa-male"></i> Pick-up Time&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <i class="fa fa-calender-o"></i> Drop-off Date&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <i class="fa fa-calendar-o" ></i> Drop-off Time&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <i class="fa fa-child"></i> Age<br>
         </label>
       </div>
         <select  type="text" placeholder="Choose City" >
             <option>Rent a Car Antalya</option>
             <option>Rent a Car ??stanbul</option>
             <option>Rent a Car Ankara</option>
   
         </select>
         <input type="date" id="datemin" name="datemin" min="date" >
         <input type="time" placeholder="00" min="00" >
         <input  type="date" size="50" id="datemin" name="datemin" min="date"  >
         <input type="time" placeholder="00" min="00" >
         <input type="number" placeholder="0" min="0">
      
       
     </div>
      <div class="right" >
        <br><br>
         <a href="cars.html">
          <input type="submit" value="CONVENIENT RESERVATIONS">
         </a>
      </div>
          
          </div>
      </div>
</div>

<div class="wrapper2">
  <div class="Container">
        <div class="header">
          <h2>ABOUT US<br><br></h2>
          <h2>Founded in 2000, this leading Car Rental Company 
            set out with the goal of showing the world how quality options, 
            excellent customer service and unmatched prices can come together.<br><br><br><br>
            As Car Rental, we believe that we will make a big difference 
            in the travels of our customers by not compromising the quality 
            of rental service even when it comes to the most basic option. 
            Whether you need help planning your next big trip or advice on 
            finding the right vehicle for your needs, drop by one of our companies today 
            and experience the difference.</h2>
        </div>
   
        </div>
</div>

<div class="container">
  <div id="electrique" class="section">
    <div class="header">
      <h1>Reliable car rental</h1>
    </div>
  </div>
  <div id="disponibles" class="section">
    <div class="header">
    <h1>We have many car models</h1>
    </div>
  </div>
  <div id="rs" class="section">
    <div class="header">
<div class="row">
  <div class="col-sm-4"> <span> <div class="rhombus"></div></span>
    <h1>Reasonable price</h1>
    </div>
  </div>
</div>
</div>
</div>

<div class="wrappercontact">
  <div class="Container">
    <div class="header">
      <h2 > Address <br><br><br>
        Phone:00-000-000-0000&nbsp - &nbsp Fax:11-111-111-1111 &nbsp - &nbsp
        Email:info@rentacar.com</h2>

        <div class="icon">
       
          <ul id="contact">
            <li ><a href="https://tr-tr.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="https://www.instagram.com/?hl=tr" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="https://twitter.com/?lang=tr" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://tr.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://mail.google.com/mail/u/0/?view=cm&source=mailto&to=busrasargeyik@gmail.com&fs=1&tf=1" target="_blank"><i class="fas fa-envelope"></i></a></li>
            
          </ul>
        </div>

    </div>
   
  </div>
</div>