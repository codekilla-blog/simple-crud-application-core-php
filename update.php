<?php
include 'connection.php';
$id = $_REQUEST['id'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$sql = "UPDATE `users` SET `username`='$username',`password`='$password' 
         WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "record updated";
} else {
    echo  "something wrong";
}
