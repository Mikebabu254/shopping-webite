<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <nav>
        <ul>
            <li><button id="login_btn">login</button></li>
            <li><button id="register_btn">register</button></li>
        </ul>
    </nav>


    <form method="post " class="login_form" id="login_form">
        <h1>login</h1><br>
        username<br>
        <input type="text" name="username" id="username"><br>
        password<br>
        <input type="password" name="password" id="password"><br>

        <input type="submit" value="submit" id="submit">
    </form>

    <form method="post" action="index.php" method="post" class="register_form" id="register_form">
        <h1>register</h1><br>
        username<br>
        <input type="text" name="username" id="usernameReg" i ><br>
        email<br>
        <input type="text" name="email" id="emailReg" ><br>
        password<br>
        <input type="password" name="password" d="passwordReg" ><br>
        confirm password<br>
        <input type="password" name="confirmPassword" id="confirmPassword" ><br>
        DOB<br>
        <input type="date" name="date" id="dateReg"><br><br>
        <input type="radio" value="male" name="gender"> male
        <input type="radio" value="female" name="gender"> female<br><br>
        

        <input type="submit" value="submit" id="submitReg"><br><br>
        
    </form>
    <script src="js/script.js" defer></script>
</body>
</html>

<?php

    //include("database.php");
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "shopping_website";
    $conn="";

    $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $DOB = $_POST["date"];
        $password = $_POST["password"];

        // Validate data (you may want to add more validation)

        if(empty($username) || empty($email)){
            echo "Please enter both username and email.";
        }else{
            //insert data into the database
            $sql = "INSERT INTO user (username,email,DOB,password,typeOfUser) VALUES ('$username', '$email','$DOB','$password','regular')";

            if($conn -> query($sql) === TRUE){
                echo "you have been registered successfully";
            }else{
                echo "Error: inserting data";
            }
        }
    }

    // Close the connection
    $conn->close();
?>