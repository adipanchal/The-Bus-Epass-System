<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="srch.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <title>Search</title>
    </head>
    <body>
        <div class="back">
        <img src="img/back.png">
        </div>
        <!--Center Page-->
        <div id="sidebar" class="main-pg">
            <div class="main-con">
                <div id="sidebar" class="sidebar">
                 <div id="menu" class="tgl-btn" onclick="onClickMenu()">
                 <div id="bar1" class="bar"></div>
                 <div id="bar2" class="bar"></div>
                 <div id="bar3" class="bar"></div>
                </div>
            </div>
                Search
            </div></div>
        </div>
        <div id="sidebar2" class="wrapper">
            <div class="navbar">
                <h1 class="til-1"><i class="fa-solid fa-bus"></i> TBEPS</h1>
                <div class="profile_wrap">
                    <div class="profile_img">
                        <img src="img/806962_user_user.png">
                    </div>
                    <div class="profile_info">
                        <div class="name"><?php echo $_SESSION['fullname'] ?></div>
                        <p class="role">User</p>
                    </div>
                </div>
                <nav>
                <ul>
                    <li>
                        <a href="dashboard.php" class="til-2">
                            <span class="ic"><i class="fa-solid fa-table-columns"></i></span>
                            <span>Dashboard</span>
                        </a>                            
                        
                    </li>
                    <li>
                        <a href="#" class="til-3">
                              <span class="ic"><i class="fa-solid fa-address-card"></i></span>
                              <span>Passes</span>
                                <ul class="pass-show">
                                    <a href="crt-pass.php" class="til-3a">
                                      <li>
                                        <span class="ic"><i class="fa-solid fa-plus"></i></span>
                                        <span>Create Pass</span>
                                      </li>
                                    </a>
                                    <br><br>
                                    <a href="mng-pass.php" class="til-3b">
                                      <li>
                                        <span class="ic"><i class="fa-solid fa-bars-progress"></i></span>
                                        <span>Manage Pass</span>
                                      </li>
                                    </a>
                                </ul>
                        </a>
                    </li>
                    <li>
                        <a href="search.php" class="til-4">
                            <span class="ic"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <span>Search</span>
                        </a>
                    </li>
                    <li>
                        <a href="complaint.php" class="til-5">
                            <span class="ic">
                                <i class="fa-solid fa-question"></i>
                            </span>
                            <span>Complaint</span>
                        </a>
                    </li>
                    <br><br>
                    <center>
                    <li>
                        <a href="../navbar/home.php">
                            <span class="ic"><i class="fa-solid fa-right-from-bracket"></i></span>
                            <span class="til-6">Logout</span>
                        </a>
                    </li>
                    </center>
                </ul>
            </nav>
           </div>
        </div>

<!-- JavaScript-->

        <script>
            $('.til-3').click(function(){
                $('nav ul .pass-show').toggleClass("show");
            });
            $('.tgl-btn').click(function(){
                document.getElementById("menu").classList.toggle("icon");
                document.getElementById('sidebar').classList.toggle('active');
                document.getElementById('sidebar2').classList.toggle('active');
            });
        </script>
    </body>
</html>