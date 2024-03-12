<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="css/dash.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <title>Dashboard</title>
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
                Dashboard
                <div class="das-con">
                    <div class="aprv-ck">
                        <!-- Php Section-->
                    <?php
                    include 'connect.php';

                    //QUERY FOR USER FILL THE FORM OR NOT
                    //S1
                    $s1="select * from crtps where user_id=$_SESSION[id] && id_no=$_SESSION[idno]";
                    $s1que=mysqli_query($con,$s1);
                    $s1num=mysqli_num_rows($s1que);

                    //QUERY FOR BOTH APPROVAL IS DONE
                    //S2
                    $s2="select * from crtps user_id=$_SESSION[id] && id_no=$_SESSION[idno] && clg_approved='done'";
                    $s2que=mysqli_query($con,$s2);
                    $s2num=mysqli_num_rows($s2que);

                    //S1
                    if($s1num>0)
                    {
                        $s11="select * from crtps where user_id=$_SESSION[id] && id_no=$_SESSION[idno] && clg_approved='yes'";
                        $s11que=mysqli_query($con,$s11);
                        $s11num=mysqli_num_rows($s11que);
                        
                        //APPROVED YES
                        if($s11num>0)
                        {
                            $row=mysqli_fetch_assoc($s11que);
                            $approved_clg=$row['clg_approved'];
                            echo'Approved From College :<br>
                            <tr>
                            <td>'.$approved_clg.'</td>
                            </tr>';
                        }
                        //APPROVED PENDING
                        else
                        {
                            echo'Approved From College :<br>Pending...';
                        }
                    }
                    //IF USER DOES NOT FILL THE FORM
                    else
                    {
                        echo'Look Like You Doesn\'t Fill The Form!';
                    }

                    //S2
                    if($s2num>0)
                    {
                        $s21="select * from crtps where user_id=$_SESSION[id] && id_no=$_SESSION[idno] && clg_approved='done'";
                        $s21que=mysqli_query($con,$s32);
                        $s21num=mysqli_num_rows($s21que);
                        
                        //APPROVED YES
                        if($s21num>0)
                        {
                            $row=mysqli_fetch_assoc($s21que);
                            $approved_clg=$row['clg_approved'];
                            echo'Approved From College :<br>
                            <tr>
                            <td>'.$approved_clg.'</td>
                            </tr>';
                        }
                        //APPROVED PENDING
                        else
                        {
                            echo'Approved From College :<br>Pending...';
                        } 
                        ?>
                    <?php } ?>
                        <!-- Php Section End-->
                    </div>
                </div>
                <div class="das-con">
                    <div class="aprv-ck">
                        <!-- Php Section-->
                    <?php
                    include 'connect.php';

                    //QUERY FOR USER FILL THE FORM OR NOT
                    //S1
                    $s1="select * from crtps user_id=$_SESSION[id] && id_no=$_SESSION[idno]";
                    $s1que=mysqli_query($con,$s1);
                    $s1num=mysqli_num_rows($s1que);

                    if($s1num>0)
                    {
                        $s11="select * from crtps where user_id=$_SESSION[id] && id_no=$_SESSION[idno] && admin_approved='yes'";
                        $s11que=mysqli_query($con,$s11);
                        $s11num=mysqli_num_rows($s11que);
                        
                        if($s2num>0)
                        {
                            $row=mysqli_fetch_assoc($s11que);
                            $approved_admin=$row['admin_approved'];
                            echo'Approved From Admin :<br>
                            <tr>
                            <td>'.$approved_admin.'</td>
                            </tr>';
                        }
                        else
                        {
                            echo'Approved From Admin :<br>Pending...';
                        }
                        ?>
                    <?php }
                    else
                    {
                        echo'Look Like You Doesn\'t Fill The Form!';
                    } ?>
                        <!-- Php Section End-->
                    </div>
                </div>
            </div>
        </div>

        <!--Sidebar-->

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
                <hr style="width: 20%; height: 4px; background-color: #0000000f; margin: auto; border: none; border-radius: 20px;">
                <br>
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
                            <ul id="show" class="pass-show">
                                <a href="crt-pass.php" class="til-3.1">
                                    <li>
                                        <span class="ic"><i class="fa-solid fa-plus"></i></span>
                                        <span>Create Pass</span>
                                    </li>
                                </a><br><br>
                                <a href="mng-pass.php" class="til-3.2">
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
            //FOR SIDEBAR PASSES FUNCTION
            $('.til-3').click(function(){
                document.getElementById('show').classList.toggle('show');
            });
            //FOR SIDEBAR EXTEND FUNCTION
            $('.tgl-btn').click(function(){
                document.getElementById("menu").classList.toggle("icon");
                document.getElementById('sidebar').classList.toggle('active');
                document.getElementById('sidebar2').classList.toggle('active');
            });
        </script>
    </body>
</html>