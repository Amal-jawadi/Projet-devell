
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
