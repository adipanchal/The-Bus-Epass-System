<?php
//Create Pass Form Fields
session_start();
//CONNCECTION
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'tbepsdb');

//PRIMARYKEY ID SESSTION FROM LOG,REG PAGE
$id=$_SESSION['id'];

//INPUT FIELDS
$fullnm=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['address'];

//PROFILE IMG UPLOAD
$file=$_FILES['pro_img'];
$file_name=$file['name'];
$file_tmp=$file['tmp_name'];

$fileext=explode('.',$file_name);
$filecheck=strtolower(end($fileext));
$fileextstored=array('png','jpg','jpeg');

//OTHER
$scid=$_SESSION['scid'];
$year=$_POST['year'];
$idtype=$_POST['idtp'];
$idno=$_POST['idno'];

//ID IMG UPLOAD
$idimg=$_FILES['idimg'];
$file2_name=$idimg['name'];
$file2_tmp=$idimg['tmp_name'];

$fileext=explode('.',$file2_name);
$filecheck=strtolower(end($fileext));
$fileextstored=array('png','jpg','jpeg');

//BONOFIDE UPLOAD
$bonoimg=$_FILES['bimg'];
$file3_name=$bonoimg['name'];
$file3_tmp=$bonoimg['tmp_name'];

$fileext=explode('.',$file3_name);
$filecheck=strtolower(end($fileext));
$fileextstored=array('png','jpg','jpeg');

//OTHER
$fromplc=$_POST['fplc'];
$toplc=$_POST['tplc'];
$month=$_POST['mon'];
$pstype=$_POST['pstp'];

//SELECT MONTH PRO
$todt=date("Y-m-d");
if(isset($_POST['mon'])){
    $selected=$_POST['mon'];

    switch($selected){
        case '1month':
            $endt=date("Y-m-d",strtotime("$todt +1month"));
            break;
        case '3month':
            $endt=date("Y-m-d",strtotime("$todt +3month"));
            break;
        case '6month':
            $endt=date("Y-m-d",strtotime("$todt +6month"));
            break;
    }
   
}

//AFTER SUBMIT-BTN PROCESS
if(isset($_POST['sbmt-btn']) || in_array($filecheck,$fileextstored))
{
    //FOR PROFLE IMG
    $destinationfile1='uploads/profile_img/'.$file_name;
    move_uploaded_file($file_tmp,$destinationfile1);
    
    //FOR ID IMG
    $destinationfile2='uploads/id_img/'.$file2_name;
    move_uploaded_file($file2_tmp,$destinationfile2);

    //FOR BONOFIDE IMG
    $destinationfile3='uploads/bonofide_img/'.$file3_name;
    move_uploaded_file($file3_tmp,$destinationfile3);

    //QUERY TO CHECK IDCARD NO EXISTS OR NOT 
    $sql="select * from crtps where id_no='$idno'";
    $sqlresult=mysqli_query($con,$sql);
    $present=mysqli_num_rows($sqlresult);

    if($present>0){
        //ERROR WHEN ID ALREADY EXISTS
        echo "<script>alert('This Id NO. is Already Existed !')</script>";
    }
    else
    {
        //INSERTING VALUES
        $reg="insert into crtps(user_id,full_name,age,gender,address,profile_img,year,scid,id_type,id_no,id_img,bonofide_img,from_place,to_place,month,pass_type,ending_date) 
        values ('$id','$fullnm','$age','$gender','$address','$destinationfile1','$year','$scid','$idtype','$idno','$destinationfile2','$destinationfile3','$fromplc','$toplc','$month','$pstype','$endt')";
        mysqli_query($con,$reg);

        //SUCCESS MSG
        echo"<script>alert('Your Form Sent Successfully! We Will Notify You on Your Dashboard When Form is Approved..')</script>";
        $_SESSION['idno']=$idno;//ID NO SESSION
    }   
}
else
{
    //IF IMG EXT,NAME NOT MATCH && 
    echo"<script>alert('Something Went Wrong!')</script>";
}
?>

 