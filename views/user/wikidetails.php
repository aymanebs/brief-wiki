<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Wiki</title>

   <!-- font awesome cdn link  -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> -->
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
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
                  <li><a href="login.html">login</a></li>
                  <li><a href="register.html">register</a></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->


<!-- article section starts  -->
<section id="wiki-details">


<?php




   foreach ($wikis as $wiki) { ?>
   <!-- Article Title -->
   <?php echo "Author" . $wiki['author'] ?>

<h1 style="padding: 20px;"><?php echo $wiki['title']?></h1>

      <!-- Article Image -->
<img src="/brief-wiki/app/routes/../../public/upload/<?php echo $wiki['imagePath'] ?>" class="wiki_image" alt="Article Image">

      <!-- Article Content -->
<div  style="padding-top: 20px;">
    <p></p>

    <p style="text-align: justify; margin-bottom: 20px; font-size: 16px;"><?php echo $wiki['content']?></p>
</div>

</div>

<!-- article section ends  -->



   <?PHP }
   



?>

</section>


<!-- article section ends  -->




<!-- footer section starts  -->

<footer class="footer">

   <section class="flex">

      <div class="box">
         <a href="tel:1234567890"><i class="fas fa-phone"></i><span>123456789</span></a>
         <a href="tel:1112223333"><i class="fas fa-phone"></i><span>1112223333</span></a>
         <a href=""><i class="fas fa-envelope"></i><span>shaikhanas@gmail.com</span></a>
         <a href="#"><i class="fas fa-map-marker-alt"></i><span>mumbai, india - 400104</span></a>
      </div>

      <div class="box">
         <a href="home.html"><span>home</span></a>
         <a href="about.html"><span>about</span></a>
         <a href="contact.html"><span>contact</span></a>
         <a href="listings.html"><span>all listings</span></a>
        
      </div>

      <div class="box">
         <a href="#"><span>facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="#"><span>twitter</span><i class="fab fa-twitter"></i></a>
         <a href="#"><span>linkedin</span><i class="fab fa-linkedin"></i></a>
         <a href="#"><span>instagram</span><i class="fab fa-instagram"></i></a>

      </div>

   </section>

   

</footer>

<!-- footer section ends -->

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
<!-- custom js file link  -->
<script src="https://kit.fontawesome.com/b93ca603ed.js" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</body>
</html>