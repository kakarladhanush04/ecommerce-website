<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tech2etc Ecommerce Tutorial</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <script src="https://kit.fontawesome.com/5ebee6a80b.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="mainstyle.css" />
        <style>
            #header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #81cfdf;
          }
        </style>
        
    </head>

    <body>
        <section id="header">
            <div class="logo"> <p id="displayuser"></p>
        <img src="/img/logo.jpg" alt="x" class="logo">
        </div>
        <div>
            <ul id="navbar">
              <li><a class="active" href="main.html">Home</li>
              <li><a href="pro.html">login</li>
              <li><a href="shop.html">Shop</li>
              <li><a href="blog.html">Blog</li>
              <li><a href="about.html">About</li>
              <li><a href="contact.html">Contact</li>
              <li id="lg-bag"><a href="cart.html"><i class="fa fa-bag-shopping"></i></li>
              <a href="" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"></a><i class="fa fa-bag-shopping"></i>
            <i id="bar" class="fas fa-outdent"></i>
        </div> 
           </section>
<section id="product1" class="section-p1">
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
        <script>
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
 <?php
    $user1 = $_COOKIE['user1'];
    echo "<script>
    document.getElementById('displayuser').innerHTML = 'Hello,'+'$user1';
 </script>" 
     ?>
</body>

</html>