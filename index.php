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
            <a href="index" class="logo"><i class="fa fa-wikipedia-w"></i>Wiki</a>

            <ul>
            <?php 
      session_start();

      if(isset(($_SESSION['user_id']))){ ?>

    <li><a href="wikinsert">Add wiki<i class="fas fa-paper-plane"></i></a></li>

    <?php
      }
          ?>

<?php 
    

      if(!isset(($_SESSION['user_id']))){ ?>
          <li><a href="login">Login<i class="fas fa-sign-in"></i></a></li>

<?php
  }
      ?>

              
            </ul>
         </section>
      </nav>

      <nav class="navbar nav-2">
         <section class="flex">
            <div id="menu-btn" class="fas fa-bars"></div>

            <div class="menu">
               
            </div>

            <ul>
              

               <?php 
      

      if(isset(($_SESSION['user_id']))){ ?>
               <li><a href="#">account <i class="fas fa-angle-down"></i></a>
                  <ul>
                    
                     <li><a href="logout">logout</a></li>
                  </ul>
               </li>
            </ul>
<?php } ?>


         </section>
      </nav>

   </header>

   <!-- Search input -->
   <form id="searchForm" class="search-form">
      <input type="text" id="query" placeholder="Search for a wiki" class="box" >
   </form>

   <!-- header section ends -->

   <!-- listings section starts  -->

   <section class="listings">

      <h1 class="heading">All wikis</h1>

     

      <div class="box-container" id="wikisContainer">

         <!-- wiki card -->


         <?php


         foreach ($wikis as $wiki) { ?>


            <div class="box">
               <div class="admin">
                  <div>
                     <span> Created: <?php echo $wiki['submissionDate'] ?></span>
                  </div>
               </div>
               <div class="thumb">

                  <img src="/brief-wiki/app/routes/../../public/upload/<?php echo $wiki['imagePath'] ?>" alt="Image Alt Text">
               </div>
               <h3 class="name"><?php echo $wiki['title'] ?></h3>
               <a href="wikidetails?id=<?php echo $wiki['id']; ?>" class="btn">Read more</a>
               <div class="admin">
                  <div>
                     <span> Category: <?php echo $wiki['category'] ?></span>
                  </div>
               </div>


            </div>


         <?php } ?>




      </div>

   </section>

   <!-- listings section ends -->



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

<!-- footer section ends -->

   <script>

      document.getElementById('query').addEventListener('keyup', async function () {
         var query = this.value;
         const wikisContainer =  document.getElementById('wikisContainer');


         console.log(query);

         try {
            const response = await fetch(`search?query=${encodeURIComponent(query)}`);
         
            if (response.ok) {
               const json_data = await response.json();
               console.log(json_data);

               var html = '';
               json_data.forEach(wiki => {
                  html +=  `
            <div class="box">
               <div class="admin">
                  <div>
                     <span> Created: ${wiki['submissionDate']}</span>
                  </div>
               </div>
               <div class="thumb">

                  <img src="/brief-wiki/app/routes/../../public/upload/${wiki['imagePath']}" alt="Image Alt Text">
               </div>
               <h3 class="name">${wiki['title']}</h3>
               <a href="wikidetails?id=${wiki['submissionDate']}" class="btn">Read more</a>
               <div class="admin">
                  <div>
                     <span> Category: ${wiki['category']}</span>
                  </div>
               </div>


            </div>`;
               });


               wikisContainer.innerHTML= html;



            } else {
               console.error('Server response not OK:', response.status, response.statusText);
            }
         } catch (error) {
            console.error('Error during fetch:', error);
         }
      });

    
   </script>


   <!-- custom js file link  -->
   <script src="https://kit.fontawesome.com/b93ca603ed.js" crossorigin="anonymous"></script>
   <script src="js/script.js"></script>

</body>

</html>