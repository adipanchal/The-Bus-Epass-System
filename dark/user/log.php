<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'tbepsdb');
$name=$_POST['nm'];
$username=$_POST['username'];
$password=$_POST['password'];

$s="select * from usereg where username='$username' && password='$password'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==0){
    echo"<script>alert('UserName Or Password Is Wrong!')</script>";
}
else{
    $_SESSION['fullname']=$name;
    header('location:user_pg.php');
        
}

?>