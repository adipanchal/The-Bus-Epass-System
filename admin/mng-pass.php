<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/mng-ps.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <title>Adminstrator</title>
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
                <form>
                    <div class="dock">
                    <div class="head-cen">
                            <span><center>Manage Passes</center></span>
                        </div><br><br>
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
                                <th>Aproved By College</th>
                                <th>Action</th>
                            </tr>
                            </thread>
                            <tbody>
                            <?php
                            include 'connect.php';
                            
                            $s1="select * from crtps where clg_approved='yes'";
                            $sque=mysqli_query($con,$s1);
                            $snum=mysqli_num_rows($sque);

                            if($snum>0){
                                $sel="select * from crtps where clg_approved='yes'";
                                $query=mysqli_query($con,$sel);

                            while($row=mysqli_fetch_assoc($query)){
                                $id=$row['user_id'];
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
                                $approved_clg=$row['clg_approved'];
                                $approved_ad=$row['admin_approved'];
                                 
                                echo'<tr>
                                <td>'.$id.'</td>
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
                                <td>'.$approved_clg.'</td>
                                <td>
                                    <div class="action-btn"><br>
                                    <a class="approve" name="approve" href="update.php?updateid='.$id.'">Approve</a><br><br><br>
                                    <a class="discard" name="discard" href="discard.php?discardid='.$id.'">Discard</a>
                                    </div><br>
                                </td>
                                </tr>';
                            }
                          
                            ?>
                                
                            <?php }
                            else
                            {
                                echo'<td>No Approvals Left</td>';
                            }
                            ?>
                       
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            </div>
        </div>
        <div id="sidebar2" class="wrapper">
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