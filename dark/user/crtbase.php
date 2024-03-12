<?php
//Create Pass Form Fields

session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'tbepsdb');

//Input Fields
$fullnm=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['address'];

//Profile Photo Upload

$file=$_FILES['pro_img'];
$file_name=$file['name'];
$file_tmp=$file['tmp_name'];

$fileext=explode('.',$file_name);
$filecheck=strtolower(end($fileext));
$fileextstored=array('png','jpg','jpeg');

//Others

$year=$_POST['year'];
$scid=$_POST['scid'];
$idtype=$_POST['idtp'];
$idno=$_POST['idno'];

//ID image upload

$idimg=$_FILES['idimg'];
$file2_name=$idimg['name'];
$file2_tmp=$idimg['tmp_name'];

$fileext=explode('.',$file2_name);
$filecheck=strtolower(end($fileext));
$fileextstored=array('png','jpg','jpeg');

//bonofide upload

$bonoimg=$_FILES['bimg'];
$file3_name=$bonoimg['name'];
$file3_tmp=$bonoimg['tmp_name'];

$fileext=explode('.',$file3_name);
$filecheck=strtolower(end($fileext));
$fileextstored=array('png','jpg','jpeg');

//others

$fromplc=$_POST['fplc'];
$toplc=$_POST['tplc'];
$month=$_POST['mon'];
$pstype=$_POST['pstp'];

if(isset($_POST['sbmt-btn']) || in_array($filecheck,$fileextstored)){

    //for profile img
    $destinationfile1='uploads/'.$file_name;
    move_uploaded_file($file_tmp,$destinationfile1);
    
    //for id img
    $destinationfile2='uploads/'.$file2_name;
    move_uploaded_file($file2_tmp,$destinationfile2);

    //for bonofide img
    $destinationfile3='uploads/'.$file3_name;
    move_uploaded_file($file3_tmp,$destinationfile3);

    //query
    $sql="select * from crtps where id_no='$idno'";
    $sqlresult=mysqli_query($con,$sql);
    $present=mysqli_num_rows($sqlresult);
    if($present>0){
        echo "<script>alert('This Id NO. is Already Existed !')</script>";
    
}
else{
    $reg="insert into crtps(full_name,age,gender,address,profile_img,year,scl_clg_id,id_type,id_no,id_img,bonofide_img,from_place,to_place,month,pass_type) 
    values ('$fullnm','$age','$gender','$address','$destinationfile1','$year','$scid','$idtype','$idno','$destinationfile2','$destinationfile3','$fromplc','$toplc','$month','$pstype')";
    mysqli_query($con,$reg);
    
    echo"<script>alert('Your Form Sent Successfully! We Will Notify You on Your Dashboard When Form is Approved..')</script>";
}

    
    

}
else{
echo"<script>alert('Something Went Wrong!')</script>";
}
?>

 