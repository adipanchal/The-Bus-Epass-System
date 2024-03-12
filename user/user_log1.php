<html>
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />        
    <link rel="stylesheet" href="css/user_log.css" />
    <title>Sign in & Sign up</title>
  </head>
  <body>
    <div class="boundry">
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <!-- Login -->
          <form method="post" action="log.php" class="sign-in-form">
            <h2 class="title">Sign In</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required/>
            </div><br>

              <!-- login-button -->
              <button type="submit" name="submit" value="Login" class="btn">Login</button>
            
          </form>

          <!-- Sign Up -->

          <form action="reg.php" method="post" class="sign-up-form">
          <br><br><br><br><br><br><h2 class="title">Sign up</h2><br>
          <input type="hidden" name="id"/>
            <div class="input-field">
            <i class="fa-solid fa-pen"></i>
              <input type="text" name="fullname" placeholder="Full Name" required/>
            </div>
            <div class="input-field">
            <i class="fa-solid fa-building-columns"></i>
              <input type="text" name="scnm" placeholder="School/College Name" required/>
            </div>
            <div class="input-field">
            <i class="fa-solid fa-id-card-clip"></i>
              <input type="text" name="scid" placeholder="School/College Id" required/>
            </div>
            <div class="input-field">
            <i class="fa-solid fa-graduation-cap"></i>
              <input type="text" name="course" placeholder="Course" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required/>
            </div><br>
            
            <!-- Sign Up-button -->
            <button  type="submit" name="signup" class="btn" value="Sign Up">Sign Up</button>
          </form>
        </div>
      </div>
      <!-- Another sign in-up -->
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Sign-Up First
              And Be Part Of Us! 
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign Up
            </button>
          </div>
          <img src="img/logf.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              If You Are Already User Then Go For Login 
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign In
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    </div>

    <div class="popup" id="popup">
      <div class="popup-head">
        <div class="title">Register Success</div>
      </div>
      <div class="popup-body">
        Your Registration is successfull Now You can Login
      </div>
      <button data-close-btn>OK</button>
    </div>
    <div id="overlay"></div>
    

    <!-- Javascript-->

    <script>
      const sign_in_btn = document.querySelector("#sign-in-btn");
      const sign_up_btn = document.querySelector("#sign-up-btn");
      const container = document.querySelector(".container");
      sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
      });
      sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
      });
    </script>
    <!--<script>
      const openSubmitButtons=document.querySelectorAll('[data-submit-target]')
      const closeSubmitButtons=document.querySelectorAll('[data-close-btn]')
      const overlay=document.getElementById('overlay')

      openSubmitButtons.forEach(button=>{
        button.addEventListener('click',()=>{
          const popup =document.querySelector(button.dataset.popupTarget)
          openPopup(popup)
        })
      })

      closeSubmitButtons.forEach(button=>{
        button.addEventListener('click',()=>{
          const popup =button.closest('.popup')
          closePopup(popup)
        })
      })

      function openPopup(modal){
        if(popup==null) return
        modal.classList.add('active')
        overlay.classList.add('active')
      }
      function closePopup(modal){
        if(popup==null) return
        modal.classList.remove('active')
        overlay.classList.remove('active')
      }
    </script>-->
  </body>
</html>
