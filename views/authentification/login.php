
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/brief-wiki/app/routes/../../public/css/style.css">

</head>
<body>

<!-- login section starts  -->

<section class="form-container">

   <form action="login" method="post">
      <h3>welcome back!</h3>
      <input type="email" name="email"  placeholder="enter your email" class="box">
      <input type="password" name="password"  placeholder="enter your password" class="box">
      <p>don't have an account? <a href="register">register new</a></p>
      <input type="submit"  name="login" class="btn">
   </form>

</section>

<!-- login section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>