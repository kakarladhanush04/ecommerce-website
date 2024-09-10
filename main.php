<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <script src="https://kit.fontawesome.com/5ebee6a80b.js" crossorigin="anonymous"></script>
</head>

<body>
<link rel="stylesheet" href="mainstyle.css">
    <script>
       function toggleContent() {
        const contentSection = document.getElementById('content');
        const product1Section = document.getElementById('product1');

        // Toggle the display of product1 section
        if (product1Section.style.display === 'block') {
            product1Section.style.display = 'none';
        } else {
            product1Section.style.display = 'block';
        }
    }
    function toggleContent1() {
        const contentSection = document.getElementById('content');
        const product1Section = document.getElementById('product2');

        // Toggle the display of product1 section
        if (product1Section.style.display === 'block') {
            product1Section.style.display = 'none';
        } else {
            product1Section.style.display = 'block';
        }
    }
      </script>
   <section id="header">
    <div class="logo">
<img src="/img/logo.jpg" alt="x" class="logo"> <p id="displayuser"></p>
</div>
<div>
    <ul id="navbar">
      <li><a  href="#">Home </li>
      <!-- <li><a href="pro.html">login</li> -->
      <!-- <li><a href="shop.html">Shop</li> -->
      <!-- <li><a href="blog.html">Blog</li> -->
      <li><a href="about.html">About</li>
      <li><a href="#" onclick="scrollToBottom()">Contact</a></li>
      <li id="lg-bag"><a href="cart.html"><i class="fa fa-bag-shopping"></i></li>
      <a href="" id="close"><i class="fa-solid fa-xmark"></i></a>
    </ul>
</div>
<div id="mobile">
    <a href="cart.html"></a><i class="fa fa-bag-shopping"></i>
    <i id="bar" class="fas fa-outdent"></i>
</div> 
   </section>
   <style>
    #displayuser {
  font-size: 1.2rem;
  font-weight: bold;
  color: #333;
  margin: 0;
  padding: 0.5rem;
  /* background-color: #f2f2f2; */
  border-radius: 5px;
  text-align: center;
}
.logo {
  display: inline-block;
  vertical-align: middle; /* Align vertically with text */
}

#displayuser {
  display: inline-block;
  vertical-align: middle; /* Align vertically with text */
}
#header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 999; /* Ensures the header stays on top of other content */
  padding-top:5px;
  padding-bottom:5px ;
}

#hero {
  background-image: url('img/hero.png'); /* Replace 'path/to/your/image.jpg' with the actual path to your background image */
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
#banner{
    background-image: url('img/banner/b1.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your background image */
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
#product1 {
    display: none;
}
#product2 {
    display: none;
}
   </style>
<div class="container">
   <section id="hero">
<h4>Trade-in-Offer</h4>
<h2>Super Value Deals</h2>
<h1>On All Products</h1>
<p>Save more with coupons & upto 70% OFF!</p>
<button onclick=toggleContent() >Shop now</button>
   </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sale</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>
</div>
<div class="content" id="content">
<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
   <div class="pro-cointainer">
     <div class="pro" id="prod1">
         <img src="img/products/f1.jpg" alt="">
         <div class="des">
             <span>Adidas</span>
             <h5>Colored Astronaut Shirts</h5>
             <div class="star">
                 <i class="fa-solid fa-star"></i>
                 <i class="fa-solid fa-star"></i>
                 <i class="fa-solid fa-star"></i>
                 <i class="fa-solid fa-star"></i>
                 <i class="fa-solid fa-star"></i>
             </div>
             <h4>$49</h4>
         </div>
         <a  onclick="addToCart(this)"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <script>
            function scrollToBottom() {
        const footer = document.getElementById('footer');
        footer.scrollIntoView({ behavior: 'smooth' });
    }
            // Function to add a product to the cart
