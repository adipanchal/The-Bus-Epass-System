<?php
include 'connect.php';   
session_start();
    if(isset($_GET['updateid'])){
        $srno=$_GET['updateid'];
        $sel="update crtps set approved='yes' where srno=$srno";
        $query=mysqli_query($con,$sel);
        if($query){
            header('location:pen-aprvl.php');
            //echo"<script>alert('Discard Success !')</script>";
        }
        else{
            die(mysqli_error($con));
        }
        
        
    }

?>