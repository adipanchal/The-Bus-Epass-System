<?php

session_start();
//connection
include 'connect.php';

//input fields
$username=$_POST['username'];
$password=$_POST['password'];

//query to check username or password is correct or not
$s="select * from usereg where username='$username' && password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==0){
    echo"<script>alert('UserName Or Password Is Wrong!')</script>";
}
else{
    $_SESSION['fullname'];//name from register page
    $_SESSION['scid'];//scid from register page
    $_SESSION['id'];//primary_id from register page
    header('location:user_pg.php');
    //need msg      
}

?>