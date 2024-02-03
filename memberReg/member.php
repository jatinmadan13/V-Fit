<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
      $_fristname=$_POST['fname'];
      $_lastname=$_POST['lname'];
      $_username=$_POST['uname'];
      $_password=$_POST['pword'];
      $_mobile_number=$_POST['contact'];
      $_email=$_POST['email'];
      $_age=$_POST['Age']; 
      $_gender=$_POST['Gender'];
      $conn = mysqli_connect("localhost", "root", "","trainers");
      $sql = "INSERT INTO `member` (`First Name`, `Last Name`, `User Name`, `Password`, `Email`, `Contact`, `Gender`, `Age`) VALUES ('$_fristname', '$_lastname', '$_username', '$_password', '$_email', '$_mobile_number', '$_gender', '$_age')";
      $result = mysqli_query($conn, $sql);
      if($result){
                    echo "The record has been inserted successfully successfully!<br>";
                }
                else{
                    echo "The error is:". mysqli_error($conn);
                }
            }
?>