function addToCart(element) {
    // Get the product ID from the parent element's ID attribute
    const productId = element.parentElement.id;

    // Send an AJAX request to add the product to the user's cart
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'sam.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            alert(xhr.responseText); // Display the response from the server
        } else {
            alert('Error: ' + xhr.status);
        }
    };
    xhr.send('addToCart=true&productId=' + productId);
    
}

        </script>
        
        <div class="pro" id="prod2">
         <img src="img/products/f2.jpg" alt="">
         <div class="des">
             <span>Road Star</span>
             <h5>Slimfit Shirt</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$59</h4>
         </div>
         <a onclick="addToCart(this)" ><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro" id="prod3">
         <img src="img/products/f3.jpg" alt="">
         <div class="des">
             <span>Allon Solly</span>
             <h5>Casual Cotton Shirt</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$49</h4>
         </div>
         <a onclick="addToCart(this)"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro" id="prod4">
         <img src="img/products/f4.jpg" alt="">
         <div class="des">
             <span>Lenin</span>
             <h5>Comfort Cotton</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$54</h4>
         </div>
         <a onclick="addToCart(this)"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro" id="prod5">
         <img src="img/products/f5.jpg" alt="">
         <div class="des">
             <span>HRX</span>
             <h5>Party Wear</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$64</h4>
         </div>
         <a onclick="addToCart(this)"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro" id="prod6">
         <img src="img/products/f6.jpg" alt="">
         <div class="des">
             <span>US Polo</span>
             <h5>Stylish Dualtone</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$55</h4>
         </div>
         <a onclick="addToCart(this)"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro" id="prod7">
         <img src="img/products/f7.jpg" alt="">
         <div class="des">
             <span>Flying Machine</span>
             <h5>Comfort Night Wear</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$59</h4>
         </div>
         <a onclick="addToCart(this)"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro" id="prod8">
         <img src="img/products/f8.jpg" alt="">
         <div class="des">
             <span>Peter England</span>
             <h5>Cartoon Astronaut T-Shirts</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$66</h4>
         </div>
         <a onclick="addToCart(this)" ><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
       
   </div>
 </section>
</div>
    <section id="banner" class="section-m1">
      <h4>Repair Services</h4>
      <h2>Up to <span>70% Off</span> - All T-Shirts & Accessories</h2>
      <button class="normal" onclick=toggleContent1() >Explore More</button>
    </section>
    <section id="product2" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Modern Design</p>
   <div class="pro-cointainer">
     <div class="pro" id="prod9">
         <img src="img/products/n1.jpg" alt="">
         <div class="des">
             <span>Adidas</span>
             <h5>Colored Astronaut Shirts</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$49</h4>
         </div>
         <a onclick="addToCart(this)"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        
        <div class="pro" id="prod10">
         <img src="img/products/n2.jpg" alt="">
         <div class="des">
             <span>Road Star</span>
             <h5>Slimfit Shirt</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$59</h4>
         </div>
         <a  onclick="addToCart(this)"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro" id="prod11">
         <img src="img/products/n3.jpg" alt="">
         <div class="des">
             <span>Allon Solly</span>
             <h5>Casual Cotton Shirt</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$45</h4>
         </div>
         <a onclick="addToCart(this)"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro" id="prod12">
         <img src="img/products/n4.jpg" alt="">
         <div class="des">
             <span>Lenin</span>
             <h5>Comfort Cotton</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$65</h4>
         </div>
         <a onclick="addToCart(this)"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro" id="prod13">
         <img src="img/products/n5.jpg" alt="">
         <div class="des">
             <span>HRX</span>
             <h5>Party Wear</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$54</h4>
         </div>
         <a onclick="addToCart(this)"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro" id="prod14">
         <img src="img/products/n6.jpg" alt="">
         <div class="des">
             <span>US Polo</span>
             <h5>Stylish Dualtone</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$54</h4>
         </div>
         <a onclick="addToCart(this)" ><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro" id="prod15">
         <img src="img/products/n7.jpg" alt="">
         <div class="des">
             <span>Flying Machine</span>
             <h5>Comfort Night Wear</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$66</h4>
         </div>
         <a onclick="addToCart(this)"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro" id="prod16">
         <img src="img/products/n8.jpg" alt="">
         <div class="des">
             <span>Peter England</span>
             <h5>Cartoon Astronaut T-Shirts</h5>
             <div class="star">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
             </div>
             <h4>$55</h4>
         </div>
         <a onclick="addToCart(this)"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
       
   </div>
 </section>
     <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy Deals</h4>
            <h2>Buy 1 Get 1 Free</h2>
            <span>The Best Classic dresses is on sale at KD fashions</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Summer/Spring</h4>
            <h2>Upcoming Seasons</h2>
            <span>The Best Classic dresses is on sale at KD fashions</span>
            <button class="white">Colections</button>
        </div>
     </section>

     <section id="banner3" class="sut">
        <div class="banner-box">
            <h2>SEASON SALE</h2>
            <h3>Winter Collection - 50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>New Footwear Collection</h2>
            <h3>Spring / Summer 2022</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-Shirts</h2>
            <h3>New Trendy Prints</h3>
        </div>
     </section>

    <footer id='footer' class="section-p1">
     <div class="col">
        <img src="img/logo.jpg" alt="">
        <h4>Contact</h4>
        <p><strong>Address :</strong> 4/19,main road,pulivendula </p>
        <p><strong>Phone :</strong> +91 5674 5643 56/+91 6666 7777 88</p>
        <p><strong>Hours :</strong> 10:00 - 18:00 , Mon-Sat</p>

    </footer>
    <?php
    $user1 = $_COOKIE['user1'];
    echo "<script>
    document.getElementById('displayuser').innerHTML = 'Hello,'+'$user1';
 </script>" 
     ?>

    <script src="./ecommerce.js"></script>
</body>
</html>