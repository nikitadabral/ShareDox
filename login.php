<!DOCTYPE html>
<html>
 <head>  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"></head>
 <body>
  <div class="container w-25 mt-5 bg-dark text-light p-2 rounded">
        <div class="form">
        <div id="login">   
          <h1 class="text-center">Welcome Back!</h1>
          
          <!-- Mssg if Email/Password is incorrect -->
          <?php 
          session_start();
          if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
          } ?>
          <!-- ------------------------------------- -->

          <form action="success.php" method="post">
          
            <div class="field-wrap">
            <label for="email">
              Email Address<span class="req" style="color: red;"> *</span>
            </label>
            <input type="email" class="form-control" name="email" id="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap mt-3">
            <label for="password">
              Password<span class="req" style="color: red;"> *</span>
            </label>
            <input type="password" name="password" class="form-control" id="password" required autocomplete="off"/>
          </div>
          
          
          <a href="#">Forgot Password?</a> 
          <a href="signup.php" class="float-right">Sign up</a>
          
          <button class="btn btn-success btn-block mt-3">Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div>
</body>  
</html>