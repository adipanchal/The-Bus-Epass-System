<?php
include 'connect.php';   
    if(isset($_GET['updateid'])){
        $id=$_GET['updateid'];
        $sel="update crtps set clg_approved='yes' where user_id=$id";
        $query=mysqli_query($con,$sel);
        if($query){
            header('location:pen-aprvl.php');
            //echo"<script>alert('Approved Success!')</script>";
        }
        else{
            die(mysqli_error($con));
        }   
    }

?>