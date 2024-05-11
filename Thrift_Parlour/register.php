
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Link to custom stylesheet -->
    <link href="style.css" rel="stylesheet">
    <!-- Link to Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Document</title>
</head>
<body>
    <!-- Navigation Bar -->
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
    
            <!-- Search Form -->
            <form>
                <div class="search">
                    <span class="material-symbols-outlined">
                        search
                    </span>
                    <input class="search-input" type="search" placeholder="Search...">
                </div>
            </form>
        </div>
    </nav>

    <div class="wrapper">
        <!-- PHP Script for Form Handling -->
        <div class="register-form-container">
            <?php
            include("config.php");

            if(isset($_POST["submit"])) {
                // Retrieve form data
                $email = $_POST["email"];
                $name = $_POST["name"];
                $surname = $_POST["surname"];
                $password = $_POST["password"];
                $category = isset($_POST["option"]) ? $_POST["option"] : null;
                $dateOfBirth = $_POST['dateOfBirth'];

                // Format date of birth
                $date_Of_Birth = date('Y-m-d', strtotime($dateOfBirth));

                // Check if email exists
                $verify_query = mysqli_query($con, "SELECT CUSTOMER_EMAIL FROM tblcustomer WHERE CUSTOMER_EMAIL='$email' AND Password='$password'") or die("Select Error");
                
            } else {
            ?>
            <!-- Registration Form -->
            <form action="" method="post">
                <h1>Register</h1>

                <div class="input-box">
                    <input type="text" name="email" id="email" placeholder="Email" required>
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

                <select name="option" id="option" title="Select an option">
                    <option value="" disabled selected class="placeholder">Shopping preference</option>
                    <option value="option1">Men</option>
                    <option value="option2">Women</option>
                    <option value="option1">Family</option>
                </select>
                
                <div class="input-box">
                    <input type="text" id="dateOfBirth" name="dateOfBirth" placeholder="Date of Birth" onfocus="this.type='date'"  onblur="this.type='text'" required>
                </div>

                <div class="Sign-up-check">
                    <label><input type="checkbox"> Sign up for emails to get update from Thrift Parlour on products, offers and your Member benefits.</label>
                </div>

                <div class="Sign-up-check">
                    <label><input type="checkbox"> I agree to Thrift's <a>Privacy Policy</a> and <a>Terms of Use</a></label>
                </div>

                <input class="reg-btn" type="submit" name="submit" required value="Create Account">
            </form>
            <?php } ?>
        </div>
    </div>
</body>
</html>
