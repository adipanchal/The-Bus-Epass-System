<?php
session_start();
//connection
include 'connect.php';

//from input fields
$fullnm=$_POST['fullname'];
$scnm=$_POST['scnm'];
$scid=$_POST['scid'];
$course=$_POST['course'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

//Query to check username exists or not
$s="select * from usereg where username='$username'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
 
//Query to check scid exists or not
$sc="select * from screg where scid='$scid'";
$scresult=mysqli_query($con,$sc);
$scnum=mysqli_num_rows($scresult);

if($scnum==1){
    if($num==1){
        echo"<script>alert('Username Already Taken!')</script>";
    }
    else{
        $reg="insert into usereg(fullname,scl_clg_nm,scid,course,username,email,password) values ('$fullnm','$scnm','$scid','$course','$username','$email','$password')";
        mysqli_query($con,$reg);

        echo"<script>alert('Registration completed')</script>";
        
        //for fetch primary id
        $primaryid="select id from usereg where username='$username'";
        $primaryidque=mysqli_query($con,$primaryid);
        while($row=mysqli_fetch_assoc($primaryidque))
        $id=$row['id'];

        $_SESSION['fullname']=$fullnm;//declare fullName session
        $_SESSION['scid']=$scid;//declare scid session
        $_SESSION['id']=$id;//declare id session
        $_SESSION['username']=$username;//declare username sesstion
        header('location:user_log1.php');
    }
}
else{
    echo"<script>alert('This School/College Id Doesnot Exist!')</script>";
}

?>

 