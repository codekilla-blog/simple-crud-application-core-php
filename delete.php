<?php
include 'connection.php';
$id = $_REQUEST['id'];
$sql = "DELETE FROM `users`WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "record deleted";
} else {
    echo  "something wrong";
}
