<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $_username=$_POST['username'];
    $_password=$_POST['password'];
    $conn = mysqli_connect("localhost", "root", "","trainers");
    $sql = "SELECT * FROM `trainersdetails` WHERE `Username` LIKE '$_username'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $num = mysqli_num_rows($result);
    if($num>0){
      if($row["Password"]==$_password){
        // header("http://localhost/project/show.php");
        header('<Location:show/show.html');
        echo"You entered website";
      }
      else{
        echo "You should check the password.";
      }
    }
    else{
      echo "Email is incorrect";
    } 
  }  
?>