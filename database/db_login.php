<?php

function sanitize_input($data) {
    session_start();

    // Check if the user is already logged in
    if (isset($_SESSION["username"])) {
        // Redirect to the homepage if already logged in
        header("Location: home.php");
        exit();
    }

    if (isset($_GET["logout"]) && $_GET["logout"] == "true") {
        // Display a message prompting the user to enter credentials before accessing the homepage
        echo "To go back to the homepage, please enter your username and password below:";
        
        // Display the login form
        // ... (Your existing login form code)
    }else{
        $db_server = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "shopping_website";
        $conn= mysqli_connect($db_server,$db_user,$db_password,$db_name);

        // Function to sanitize user input
        function sanitize_input($data) {
        global $conn; // Make $conn accessible inside the function
        return mysqli_real_escape_string($conn, htmlspecialchars(trim($data)));
        }

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login_submit"])) {
            // Get the username and password from the form
            $username = sanitize_input($_POST["username"]);
            $password = sanitize_input($_POST["password"]);

            // Use prepared statement to avoid SQL injection
            $query = "SELECT * FROM user WHERE username = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            // If a matching record is found, log in the user
            if ($result->num_rows == 1) {
                $user_data = $result->fetch_assoc();
                $hashed_password = $user_data["password"];

                if (password_verify($password, $hashed_password)) {
                    // Password is correct, log in the user
                    header("Location: home.php");
                    exit();
                } else {
                    // Display an error message if password is incorrect
                    $error_message = "Invalid username or password.";
                    echo "<p style='color: red;'>$error_message</p>";
                }

            } else {
                // Display an error message if credentials are incorrect
                $error_message = "Invalid username or password.";
                echo "<p style='color: red;'>$error_message</p>";
            }
        }

        }

        

?>
