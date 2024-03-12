<html>
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />        
    <link rel="stylesheet" href="css/admin_log.css" />
    <title>Sign in & Sign up</title>
  </head>
  <body>
    <div class="boundry">
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <!-- Login -->
          <form method="post" action="reg.php" class="sign-in-form"><br><br><br><br>
            <h2 class="title">Sign In</h2><br><br>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required/>
            </div><br>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required/>
            </div><br>

              <!-- login-button -->
              <button type="submit" name="submit" value="Login" class="btn">Login</button>
            
          </form>
        </div>
</div>
  </body>
</html>
