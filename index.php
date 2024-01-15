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


    <form class="login_form" id="login_form">
        <h1>login</h1><br>
        username<br>
        <input type="text" name="username" id="username"><br>
        password<br>
        <input type="password" name="password" id="password"><br>

        <input type="submit" value="submit" id="submit">
    </form>

    <form class="register_form" id="register_form">
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
        <input type="date" name="date" id="dateReg"><br>

        <input type="submit" value="submit" id="submitReg"><br><br>
        
    </form>
    <script src="js/script.js" defer></script>
</body>
</html>