


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form form action="insert" method="post" enctype="multipart/form-data">


  
       <div class="mb-3">
     <label for="password" class="form-label">Title</label>
          <input class="form-control"   name="title" required="" >
        </div>

        <div class="mb-3">
     <label for="password" class="form-label">content</label>
          <input class="form-control"   name="content" required="" >
        </div>

        <div class="mb-3">
     <label for="password" class="form-label">status</label>
          <input class="form-control"   name="status" required="" >
        </div>

        <div class="mb-3">
     <label for="password" class="form-label">category_id</label>
          <input class="form-control"   name="category_id" required="" >
        </div>

        <div class="mb-3">
     <label for="password" class="form-label">user_id</label>
          <input class="form-control"   name="user_id" required="" >
        </div>




    <div class="">
        <label >Image</label>
	    <div class="col-lg-9">
        <input class="form-control" name="image" type="file" accept="image/png, image/gif, image/jpeg" >
        </div>
    </div>

    <div class="">
    <button type="submit" name="insert" >submit</button>         
    </div>


</form>



</body>
</html>