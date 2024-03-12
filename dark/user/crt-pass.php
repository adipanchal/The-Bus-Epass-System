<?php
session_start();

?>
<html>
    <head>
        <link rel="stylesheet" href="crtps.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <title>Create Pass</title>
    </head>
    <body>
        <div class="back">
        <img src="img/back.png">
        </div>
        <!-- Center Page -->
        <form action="crtbase.php" method="post" enctype="multipart/form-data">
        <div id="sidebar" class="main-pg">
            <div class="main-con">
                <div id="sidebar" class="sidebar">
                 <div id="menu" class="tgl-btn" onclick="onClickMenu()">
                 <div id="bar1" class="bar"></div>
                 <div id="bar2" class="bar"></div>
                 <div id="bar3" class="bar"></div>
            </div>
            </div>
                <!-- Head Of Center pg-->
                <div class="hd">
                    Pass Form
                </div>
                <br><br><br><br><br>  
                <!-- mid sec of center pg-->
               <div class="mid">
                <div class="in-pg">
                    <div class="phase1">
                        <hr style="width: 10%; height: 5px; background-color: #23292e; margin: auto; border: none; border-radius: 20px;"><br><br>
                        <div style="color: gray; text-align:center">
                            <span>Personal Details</span>  
                        </div>
                        <div>
                            <input class="inpt" type="text" placeholder="Full Name" name="name" >
                        </div>
                        <div>
                            <input class="inpt" type="text" placeholder="Age" name="age" >
                        </div>
                        <div>
                            <input class="inpt" type="text" placeholder="Gender"  name="gender" >
                        </div>
                        <div>
                            <input class="inpt" type="text" placeholder="Address"  name="address" >
                        </div>
                        <br><br>
                        <div style="color: gray; text-align:center">
                             <span>Upload Your Photo</span>    
                        </div>
                        <div class="upld">
                            <input class="upld-bx" type="file" name="pro_img" >
                        </div>
                        <br><br>
                        <div style="color: gray; text-align:center">
                             <span>Select Year</span>    
                        </div>
                        <select class="dbox" name="year">
                            <div class="options">
                                <option>First Year</option>
                                <option>Second Year</option>
                                <option>Third Year</option>
                            </div>
                        </select>
                        <div>
                            <input class="inpt" type="text" placeholder="School/College Id"  name="scid" >
                        </div>
                    </div>
                    <br><br>
                    <div style="color: gray; text-align:center">
                        <span>Select Id</span>    
                    </div>
                    <!-- dropdown -->
                    <div class="divid">
                        <select class="dbox" name="idtp">
                            <div class="options">
                                <option>Aadhaar Card</option>
                                <option>Voter Id</option>
                                <option>Driving license</option>
                            </div>
                        </select>
                        <div class="phase1">
                            <input class="inpt" type="text" placeholder="Id No" name="idno" >
                        </div>

                        <!-- upload document-->
                        <div class="upld">
                            <input class="upld-bx" type="file" name="idimg" >
                        </div>
                        <br><br>
                        <div style="color: gray; text-align:center">
                             <span>Upload Bonofide</span>    
                        </div>
                        <div class="upld">
                            <input class="upld-bx" type="file" name="bimg" >
                        </div>
                        <br><br>
                        <div style="color: gray; text-align:center">
                        <span>Select Place</span>
                        </div>
                        <div class="phase1">
                            <input class="inpt" type="text" placeholder="From Place" name="fplc" >
                        </div>
                        <div class="phase1">
                            <input class="inpt" type="text" placeholder="To Place" name="tplc" >
                        </div>
                        <br><br>
                        <div style="color: gray; text-align:center">
                        <span>Select Month</span>  
                        </div>
                        <select class="dbox" name="mon">
                            <div class="options">
                                <option>1 Month</option>
                                <option>3 Month</option>
                                <option>6 Month</option>
                            </div>
                        </select>
                        <br><br>    
                        <div style="color: gray; text-align:center">
                        <span>Select Pass Type</span>  
                        </div>
                        <select class="dbox" name="pstp">
                            <div class="options">
                                <option>Local</option>
                                <option>Express</option>
                                <option>Gurjarnagri Express</option>
                            </div>
                        </select>
                        <br><br>
                        <hr style="width: 10%; height: 5px; background-color: #23292e; margin: auto; border: none; border-radius: 20px;">
                        
                    </div>
                    
                    <br><br>
                        <div class="sbmt-btn">
                            <input type="submit" value="S U B M I T" name="sbmt-btn" >
                        </div><br><br>
                        </div>
                </div>
                </div></div>
        </form>
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