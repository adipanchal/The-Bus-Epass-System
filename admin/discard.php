<?php
include 'connect.php';   
    if(isset($_GET['discardid'])){
        $id=$_GET['discardid'];
        $sel="delete from crtps where user_srno=$id";
        $query=mysqli_query($con,$sel);
        if($query){
            header('location:mng-pass.php');
            //echo"<script>alert('Discard Success !')</script>";
        }
        else{
            die(mysqli_error($con));
        }
        
        
    }

?>