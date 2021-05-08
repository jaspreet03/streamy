<?php

  session_start();   // session starts with the help of this function 


if(isset($_SESSION['user']))   // Checking whether the session is already there or not if 
  // true then header redirect it to the home page directly 
 {
    header("Location:index.php"); 
 }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="icon" href="img/streamyfinal.png" />
    <style>
.error{
    color:white;
    font-size: 20px;
}
      </style>
    <script
      src="https://kit.fontawesome.com/ccf9756b8c.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
    
  
  </head>
  <body>
    
  
    <div class="background">
      <div class="login-logo">
<H1>
  STREAMY
</H1>

      </div>
      <img src="img/collage.jpg" alt="collage">
<div class="box">
  
    <!--------- login form---------->
    <div class="form">
      <form class="login-form" action="login.php" method="POST">
        <i class="fas fa-user-circle"></i>
        <input
          type="text"
          class="user-input"
          name="name"
          placeholder="Username"
          value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"
          required
        />
        <input
          type="password"
          class="user-input"
          name="pwd"
          placeholder="Password"
          value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"
          required
        />
        <div class="options-01">
          <label for="" class="remember-me">
            <input type="checkbox" name="rememberme" value="1" />Remember Me
          </label>
          <a href="forgotpassword.php">Forgot your password</a>
        </div>
        <input type="submit" class="btn" name="submit" value="LOGIN" />
         
        <div class="options-02">
          <p>Not Registered? <a href="#">Create An Account</a></p>
        </div>
       
      </form>
      <!------------signup form-------------->

    <?php

    include("validate.php");
    ?>
      <form class="signup-form" id="validate"  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        <i class="fas fa-user-plus"></i>
        <br>
        <span class="error"><?php echo $nameErr;?></span>
        <input class="user-input" type="text" name="name" id="name" value="<?php echo $name;?>" placeholder="Username" />
        
        <span class="error"> <?php echo $emailErr;?></span>
        <input
          class="user-input"
          type="text"
          name="email"
          id="email"
          value="<?php echo $email;?>"
          placeholder="Email Address"
        />
        <span class="error"><?php echo $pwdErr;?></span>
        <input
          class="user-input"
          type="password"
          name="pwd"
          id="pwd"
          placeholder="Password"
        />
        <input class="btn" type="submit" name="submit" value="SIGN UP" />
        <div class="options-02" >
          <p>Already Registered <a href="#"> Sign In</a></p>
        </div>
      </form>

      <?php
       include("register.php");
      ?>
    
    </div>
  </div>
      

    </div>

    <script type="text/javascript"> 
      $(document).ready(function(){
$('.options-02 a').click(function(){
$('form').animate({
    height:"toggle",opacity:"toggle"
},"slow");
});

});

  </script>
  
  



  </body>
</html>


  
  