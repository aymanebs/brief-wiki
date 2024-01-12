<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/brief-wiki/app/routes/../../public/css/style.css">

</head>
<body>
  

<!-- register section starts  -->

<section class="form-container">

   <form action="register" method="post" id="registrationForm">
      <h3>create an account!</h3>
      <input type="tel" name="name" id="name" placeholder="enter your name" class="box">
      <span  id="nameError" class="error" style="color: red;"></span>
      <input type="text" name="email" id="email" placeholder="enter your email" class="box">
      <span id="emailError" class="error" style="color: red;"></span>
      <input type="text" name="password" id="password" placeholder="enter your password" class="box">
      <span id="passwordError" class="error" style="color: red;"></span>
      <input type="text" name="password_confirmation" id="password_confirmation" placeholder="confirm your password" class="box">
      <span id="confirmPasswordError" class="error" style="color: red;"></span>
      <p>already have an account? <a href="login">Login now</a></p>
          <button type="submit"id="submit" name="register" class="btn"  >submit</button>   
   </form>

</section>

<!-- register section ends -->


<!-- js form validation -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const registrationForm = document.getElementById('registrationForm');

        registrationForm.addEventListener('submit', function (event) {
            if (!validateForm()) {
                event.preventDefault(); 
            }
        });

        function validateForm() {
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('password_confirmation');

            const name = nameInput.value.trim();
            const email = emailInput.value.trim();
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;

            const nameError = document.getElementById('nameError');
            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');
            const confirmPasswordError = document.getElementById('confirmPasswordError');

            nameError.textContent = '';
            emailError.textContent = '';
            passwordError.textContent = '';
            confirmPasswordError.textContent = '';

           
            if (name === '' ) {
              nameError.textContent = 'Name is required.';
              return false;
            }

            if (email === '' ) {
              emailError.textContent = 'Email is required.';
              return false;
            }

            else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim())) {
                emailError.textContent = 'Invalid email format.';
                return false;
            }

            if (password === '' ) {
              passwordError.textContent = 'Password is required.';
              return false;
            }

            else if (passwordInput.value.length < 5) {
                passwordError.textContent = 'Password must be at least 5 characters.';
                return false;
            }

            if (confirmPassword === '' ) {
              confirmPasswordError.textContent = 'confirmPassword is required.';
              return false;
            }

            if (passwordInput.value !== confirmPasswordInput.value) {
                confirmPasswordError.textContent = 'Passwords do not match.';
                return false;
            }
           

            if (password !== confirmPassword) {
                alert('Password and Confirm Password must match.');
                return false;
            }

            return true;
        }
    });
</script>




</body>
</html>


















