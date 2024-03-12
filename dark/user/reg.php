<?php
session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'tbepsdb');

$fullnm=$_POST['fullname'];
$scnm=$_POST['scnm'];
$scid=$_POST['scid'];
$course=$_POST['course'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$s="select * from usereg where username='$username'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

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
    }
}
else{
    echo"<script>alert('This School/College Id Doesnot Exist!')</script>";
}

?>

 