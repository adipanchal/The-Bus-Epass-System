<?php
include 'connect.php';

$scid=$_POST['scid'];
$username=$_POST['username'];
$password=$_POST['password'];

$s="select * from screg where username='$username' && password='$password' && scid='$scid'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==0){
    echo"<script>alert('UserName, Password or Id Is Not Match!')</script>";
}
else{
    $_SESSION['scid']=$scid;
    $_SESSION['scnm'];
    header('location:clg_pg.php');
}

?>