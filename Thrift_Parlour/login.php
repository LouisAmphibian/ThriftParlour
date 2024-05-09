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
            <li><a href="login.html">Sign up/Sign up</a></li>
          </ul>
        </div>
    
        <div class="bottom-nav">
          <ul>
            <li><a>New Arrival</a></li>
            <li><a>Shop</a></li>
            <li><a>Sale</a></li>
            <li><a>Sell</a></li>
            <li><a>About Us</a></li>
          </ul>
    
          
            <form>
              <div class="search" >
                <span class="material-symbols-outlined">
                  search
                </span>
                <input class="search-input" type="search" placeholder="Search...">
              </div>
              
            </form>
          
        </div>
       </nav>
    

    <div class="wrapper">
        <div class = "form-container">

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
                    <p>Don't have an account?<a href="register.html">Register</a></p>
                </div>
            </form>
        </div>
        
    </div>
</body>
</html>