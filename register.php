<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <nav>
        <ul>
            <li><a href="index.php"><button id="loginBtn">login</button></a></li>
            <li><a href="register.php"><button>register</button></a></li>
            
        </ul>
    </nav>

    <div class="body">
        <form method="post" action="register.php" class="register_form" id="register_form">
            <h1>register</h1><br>
            username<br>
            <input type="text" name="username" id="usernameReg"  required><br>
            email<br>
            <input type="text" name="email" id="emailReg" required><br>
            password<br>
            <input type="password" name="password" id="passwordReg" required><br>
            confirm password<br>
            <input type="password" name="confirmPassword" id="confirmPassword" required><br>
            DOB<br>
            <input type="date" name="date" id="dateReg" required><br><br>
            <input type="radio" value="male" name="gender" > male
            <input type="radio" value="female" name="gender"> female<br><br>
            

            <input type="submit" value="submit" id="submitReg"><br><br>
            
        </form>
    </div>
    
    <script src="js/script.js" defer></script>
</body>
</html>

<?php

    include 'database/db_register.php';

    
    

?>