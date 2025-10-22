<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="Username">Username></label>
        <input type="text" name="username" placeholder="Username"><br><br>
        <label for="Password">Password></label>
        <input type="password" name="password" placeholder="password"><br><br>
        <input type="submit" value="Submit">
</form>
</body>
</html>
<?php
$username = $_GET["username"];
$password = $_GET["password"];
echo "$username and $password"
?>