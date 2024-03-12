<?php
include 'connect.php';   
    if(isset($_GET['updateid'])){
        $id=$_GET['updateid'];
        $sel="update crtps set clg_approved='done',admin_approved='yes' where user_id=$id";
        $query=mysqli_query($con,$sel);
        if($query){
            header('location:mng-pass.php');
            //echo"<script>alert('Approved Success!')</script>";
        }
        else{
            die(mysqli_error($con));
        }   
    }

?>