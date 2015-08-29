<!DOCTYPE html>
<html lang="en">
<head>
         <meta charset="UTF-8">
         <title>Registration Page</title>
         <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body class="front">
         <div class="header">
                     
                   <!-- login form -->
                   <form class="form" action="/login_user" method="post">
                            <h1>Login</h1><br>
                            <h2>Email: </h2><input name="email" class="elements" type="text"><br>
                            <h2>Password: </h2><input name="password" class="elements" type="password"><br>
                            <input class="btn" type="submit" value="Login!"><br>
                   </form>
                  
                  <form class="form" >
         
                  </form>

                   <!-- registration form -->
                   <form class="form" action="/register" method="post">
                            <h1>Register</h1><br>
                            <?=  $this->session->flashdata('registration_errors') ?>
                            <?=  $this->session->flashdata('success') ?>
                            <h2>First Name: </h2><input name="first_name" class="elements" type="text"><br>
                            <h2>Last Name: </h2><input name="last_name" class="elements" type="text"><br>
                            <h2>Email: </h2><input name="email" class="elements" type="text"><br>
                            <h2>Password: </h2><input name="password" class="elements" type="password"><br>
                            <h2>Confirm Password: </h2><input name="password_confirmation" class="elements" type="password"><br>
                            <h2>Date of Birth: </h2><input type="date" name="birthday" id="">
                            <input class="btn" type="submit" value="Register!"><br>
                   </form>
          </div>
</body>
</html>