<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At Bookverse, we are passionate about bringing the joy of reading to everyone. Our carefully curated collection includes bestsellers, classics, academic books, and hidden gems—all at affordable prices. Whether you're a casual reader or a book enthusiast, we have something for you.</p>
         <p>We strive to provide a seamless shopping experience with fast delivery, secure payments, and personalized recommendations. With Bookverse, discovering your next great read has never been easier. Happy reading!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Sakali lavkar uthlyane jeevan kasa badlu shakta he shikvnar preranadayi pustak! <br> Pratyek vyakti jivanat ekda <br> tari wachavach!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rohit Sharma</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Jeevanat fakta garajechya goshtinchi kalji kasa ghaychi ani stress kasa kami karaycha he ekdam khulya manane lihilya pustakat samjun sangitlaya.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Smriti Mandhana</h3>
      </div>

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Ekdam preranadayi pustak! Swapanachya pallyat pudhe jaaychay asel tar he pustak nakki wachava. Swatachya kshamatai var vishwas thevayla shikvta</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Saksham Kale</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Chhoti chhoti sunchit vani kasa mothe parivartan ghadu shakto he ya pustakane shikavle. Vyaktimatvacha vikas karaycha asel tar he pustak ekdam upayogi</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Madhuri kale</h3>
      </div>

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Dhan, guptnidhi, ani samruddhiche yogya tatva sodhun dilyane jeevan kiti badlu shakta he shikvnar pustak! Tarunansathi ekdam avashyak wachan.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sanket Kamble</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Ek nava jag, jadugari, mitra, ani sahas yanche sathwan hya pustakat ahe. Ekda wachayla suruvat keli ki mag thambayachach <br> manat nahi!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Priyanka Solanke</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jay shah</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sakshi kale</h3>
      </div>

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Mayur Pandey</h3>
      </div>

      
  

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>