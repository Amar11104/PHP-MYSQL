<?php
include_once("config.php");
if(isset($_POST['submit'])){

    $name = $_POST ['name'];
    $surname = $_POST ['surname'];
    $email = $_POST ['email'];

    $sql = "INSERT INTO users(name,surname,email) VALUES (:name , :surname, :email)";

    $sqlQuery = $conn->prepare($sql);

    $sqlQuery->bindParam(':name', $name);
    $sqlQuery->bindParam(':surname', $surname);
    $sqlQuery->bindParam(':email', $email);

    $sqlQuery->execute();

    echo"The user was added successfully!";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="Post">
        <input type="text" name="name" placeholder="name"><br>
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="text" name="email" placeholder="email"><br><br>
        <input type="Submit" name="Submit" placeholder="submit"><br><br>
</form>
</body>
</html>