<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Animezone | Ecommerce website design</title>
     <link rel="stylesheet" href="Style.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>

     <div class="header">
     <div class="container">
      <div class="navbar">
          <div class="logo">
               <a href="index.php"><img src="image/background.png" width="125px"></a>
          </div>
          <nav>
               <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.html">Product</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    
                    <li class="nav-item active"><a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a></li>
                     <li><a href="logout.php">Logout</a></li>

               </ul>
           </nav> 
           <a href="cart.html"><img src="image/cart.png" width="30px height="30px></a>
            <img src="image/menu.png" class="menu-icon" onclick="menutoggle()">  
      </div>
      <div class="row">
          <div class="col-2">
               <h1>Give Your Life<br>A New Style!</h1>
               <p>“I’ve never once thought of you as an ally. Not you. Not Kushida. Not Hirata.<br> All people are nothing but tools. It doesn’t matter how its done. It doesn’t matter what needs to be sacrificed.<br> In this world, winning is everything. As long as I win in the end…That’s all that matters.”</p>
               <a href="" class="btn"> Explore Now &#8594; </a>
          </div>
          <div class="col-2">
               <img src="image/img1.png">
          </div>
      </div>
     </div>
 </div>
     
<!------- featured categories ------->
    <div class="categories">
     <div class="small-container">
         <div class="row">
          <div class="col-3">
               <img src="image/categories-1.jpg">
          </div>
          <div class="col-3">
               <img src="image/categories-2.jpg">
          </div>
          <div class="col-3">
               <img src="image/categories-3.jpg">
          </div>
     </div>
     
     </div>
     </div>
<!----------featured products----->
  
      <div class="small-container">
          <h2 class="title">Featured Products</h2>
          <div class="row">
               <div class="col-4">
                    <a href="onepiece.html"><img src="image/product-1.jpg"></a>
                    <a href="onepiece.html"><h4> One Piece - New 3B. wanted Monkey D luffy Design A3 Size Poster (Without Frame)</h4></a>
                    <div class="rating">
                      <i class="fa fa-star"></i>   
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star-o"></i> 
                    </div>
                    <p>₹179.00</p>
               </div>
               <div class="col-4">
                    <a href="onepiecetoy.html"><img src="image/product-2.jpg"></a>
                    <a href="onepiecetoy.html"><h4>Kawaii Kart | One Piece Monkey D. Luffy Action Figures - Set of 5 | One Piece Anime Toy Gift Statu</h4></a>
                    <div class="rating">
                      <i class="fa fa-star"></i>   
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star-half-o"></i> 
                    </div>
                    <p>₹2,374.00</p>
               </div>
               <div class="col-4">
                    <a href="chainsaw.html"><img src="image/product-3.jpg"></a>
                    <a href="chainsaw.html"><h4>CHAINSAW MAN VOL 1</h4></a>
                    <div class="rating">
                      <i class="fa fa-star"></i>   
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star-half-o"></i> 
                      <i class="fa fa-star-o"></i> 
                    </div>
                    <p>₹399.00</p>
               </div>
               <div class="col-4">
                    <a href="demon.html"><img src="image/product-4.jpg"></a>
                    <a href="demon.html"><h4> Dot Badges Nezuko Kamado - Demon Slayer - Black Anime T Shirt - for Casual Branded Street wear for Men and Women T-Shirt Clothing</h4></a>
                    <div class="rating">
                      <i class="fa fa-star"></i>   
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star-o"></i> 
                    </div>
                    <p>₹649.00</p>
               </div>
          </div>
          <h2 class="title">Latest Products</h2>
           <div class="row">
               <div class="col-4">
                    <a href="jacket.html"><img src="image/product-5.jpg"></a>
                    <a href="jacket.html"><h4>Comicsense.Xyz Men All Over Print Bomber Jacket </h4></a>
                    <div class="rating">
                      <i class="fa fa-star"></i>   
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star-o"></i> 
                    </div>
                    <p>₹1,499.00</p>
               </div>
               <div class="col-4">
                    <a href="demon2.html"><img src="image/product-6.jpg"></a>
                    <a href="demon2.html"><h4>AUGEN Super Hreo Demon Slayer Ninja Action Figure Limited Edition Bobblehead</h4></a>
                    <div class="rating">
                      <i class="fa fa-star"></i>   
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star-half-o"></i> 
                    </div>
                    <p>₹499.00</p>
               </div>
               <div class="col-4">
                    <a href="kaisen.html"><img src="image/product-7.jpg"></a>
                    <a href="kaisen.html"><h4>Jujutsu Kaisen VOL 1</h4></a>
                    <div class="rating">
                      <i class="fa fa-star"></i>   
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star-half-o"></i> 
                      <i class="fa fa-star-o"></i> 
                    </div>
                    <p>₹449.00</p>
               </div>
               <div class="col-4">
                    <a href="jujutsu.html"><img src="image/product-8.jpg"></a>
                    <a href="jujutsu.html"><h4> PRINTNET Pack of 12 Jujutsu Kaisen Poster Photo Set | Anime Poster | HD+ Photos Unframed , Multicolour</h4></a>
                    <div class="rating">
                      <i class="fa fa-star"></i>   
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star-o"></i> 
                    </div>
                    <p>₹269.00</p>
               </div>
                <div class="col-4">
                    <a href="mug.html"><img src="image/product-11.jpg"></a>
                    <a href="mug.html"><h4>MC SID Razz Brook Bounty Coffee Mug</h4></a>
                    <div class="rating">
                      <i class="fa fa-star"></i>   
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star-o"></i> 
                    </div>
                    <p>₹399.00</p>
               </div>
               <div class="col-4">
                    <a href="aot.html"><img src="image/product-9.jpg"></a>
                    <a href="aot.html"><h4>Kawn Anime Attack On Titan Shingeki No Kyojin Badge Pendant Necklace Gift Blue For Unisex Adult</h4></a>
                    <div class="rating">
                      <i class="fa fa-star"></i>   
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star-half-o"></i> 
                    </div>
                    <p>₹299.00</p>
               </div>
               <div class="col-4">
                    <a href="pain.html"><img src="image/product-10.jpg"></a>
                    <a href="pain.html"><h4>Nagato Pain Ruled Binded A5 Notebook</h4></a>
                    <div class="rating">
                      <i class="fa fa-star"></i>   
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star-half-o"></i> 
                    </div>
                    <p>₹224.00</p>
               </div>
               <div class="col-4">
                    <a href="ring.html"><img src="image/product-12.jpg"></a>
                    <a href="ring.html"><h4>Naruto Ninja Uchiha Itachi Costume Ring Cosplay Accessories</h4></a>
                    <div class="rating">
                      <i class="fa fa-star"></i>   
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i> 
                      <i class="fa fa-star-o"></i> 
                    </div>
                    <p>₹449.00</p>
               </div>
          </div>
     </div>
