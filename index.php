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


    <form method="post " action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="login_form" id="login_form">
        <h1>login</h1><br>
        username<br>
        <input type="text" name="username_login" id="username"><br>
        password<br>
        <input type="password" name="password_login" id="password"><br>

        <input type="submit" value="login" name="login" id="submit">
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

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $DOB = $_POST["date"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];

        // Validate data (you may want to add more validation)

        if(empty($username) || empty($email)){
            echo "Please enter both username and email.";
        }else{
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            //insert data into the database
            $sql = "INSERT INTO user (username,email,DOB,password,typeOfUser,gender) VALUES ('$username', '$email','$DOB','$hashedPassword','regular','$gender')";

            try{
                if($conn -> query($sql) === TRUE){
                
                    header("Location: home.php");
                    
                    exit();
                    echo '<script>alert("Registered successfully!");</script>';
                }else{
                    echo "Error: inserting data";
                }
            }catch(Exception){
                echo '<script>alert("Registered unsuccessfully!");</script>';
            }
            
        }
    }

    if ($_SERVER ["REQUEST_METHOD"] == "POST"  && isset ($_POST["login"])){
        // Collect user input
        $username_login = $_POST["username_login"];
        $password_login = $_POST["password_login"];

        // Validate data (you may want to add more validation)
        if(empty ($username_login) || empty($password_login)){
            //echo '<script>alert("please enter your username and your password");</script>';
            echo "enter your data";
        }else{
            // Retrieve hashed password from the database
            $sql = "SELECT password FROM users WHERE username = '$username_login'";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $hashedPasswordFromDB = $row["password"];
    
                // Verify the entered password
                if (password_verify($password_login, $hashedPasswordFromDB)) {
                    // Password is correct, redirect to home.php
                    header("Location: home.php");
                    exit();
                } else {
                    echo "Incorrect password.";
                }
            } else {
                echo "User not found.";
            }
        }
    }

    // Close the connection
    $conn->close();
?>