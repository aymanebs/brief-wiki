<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Wiki</title>

   <!-- font awesome cdn link  -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> -->

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/brief-wiki/app/routes/../../public/css/style.css" />

   


</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="" class="logo"><i class="fa fa-wikipedia-w"></i>Wiki</a>

         <ul>
            <li><a href="wikinsert">Add wiki<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">buy<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="#">house</a></li>
                     <li><a href="#">flat</a></li>
                     <li><a href="#">shop</a></li>
                     <li><a href="#">ready to move</a></li>
                     <li><a href="#">furnished</a></li>
                  </ul>
               </li>
               <li><a href="#">sell<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="#">post property</a></li>
                     <li><a href="#">dashboard</a></li>
                  </ul>
               </li>
               <li><a href="#">rent</a>
                  <ul>
                     <li><a href="#">house</a></li>
                     <li><a href="#">flat</a></li>
                     <li><a href="#">shop</a></li>
                  </ul>
               </li>
               <li><a href="#">help<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.html">about us</a></i></li>
                     <li><a href="contact.html">contact us</a></i></li>
                     <li><a href="contact.html#faq">FAQ</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="#">saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">account <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="login">login</a></li>
                  <li><a href="register.html">register</a></li>
                  <li><a href="logout">logout</a></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">All wikis</h1>

   <div class="box-container">

    <!-- wiki card -->


    <?php

   require '../../vendor/autoload.php';
   use app\services\WikiServices;



   $wikiService = new WikiServices();
   $wikis = $wikiService->getAllWikis();
   foreach ($wikis as $wiki) { ?>

      <div class="box">
         <div class="admin">
            <div>
               <span> Created: <?php echo $wiki['submissionDate'] ?></span>
            </div>
         </div>
         <div class="thumb">
         
            <img src="/brief-wiki/app/routes/../../public/upload/<?php echo $wiki['imagePath'] ?>"  alt="Image Alt Text">
         </div>
         <h3 class="name"><?php echo $wiki['title'] ?></h3> 
         <a href="wikidetails?id=<?php echo $wiki['id']; ?>" class="btn">Read more</a>
      </div>
    

      <?php } ?>




   </div>

</section>

<!-- listings section ends -->



<!-- footer section starts  -->

<footer class="footer">

   <section class="flex">

      <div class="box">
         <a href="tel:1234567890"><i class="fas fa-phone"></i><span>123456789</span></a>
         <a href="tel:1112223333"><i class="fas fa-phone"></i><span>1112223333</span></a>
         
      </div>

      <div class="box">
         <a href="home.html"><span>home</span></a>
         <a href="about.html"><span>about</span></a>
        
        
      </div>

      <div class="box">
         <a href="#"><span>facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="#"><span>twitter</span><i class="fab fa-twitter"></i></a>
        

      </div>

   </section>

   

</footer>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="https://kit.fontawesome.com/b93ca603ed.js" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</body>
</html>