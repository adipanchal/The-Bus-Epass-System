<?php
include'connect.php';   
    if(isset($_GET['discardid'])){
        $srno=$_GET['discardid'];
        $sel="delete from crtps where srno=$srno";
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