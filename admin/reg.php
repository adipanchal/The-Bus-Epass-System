<?php
session_start();
//connection
include 'connect.php';

//from input fields
$username=$_POST['username'];
$password=$_POST['password'];

//Query to check username exists or not
$s="select * from adreg where username='$username' && password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
    echo"<script>alert('Wellcome Pro')</script>";
    header('location:admin_pg.php');
}
else{
    echo"<script>alert('Look Like You Are Not Admin!')</script>";
}

?>

 