<!----------offer----------->
     <div class="offer">
          <div class="small-container">
               <div class="row">
                    <div class="col-2">
                         <img src="image/exclusive.jpg" class="offer-img">
                    </div>
                    <div class="col-2">
                         <p>Exclusively Available on AnimeZone</p>
                         <h1>Naruto Anime Red Flame Printed Hokage Cloak</h1>
                         <small>ANIME COSTUME: costume for naruto fans ninja cosplay. Unisex 4th Hokage Cloak Cosplay Costume.</small>
                         <a href="cloak.html" class="btn">Buy Now &#8594;</a>
                    </div>
               </div>
          </div>
     </div>
<!-------------------testimonial------------>
     <div class="testimonial">
          <div class="small-container">
               <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                         <p>you're giving up already? Did you forget what they did? How do you feel, make them pay, prove them wrong, pay for blood.</p>
                         <div class="rating">
                             <i class="fa fa-star"></i>   
                             <i class="fa fa-star"></i>  
                             <i class="fa fa-star"></i>  
                             <i class="fa fa-star"></i> 
                             <i class="fa fa-star-o"></i> 
                         </div>
                         <img src="image/test1.jpg">
                         <h3>Eren Yeager</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                         <p>A crew with no respect and a captain that doesn’t demand it falls apart quickly.</p>
                         <div class="rating">
                             <i class="fa fa-star"></i>   
                             <i class="fa fa-star"></i>  
                             <i class="fa fa-star"></i>  
                             <i class="fa fa-star"></i> 
                             <i class="fa fa-star-o"></i> 
                         </div>
                         <img src="image/test2.jpg">
                         <h3>Roronoa Zoro</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                         <p>I Am Righteous! I'm The Hero Who's Liberating People From Fear. I'm The Savior Who's Going To Be Like A God Of This Perfect New World!</p>
                         <div class="rating">
                             <i class="fa fa-star"></i>   
                             <i class="fa fa-star"></i>  
                             <i class="fa fa-star"></i>  
                             <i class="fa fa-star"></i> 
                             <i class="fa fa-star-o"></i> 
                         </div>
                         <img src="image/test3.jpg">
                         <h3>Light Yagami</h3>
                    </div>
               </div>
          </div>
     </div>
<!-------------brands------------>
     <div class="brands">
          <div class="small-container">
               <div class="row">
                    <div class="col-5">
                        <img src="image/aws1.png">
                    </div>
                    <div class="col-5">
                        <img src="image/gpay1.png">
                    </div>
                    <div class="col-5">
                        <img src="image/oracle1.png">
                    </div>
                    <div class="col-5">
                        <img src="image/logo-paypal.png">
                    </div>
                    <div class="col-5">
                        <img src="image/adobe1.png">
                    </div>
               </div>
          </div>
     </div>
             
<!----------footer----------->

     <div  class="footer">
          <div class="container">
               <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download App for Android and ios mobile phone</p>
                         <div class="app-logo"> 
                             <img src="image/play-store.png">
                             <img src="image/app-store.png">
                         </div> 
                    </div>
                    <div class="footer-col-2">
                        <img src="image/background1.png">
                        <p>Our Purpose Is To provide Anime materials and things to the Anime fan and Weeb people.</p>   
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                         </ul>   
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Youtube</li>
                         </ul>   
                    </div>
               </div>
               <hr>
               <p class="copyright">Copyright 2023 - Amit Singh</p>
          </div>
     </div>
<!--------------js for toggle menu------------>
     <script>
          var MenuItems = document.getElementById("MenuItems");

          MenuItems.style.maxHeight = "0px";

          function menutoggle(){
               if(MenuItems.style.maxHeight = "0px")
               {
                    MenuItems.style.maxHeight = "200px";
               }
               else
               {
                    MenuItems.style.maxHeight = "0px";
               }
          }
     </script>
</body>
</html>