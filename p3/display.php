<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View data</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>

<?php
$sql = "SELECT * FROM feedback_tdb";
$result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result))  
    {
        ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['message']; ?></td>
        </tr>
        <?php
    }
?>
</table>


<a href="index.php">Back</a>
    
</body>
</html>