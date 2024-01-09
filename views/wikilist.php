<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Card Example</title>
</head>
<body>
<?php

require '../../vendor/autoload.php';
use app\services\WikiServices;



$wikiService = new WikiServices();
$wikis = $wikiService->getAllWikis();
foreach ($wikis as $wiki) { ?>
    <div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <img src="brief-wiki/public/upload/pic-3.png" class="card-img-top" alt="Image Alt Text">
        <div class="card-body">
            <h5 class="card-title"><?php echo $wiki['title'] ?></h5>
            <p class="card-text"><?php echo $wiki['content'] ?></p>
            <p class="card-text"><?php echo $wiki['imagePath'] ?></p>
            
        </div>
    </div>
</div>

 <?php }
 ?>

<img src="/brief-wiki/public/upload/pic-3.png"  alt="Image Alt Text">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
    




                    



   

   


   






