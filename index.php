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
            <li><a href="register.php"><button>register</button></a></li>
            
        </ul>
    </nav>

    <div class="body">
        
        <form method="post" action="index.php" class="login_form" id="login_form">
            <h1>login</h1><br>
            username<br>
            <input type="text" name="username" id="username_login" required><br>
            password<br>
            <input type="password" name="password" id="password_login" required><br>

            <input type="submit" value="login" name="login_submit" id="submit_login">
        </form>
    </div>
    
        
    </form>
    <script src="js/script.js" defer></script>
</body>
</html>

<?php
    include 'database/db_login.php';
?>