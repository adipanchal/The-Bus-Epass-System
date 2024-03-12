<?php
session_start();
$_SESSION['scid'];
echo"<script>alert('Login Successfull.')</script>";

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/clg_pg.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <title>College</title>
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
                Wellcome <?php echo $_SESSION['scnm']; ?>
            </div>
        </div>
        </div>
        <div id="sidebar2" class="wrapper">
            <div class="navbar">
                <h1 class="til-1"><i class="fa-solid fa-bus"></i> TBEPS</h1>
                <div class="profile_wrap">
                    <div class="profile_img">
                        <img src="img/806962_user_user.png">
                    </div>
                    <div class="profile_info">
                        <div class="name"><?php echo $_SESSION['scnm']; ?></div>
                        <p class="role">College</p>
                    </div>
                </div>
                <hr style="width: 20%; height: 4px; background-color: #0000000f; margin: auto; border: none; border-radius: 20px;">
                <br>
                <nav>
                <ul>
                    <li>
                        <a href="pen-aprvl.php" class="til-2">
                            <span class="ic"><i class="fa-solid fa-hourglass"></i></span>
                            <span>Pending Approvals</span>
                        </a>
                    </li>
                    <li>
                        <a href="list-aprvl.php" class="til-3">
                            <span class="ic"><i class="fa-solid fa-list-check"></i></span>
                            <span>List Of Approvals</span>
                        </a>
                    </li>
                    <li>
                        <a href="search.php" class="til-4">
                            <span class="ic"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <span>Search</span>
                        </a>
                    </li>
                    <br><br><br><br>
                    <center>
                    <li>
                        <a href="logout.php">
                            <span class="ic"><i class="fa-solid fa-right-from-bracket"></i></span>
                            <span class="til-5">Logout</span>
                        </a>
                    </li>
                </center>
                </ul>
            </nav>
           </div>
        </div>
        <!-- JavaScript-->

        <script>
            $('.tgl-btn').click(function(){
                document.getElementById("menu").classList.toggle("icon");
                document.getElementById('sidebar').classList.toggle('active');
                document.getElementById('sidebar2').classList.toggle('active');
            });
        </script>
    </body>
</html>