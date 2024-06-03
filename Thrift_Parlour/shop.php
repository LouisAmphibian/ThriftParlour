<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <!-- To use icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Shop</title>
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
          <li><a>Sale</a></li>
          <li><a>Sell</a></li>
          <li><a>About Us</a></li>
        </ul>
        <div class="search">
          <span class="material-symbols-outlined">search</span>
          <input class="search-input" type="search" placeholder="Search for products">
        </div>
      </div>
    </div>
   </nav>

   <main>
        
    <section>
        <h3>Gender</h3>
        <div class = "gender-section">

            <a href="men_section.php">
            <div class="image-container-gender">
                
                <img  src="Images/GenderSection/Men.jpg" alt="Men's Section"/>
                <div class="image-content-gender">
                  <p>Men's Section</p>
                </div>  
            </div>
            </a>

            <a href="Women_Section.php">
            <div class="image-container-gender">
                <img src ="Images/GenderSection/Women.png" alt = "Women's Section"/>
                <div class="image-content-gender">
                  <p>Women's Section</p>
                </div>
            </div>
            </a>

            <a href="Kids_Section.php">
            <div class="image-container-gender">
                <img src ="Images/GenderSection/Kids.jpg" alt = "Kid's Section"/>
                <div class="image-content-gender">
                  <p>Kid's Section</p>
                </div>
            </div>
            </a>
            
            <a href="Unisex_Section.php">
            <div class="image-container-gender">
                <img src = "Images/GenderSection/Unisex.jpg" alt = "Uni-sex Section"/>
                <div class="image-content-gender">
                  <p>Uni-sex Section</p>
                </div>
            </div>
            </a>
        </div>
    </section>

    <section>
        <h3 class = "catergory-header">Catergory</h3>
        <div class = "catergory-section">

            <div class="image-container-catergory">
                <img href="" src="Images/Catergory/Tops/image.png" alt="Tops"/>
                <div class="image-content-catergory">
                  <p>Tops</p>
                </div>   
            </div>

            <div class="image-container-catergory">
                <img src ="Images/Catergory/Bottoms/image.png" alt = "Bottoms"/>
                <div class="image-content-catergory">
                  <p>Bottoms</p>
                </div>
            </div>

            <div class="image-container-catergory">
                <img src ="Images/Catergory/Accessories/image.png" alt = "Accessories"/>
                <div class="image-content-catergory">
                  <p>Accessories</p>
                </div>
            </div>
            
        </div>
    </section>


   </main>

   <footer>
    <div class="top-footer">
      <div class="footer-column">
        <h4>Shop</h4>
        <ul>
          <li><a href="#">Men</a></li>
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
