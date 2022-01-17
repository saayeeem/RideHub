 <?php
    include('../Control/ValidationLogin.php');

    // if (isset($_SESSION['email'])) {
    //     if (isset($_SESSION["type"]) == "customer") {
    //         header('Location: CustomerHome.php');
    //     }
    //     if (isset($_SESSION["type"]) == "vendor") {
    //         header('Location: VendorHome.php');
    //     }
    // } else {
    //     header('Location: login.php');
    // }
    // if (isset($_SESSION["type"]) == "customer") {
    //     header('Location: CustomerHome.php');
    // } else if (isset($_SESSION["type"]) == "vendor") {
    //     header('Location: VendorHome.php');
    // }
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../css/mycss.css">
     <title>Home</title>
 </head>

 <body>
     <div class="header">
         <h1>Welcome To RideHub</h1>
         <h2>Home</h2>
     </div>
     <nav>
         <a href="home.php">Home</a>
         <a href="home.php">About Us</a>
         <a href="home.php">Contact Us</a>
     </nav>

     <section class="pad-70 right">
         <div class="container">
             <div class="row">
                 <div class="post post-left">

                     <img src="Pictures/img9.jpg" alt="show car">
                     <h2>Returning User?</h2>
                     <div class="tag"> <a class="div" href="login.php">Login Now!!</a></div>
                 </div>
                 <div class="post post-right">
                     <img src="Pictures/img10.jpg" alt="show car">
                     <h2>Explore our World</h2>
                     <div class="tag">
                         <a class="div" href="RegisterHome.php">Register with us</a>
                     </div>
                 </div>
             </div>

         </div>
     </section>



     <!-- footer -->
     <footer>
         <div class="container footer-wrap">
             <div class="footer-left">
                 <ul class="footer-menu">
                     <li><a href="">Terms and Conditions</a></li>
                     <li><a href="">Privacy</a></li>
                 </ul>

             </div>
             <div class="footer-right">
                 <ul class="footer-menu">
                     <li><a href="">Follow</a></li>
                     <li><a href=""><i class="fab fa-facebook"></i></a></li>
                     <li><a href=""><i class="fab fa-twitter"></i></a></li>
                     <li><a href=""><i class="fab fa-instagram"></i></a></li>

                 </ul>
             </div>
         </div>


     </footer>
     <!-- footer -->
     <script src="https://kit.fontawesome.com/2065a5e896.js" crossorigin="anonymous"></script>
 </body>

 </html>