<html>
    <head>
        <link rel="stylesheet" href="l-aprvl.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <title>list Approvals</title>
    </head>
    <body>
        <div class="back">
        <img src="img/back.png">
        </div>
        <div class="main-pg">
            <div class="main-con">
                <form>
                    <div class="dock">
                        <div class="head-cen">
                            <span><center>Approved List</center></span>
                        </div><br>
                        <table>
                            <thread>
                            <tr>
                                <th>SR NO.</th>
                                <th>Full Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Year</th>
                                <th>Id Type</th>
                                <th>Id No</th>
                                <th>From Place</th>
                                <th>To Place</th>
                                <th>Month</th>
                                <th>Pass Type</th>
                                <th>Issue Date</th>
                                <th>Approved</th>
  
                            </tr>
                            </thread>
                            <tbody>
                            <?php
                            session_start();
                            $con=mysqli_connect('localhost','root','');
                            mysqli_select_db($con,'tbepsdb');

                            $s2="select * from crtps where scl_clg_id=$_SESSION[id]";
                            $sque=mysqli_query($con,$s2);
                            $snum=mysqli_num_rows($sque);
                            

                            if($snum==1){
                                $sel="select * from crtps where scl_clg_id=$_SESSION[id] && approved='yes'";
                                $query=mysqli_query($con,$sel);

                            while($row=mysqli_fetch_assoc($query)){
                                $srno=$row['srno'];
                                 $fullnm=$row['full_name'];
                                 $age=$row['age'];
                                 $gender=$row['gender'];
                                 $address=$row['address'];
                                 $year=$row['year'];
                                 $idtype=$row['id_type'];
                                 $idno=$row['id_no'];
                                 $fromplc=$row['from_place'];
                                 $toplc=$row['to_place'];
                                 $month=$row['month'];
                                 $pstype=$row['pass_type'];
                                 $idate=$row['issue_date'];
                                 $approved=$row['approved'];
                                echo'<tr>
                                <td>'.$srno.'</td>
                                <td>'.$fullnm.'</td>
                                <td>'.$age.'</td>
                                <td>'.$gender.'</td>
                                <td>'.$address.'</td>
                                <td>'.$year.'</td>
                                <td>'.$idtype.'</td>
                                <td>'.$idno.'</td>
                                <td>'.$fromplc.'</td>
                                <td>'.$toplc.'</td>
                                <td>'.$month.'</td>
                                <td>'.$pstype.'</td>
                                <td>'.$idate.'</td>
                                <td>'.$approved.'</td>
                                </tr>';
                            }
                            
                            ?>
                                
                            <?php } ?>
                       
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
        <div class="wrapper">
            <div class="navbar">
                <h1 class="til-1"><i class="fa-solid fa-bus"></i> TBEPS</h1>
                <div class="profile_wrap">
                    <div class="profile_img">
                        <img src="img/806962_user_user.png">
                    </div>
                    <div class="profile_info">
                        <div class="name">Chikhli College</div>
                        <p class="role">College</p>
                    </div>
                </div>
                <br><br>
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
                    <br><br><br><br><br><br>
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
    </body>
</html>