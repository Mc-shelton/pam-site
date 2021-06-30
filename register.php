<?php
// connecting to the database
session_start();

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'pam_database';



    $db_con = new mysqli($db_host, $db_user, $db_password, $db_name );
    mysqli_set_charset($db_con, 'utf8');

    if($db_con){
        print 'database connected successfuly';
    }else{
        die('connection error');

    }



$First_Name = ucfirst($_POST['First_Name']);
$Last_Name = ucfirst($_POST['Last_Name']);
$telephone = $_POST['telephone'];
$res_presnt = $_POST['res_presnt'];
$res_perm = $_POST['res_perm'];
$institution = $_POST['institution'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$email = $_POST['email'];
$date_OB = $_POST['DOB'];
$mar_status = $_POST['mar_status'];
$student = $_POST['student'];
$stud_inst = $_POST['stud_inst'];
$stud_level = $_POST['stud_level'];


$hour_ofDay = date ('H')+1;

if($hour_ofDay<12){
    $time_ofDay = 'lovely morning';
}
elseif($hour_ofDay<16){
    $time_ofDay = 'good afernoon';
}
elseif($hour_ofDay<17){
    $time_ofDay = 'good evening';
}
elseif($hour_ofDay<24){
    $time_ofDay = 'blessed night';
}

$insert_reg1 = "INSERT INTO student (First_Name, Second_Name, Phone_Number,
Email_Address,institution,gender,date_OB,mar_status,res_presnt, res_perm,
nationality,student, stud_inst, stud_level)
VALUE ('$First_Name','$Last_Name','$telephone','$email','$institution'
,'$gender','$date_OB','$mar_status','$res_presnt','$res_perm','$nationality'
,'$student','$stud_inst','$stud_level')";

$uploadRegData = mysqli_query($db_con,$insert_reg1);

if($uploadRegData){
    $_SESSION['status'] = 'Dear ' .$First_Name.' '.$Last_Name.',<br>' .'Your form 
    has been uploaded successfuly.'.'<br><br>'.'You will recieve an email within 24 hours to update you on 
    your application process.'.'<br><br>'.'If application is successful, The email will entail your allocated admission number and your student login details.'
    .'<br><br>'.'Have a '.$time_ofDay ;
    header("location:index.php");

}else{
    $_SESSION['status'] = 'an error occured';
    header("location:index.php");

}