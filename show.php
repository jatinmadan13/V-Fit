<?php
 if(isset($_POST["submitted"])){
    $conn = mysqli_connect("localhost", "root", "","trainers");
    $sql = "SELECT * FROM `trainersdetails`" ;
    $result = mysqli_query($conn, $sql);   
    $row = mysqli_fetch_assoc($result);
    echo $row;
 }
?>