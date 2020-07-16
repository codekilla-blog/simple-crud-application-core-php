<?php
include 'connection.php';
$sql = "SELECT * FROM `users` ";
$result = mysqli_query($conn, $sql);
if ($result) {
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php
        $count = count($data);
        for ($i = 0; $i < $count; $i++) { ?>
            <tr>
                <td><?php echo $data[$i]['id']; ?> </td>
                <td><?php echo $data[$i]['username']; ?> </td>
                <td><?php echo $data[$i]['password']; ?> </td>
                <td>
                    <a href="edit.php?id=<?php echo $data[$i]['id']; ?>">
                        Edit
                    </a>
                    <a href="delete.php?id=<?php echo $data[$i]['id']; ?>">
                        Delete
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
<?php } ?>