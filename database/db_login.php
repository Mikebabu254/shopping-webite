<?php

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
    $query = "SELECT * FROM user WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // If a matching record is found, log in the user
    if ($result->num_rows == 1) {
        // Redirect to home.php
        header("Location: home.php");
        exit();
    } else {
        // Display an error message if credentials are incorrect
        $error_message = "Invalid username or password.";
        echo "<p style='color: red;'>$error_message</p>";
    }
}


?>
