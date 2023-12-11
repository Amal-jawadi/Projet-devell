<?php
    if (isset($_POST) && $_POST){
        include_once("db_connect.php");

        $sql = "INSERT INTO `contact` (`full_name`, `email`, `message`) 
        VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['message'] . "');";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recap</title>
</head>
<body>
    <h1>Page contact</h1>
    <?php include("log in.php") ?>

    <form action="/recap/contact.php" method="post">
        <label for="name">Full Name</label>
        <input id="name" name="name" type="text"/>
        <br/>

        <label for="email">Email</label>
        <input id="email" type="email" name="email">
        <br/>

        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br/>

        <input type="submit" value="submit">
    </form>
</body>
</html>