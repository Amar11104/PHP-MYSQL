<?php

	include_once('config.php');	


	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$surname = $_POST['password'];
		$email = $_POST['email'];

		
        $sql = "insert into users (name, password, email) values (:name, :password, :email)";
        $sqlQuery = $conn->prepare($sql);
    
        $sqlQuery->bindParam(':name', $name); 
        $sqlQuery->bindParam(':password', $password); 
        $sqlQuery->bindParam(':email', $email);

        $sqlQuery->execute();

        echo "Data saved successfully ...";
	}
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <a href="dashboard.php">Dashboard</a>
        <form action="add.php" method="POST">
            <input type="text" name="name" placeholder="Name"></br>
            <input type="password" name="password" placeholder="Password"></br>
            <input type="email" name="email" placeholder="Email"></br>
            
        </form>

    </body>
</html>
