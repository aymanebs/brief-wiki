<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

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
            <li><a href="#">Add wiki<i class="fas fa-paper-plane"></i></a></li>
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
                     <li><a href="#">Add wiki</a></li>
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

<!-- form section starts  -->

<section class="contact">

   <div class="row">
   
      <form action="insert" method="post" enctype="multipart/form-data">
         <h3>Add your contribution</h3>
         <label style="font-size: 1.5em;">Title</label>
         <input type="text" name="title"  placeholder="Title" class="box">

         <label style="font-size: 1.5em;">Select category</label>
         <select name="category_id" class="box">
         <?php

        use app\services\CategoryServices;
        use app\services\TagServices;

         require '../../vendor/autoload.php';

         $categoryservice = new CategoryServices();
         $categories=$categoryservice->getAllCategories();
         foreach($categories as $category){ ?>
         <option  value="<?php echo $category['id']?>"><?php echo $category['title']?></option>

       
         
        <?php
         }
         ?>
         </select> 
         <label  style="font-size: 1.5em;">Select tag</label>
         <select name="tag_id" class="box">
         <?php

         require '../../vendor/autoload.php';

         $tagservice = new TagServices();
         $tags=$tagservice->getAllTags();
         foreach($tags as $tag){ ?>
  
         <option value="<?php echo $tag['id']?>"><?php echo $tag['title']?></option>
        <?php
         }
         ?>
         </select> 
         <label style="font-size: 1.5em;">Content</label>
         <textarea name="content" placeholder="Wiki content"  cols="30" rows="10" class="box"></textarea>
         <label style="font-size: 1.5em;">Insert image</label>
         <input  name="image" type="file" accept="image/png, image/gif, image/jpeg" class="box">
         <input type="submit" name="insert" class="btn">
         
      </form>
   </div>

</section>

<!-- contact section ends -->












<!-- footer section starts  -->

<footer class="footer">

   <section class="flex">

      <div class="box">
         <a href="tel:1234567890"><i class="fas fa-phone"></i><span>123456789</span></a>
         <a href="tel:1112223333"><i class="fas fa-phone"></i><span>1112223333</span></a>
         <a href="mailto:shaikhanas@gmail.com"><i class="fas fa-envelope"></i><span>shaikhanas@gmail.com</span></a>
         <a href="#"><i class="fas fa-map-marker-alt"></i><span>mumbai, india - 400104</span></a>
      </div>

      <div class="box">
         <a href="home.html"><span>home</span></a>
         <a href="about.html"><span>about</span></a>
         <a href="contact.html"><span>contact</span></a>
         <a href="listings.html"><span>all listings</span></a>
         <a href="#"><span>saved properties</span></a>
      </div>

      <div class="box">
         <a href="#"><span>facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="#"><span>twitter</span><i class="fab fa-twitter"></i></a>
         <a href="#"><span>linkedin</span><i class="fab fa-linkedin"></i></a>
         <a href="#"><span>instagram</span><i class="fab fa-instagram"></i></a>

      </div>

   </section>

   <div class="credit">&copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!</div>

</footer>

<!-- footer section ends -->

<script src="https://kit.fontawesome.com/b93ca603ed.js" crossorigin="anonymous"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>