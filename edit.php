<?php include 'connection.php';
$id = $_REQUEST['id'];
$sql = "SELECT * FROM `users` WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>

<body>

    <h2>Edit</h2>
    <form action="update.php" method="post">

        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

        <label for="username">username:</label><br>
        <input type="text" id="username" name="username" value="<?php echo $data['username'] ?>"><br>
        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password" value="<?php echo $data['password'] ?>"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>