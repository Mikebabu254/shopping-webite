<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "shopping_website";
    $conn= mysqli_connect($db_server,$db_user,$db_password,$db_name);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect user input
        $username = $_POST["username"];
        $email = $_POST["email"];
        $dob = $_POST["date"];
        $password = $_POST["password"];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $gender = $_POST["gender"];

        
        // Insert data into the database
        $sql = "INSERT INTO user (username, email,dob,password,typeOfUser,gender) VALUES ('$username','$email','$dob','$hashedPassword','general','$gender')";
        
        if ($conn->query($sql) === TRUE) {
            echo 'alert("registered successful")';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }

    // Close the connection
    $conn->close();
?>