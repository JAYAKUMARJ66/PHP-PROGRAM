<?php
include ('db.php');
?>
<?php
if (isset($_POST['submit']))
     {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

    $sql = "INSERT INTO feeddata (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($con, $sql))
          {
        echo ('<script>alert("Feedback submitted successfully!")</script>');
    } else {
        echo "Error: " ;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
</head>
<body>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="submit">
    
</body>
</html>