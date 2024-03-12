<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="enq.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <title>Enquiry</title>
    </head>
    <body>
        <div class="back">
        <img src="img/back.png">
        </div>
        <div class="main-pg">
            <div class="main-con">
                Enquiry
            </div>
        </div>
        <div class="wrapper">
            <div class="navbar">
                <h1 class="til-1"><i class="fa-solid fa-bus"></i> TBEPS</h1>
                <div class="profile_wrap">
                    <div class="profile_img">
                        <img src="img/logo.png">
                    </div>
                    <div class="profile_info">
                        <div class="name">Adjing Inc.</div>
                        <p class="role">Adminstrator</p>
                    </div>
                </div>
                <nav>
                <ul>
                    <li>
                        <a href="dash.php" class="til-2">
                            <span class="ic"><i class="fa-solid fa-table-columns"></i></span>
                            <span>Dashboard</span>
                        </a>                            
                        
                    </li>
                    <li>
                     <a href="mng-pass.php" class="til-3">
                       <span class="ic"><i class="fa-solid fa-bars-progress"></i></span>
                     <span>Manage Pass</span>
                     </a>
                    </li>
                    
                    <li>
                        <a href="reports.php"  class="til-4">
                            <span class="ic"><i class="fa-solid fa-file-lines"></i></span>
                            <span>Reports</span>
                        </a>
                       </li>
                       <li>
                           <a href="enqiury.php"  class="til-5">
                              <span class="ic"><i class="fa-solid fa-envelope-open-text"></i></span>
                               <span>Enquiry</span>
                           </a>
                       </li>
                    <li>
                     <a href="src.php"  class="til-6">
                         <span class="ic"><i class="fa-solid fa-magnifying-glass"></i></span>
                         <span>Search</span>
                     </a>
                 </li>
                    <br>
                    <center>
                    <li>
                        <a href="../navbar/home.php">
                            <span class="ic"><i class="fa-solid fa-right-from-bracket"></i></span>
                            <span class="til-7">Logout</span>
                        </a>
                    </li>
                </center>
                </ul>
            </nav>
           </div>
        </div>

        <script>
            $('.til-3').click(function(){
                $('nav ul .pass-show').toggleClass("show");
            });
        </script>
    </body>
</html>