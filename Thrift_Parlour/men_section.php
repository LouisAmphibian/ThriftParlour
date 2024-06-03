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
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <title>Men's Section</title>
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

   
   <main>

    <!--Home-->
    <section class="home" id="home">
      <div class="home-text">
        <h1>Men's New<br><span>Arrivals</span></h1>
        <p>New Thrift, now available!</p>
        <a href="#" class="btn-arrival">View Collection</a>
      </div>
    </section>

    <!--Featured-->
    <section class="featured" id="featured">
      <div class="center-text">
        <h2>Featured Catergory</h2>
      </div>

      <div class="featured-content">

        <div class="row-custom"> 
          <div class="image-container">
             <img src="Images/Arrival/Men/Top/image (1).png" alt="Men's Top"/>
          </div>
          <div class="fea-text">
           <h5>Men's Top</h5>
           <p>5 items</p>
          </div>
          <div class="arrow">
            <a href="#"><i class='bx bx-right-arrow-alt'></i></a>
          </div>
        </div>


        <div class="row-custom"> 
          <div class="image-container">
             <img src="Images/Arrival/Men/Bottom/image.png" alt="Men's Bottoms" style="margin-top: 0px; margin-left: 0;">/>
          </div>
          <div class="fea-text">
           <h5>Men's Bottoms</h5>
           <p>5 items</p>
          </div>
          
          <div class="arrow">
            <a href="#"><i class='bx bx-right-arrow-alt'></i></a>
          </div>
        </div>

        <div class="row-custom"> 
          <div class="image-container">
             <img src="Images/Arrival/Men/Accessories/image.png" alt="Men's Accessories" style="margin-top: -30px;"/>
          </div>
          <div class="fea-text">
           <h5>Men's Accessories</h5>
           <p>5 items</p>
          </div>
          
          <div class="arrow">
            <a href="#"><i class='bx bx-right-arrow-alt'></i></a>
          </div>
        </div>

      </div>
    </section>

    <!--Sale section-->
    <section class="sale-sec">
      <div class="sale-text">
        <h6>WINTER ON SALE</h6>
        <h4>30% OFF <br> NEW ARRIVAL</h4>
        <a href="#" class="btn-arrival">Shop Now</a>
      </div>
    </section>

    <!--New Arrivals-->
    <section class="new-arrival" id="new-arrival"> 
      <div class="center-text">
        <h2>New Arrivals</h2>
      </div>

    
      <div class="new_content"> 
        <div class="box">
           <img src="Images/Arrival/Men/New_Collection/image.png" alt="Men's Accessories" style="margin-top: -30px;"/>
        
         <div class="new-text">
         <h5>Men's Accessories</h5>
         <h6>$188</h6>
         </div>
         <div class="sale">
          <h4>Sale</h4>
         </div>
        </div> 

        <div class="box">
          <img src="Images/Arrival/Men/New_Collection/image (1).png" alt="Men's Accessories" style="margin-top: -5px; padding-top:-10px"/>
       
        <div class="new-text">
        <h5>Men's Accessories</h5>
        <h6>$188</h6>
        </div>
        <div class="sale">
         <h4>Sale</h4>
        </div>
       </div> 

       <div class="box">
        <img src="Images/Arrival/Men/New_Collection/image (2).png" alt="Men's Accessories" style="margin-top: -30px;"/>
     
      <div class="new-text">
      <h5>Men's Accessories</h5>
      <h6>$188</h6>
      </div>
      <div class="sale">
        <h4>Sale</h4>
      </div>
     </div> 

     <div class="box">
      <img src="Images/Arrival/Men/New_Collection/image (3).png" alt="Men's Accessories" style="margin-top: -30px;"/>
   
    <div class="new-text">
    <h5>Men's Accessories</h5>
    <h6>$188</h6>
    </div>
    <div class="sale">
      <h4>Sale</h4>
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



'
'  </body>
</html>
