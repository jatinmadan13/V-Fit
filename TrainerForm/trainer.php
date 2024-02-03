<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
    $_fullname=$_POST['name'];
    $_age=$_POST['DOB']; 
    $_email=$_POST['email'];
    $_mobile_number=$_POST['number'];
    $_gender=$_POST['Gender'];
    $_username=$_POST['uname'];
    $_password=$_POST['pword'];
    $_address=$_POST['adress'];
    $_state=$_POST['state'];
    $_district=$_POST['district'];
    $_experience=$_POST['experience'];
    $_mode=$_POST['training'];
    $_abturself=$_POST['about'];
    $conn = mysqli_connect("localhost", "root", "","trainers");
    $sql = "INSERT INTO `trainersdetails` (`Name`, `DOB`, `email`, `number`, `Gender`, `Username`, `Password`, `address`, `state`, `Distric`, `Experience`, `Training`, `About`) 
    VALUES ('$_fullname', '$_age', '$_email', '$_mobile_number', '$_gender ', ' $_username', '$_password', '$_address', '$_state', '$_district', '$_experience', '$_mode', '$_abturself');";
    $result = mysqli_query($conn, $sql);
    if($result){
                  echo "The record has been inserted successfully successfully!<br>";
              }
              else{
                  echo "The error is:". mysqli_error($conn);
              }
          }
?>