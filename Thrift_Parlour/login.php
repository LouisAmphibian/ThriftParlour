<?php
  SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Document</title>
</head>
<body>
<nav>
    <div class="top-nav">
      <ul>
        <li><a>Help</a></li>
        <li><a>Order Status</a></li>
        <li><a href="login.php">Sign up/Sign up</a></li>
      </ul>
    </div>
   
    <div class="bottom-nav">
      <div class="first-sub-bottom-nav">
        <div class="web-icon">
          <img src="" alt="Thrift Parlour Icon"/>
        </div>

        <div class="icons">
          <span id="favorite" class="material-symbols-outlined">favorite</span>
          <span id="shopping_cart" class="material-symbols-outlined">shopping_cart</span>
        </div>
      </div>

      <div class="second-sub-bottom-nav">
        <ul class="nav-links">
          <li><a>New Arrival</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="#">Sale</a></li>
          <li><a href="#">Sell</a></li>
          <li><a href="#">About Us</a></li>
        </ul>
        <div class="search">
          <span class="material-symbols-outlined">search</span>
          <input class="search-input" type="search" placeholder="Search for products">
        </div>
      </div>
    </div>
   </nav>
    

    <div class="wrapper">
        <div class = "form-container">

        <?php

            //Including the configuration file to establish the database connection
            include("DBConn.php");

            // Check if the form is submitted
            if(isset($POST['submit'])){

              
              $email =mysqli_real_escape_string($con,$_POST['email']);
              $password = mysqli_real_escape_string($con,$_POST['password']);

              $result = mysqli_query($con, "SELECT * FROM tblcustomer WHERE CUSTOMER_EMAIL='$email' AND Password='$password'") or die("Select Error");
            }
        ?>

            <form action="" method="">
                <h1>Login</h1>

                <div class="input-box">
                    <input type="text" id="username" placeholder="Username"
                    required>
                </div>
                <div class="input-box">
                    <input type="password" id="passsword" placeholder="Password" required>
                </div>
    
                <div class="remember-forgot">
                    <label><input type="checkbox" id="checkbox"> Remember me</label>
                    <a href="#">Forgot password</a>
                </div>

                    <input class="login-btn" type="submit" name="submit" required value="Login">
                
                

                <div class="register-link">
                    <p>Don't have an account?<a href="register.php">Register</a></p>
                </div>
            </form>
        </div>
        
    </div>

    <footer>
    <div class="top-footer">
      <div class="footer-column">
        <h4>Shop</h4>
        <ul>
          <li><a href="Men_Section.php">Men</a></li>
          <li><a href="#">Women</a></li>
          <li><a href="#">Kids</a></li>
          <li><a href="#">Uni-sex</a></li>
          <li><a href="#">Sale</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h4>Help</h4>
        <ul>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Order</a></li>
          <li><a href="#">Accessibility</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h4>Seller's corner</h4>
        <ul>
          <li><a href="#">Ticket Order</a></li>
          <li><a href="#">Sign up to sell</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h4>Company</h4>
        <ul>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Careers</a></li>
        </ul>
      </div>
      

      <div class="footer-column">
        <h4>Contact</h4>
        <ul>
          <li><a href="#">Call sthe shop</a></li>
          <li><a href="#">Email Us</a></li>
        </ul>
      </div>

    </div>

    
<p>&copy; 2024 Thrift Parlour. All rights reserved</p>
    
   </footer>
</body>
</html>