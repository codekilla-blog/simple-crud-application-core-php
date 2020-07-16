<?php
include 'connection.php';

 $username = $_REQUEST['username'];
 $password = $_REQUEST['password'];
$fullname = $fname.$lname;
 $sql = "INSERT INTO `users` (`username`,`password`) VALUES
  ('$username','$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "record added";
    }else{
        echo  "something wrong";
    }
