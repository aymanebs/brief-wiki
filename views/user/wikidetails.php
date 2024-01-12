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
         <a href="index" class="logo"><i class="fa fa-wikipedia-w"></i>Wiki</a>

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
               <li></a>
                  <ul>
               
                  </ul>
               </li>
               <li></a>
                 
               </li>
               <li></a>
                  <ul>
              
                  </ul>
               </li>
               <li></a>
           
               </li>
            </ul>
         </div>

         <ul>
          
            <li><a href="#">account <i class="fas fa-angle-down"></i></a>
               <ul>
            
                  <li><a href="logout">logout</a></li>
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
         <a href=""><i class="fas fa-envelope"></i><span>@gmail.com</span></a>
         <a href="#"><i class="fas fa-map-marker-alt"></i><span> Local- 400104</span></a>
      </div>

      <div class="box">
         <a href="index"><span>home</span></a>
         <a href="about.html"><span>about</span></a>
        
      </div>

      <div class="box">
         <a href="#"><span>facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="#"><span>twitter</span><i class="fab fa-twitter"></i></a>
       

      </div>

   </section>

   

</footer>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
<!-- custom js file link  -->
<script src="https://kit.fontawesome.com/b93ca603ed.js" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</body>
</html>