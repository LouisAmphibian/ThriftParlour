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
  <?php
  
  include("php/config.php");

  //when the submit button is pressed
  if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $password = $_POST["password"];
    $catergory = $_POST["option"];
    $date_Of_Birth = $_POST["dateOfBirth"];
  }

  //verifying the unique email

 $verify_query = mysqli_query($con, "SELECT CUSTOMER_EMAIL FROM tblcustomer WHERE CUSTOMER_EMAIL='$email'");

 if(mysqli_num_rows($verify_query) != 0){
  echo "<div class='message'>
        <p>This email is used, Try another One Please </p>
        </div> <br>";
  echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back </button>";
 }
 else{
  mysqli_query($con, "INSERT INTO tblcustomer(CUSTOMER_EMAIL,CUSTOMER_NAME,CUSTOMER_SURNAME,DATE_OF_BIRTH, PASSWORD, CATERGORY)	VALUES (' $email','$name','$surname',' $date_Of_Birth ','$password','$catergory)") or die("Error Occured");
  echo "<div class='message'>
        <p>Registration successfully!</p>
        </div> <br>";
  echo "<a href='login.php'><button class='btn'>Login Now </button>";
 }
  ?>  

    <nav>
        <div class="top-nav">
          <ul>
            <li><a>Help</a></li>
            <li><a>Order Status</a></li>
            <li><a href="login.php">Sign up/Sign up</a></li>
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
        <div class = "register-form-container">

            <form action="" method="post">
                <h1>Register</h1>

                <div class="input-box">
                    <input type="text" name="email" id="email" placeholder="Email"
                    required>
                </div>
                <div class="input-box">
                    <input type="text" name="name" placeholder="Name" id="name" required>
                </div>

                <div class="input-box">
                    <input type="text" name="surname" placeholder="Surname" id="surname" required>
                </div>

                <div class="input-box">
                    <input type="text" name="password" placeholder="Password" id="passsword" required>
                </div>

                <p class="small-words">Minimum of 8 characters</p>
                <p class="small-words">Uppercase, lowercase letters, and one number</p>

                <select id="option" title="Select an option">
                    <option value="" disabled selected class="placeholder">Shoping preference</option>
                    <option value="option1">Men</option>
                    <option value="option2">Women</option>
                    <option value="option1">Family</option>
                </select>
                
                <div class="input-box">
                    <input type="text" id="dateOfBirth" placeholder="Date of Birth" onfocus="this.type='date'"  onblur="this.type='text'" required>
                </div>

                <div class="Sign-up-check">
                    <label><input type="checkbox"> Sign up for emails to get update from Thrift Parlour on products, offers and your Member benefits.</label>
                </div>

                <div class="Sign-up-check">
                    <label><input type="checkbox"> I agree to Thrift's <a>Privacy Policy</a> and <a>Terms of Us</a></label>
                </div>



                    <input class="reg-btn" type="submit" name="submit" required value="Create Account">
                
            </form>
        </div>
        
    </div>
</body>
</html>