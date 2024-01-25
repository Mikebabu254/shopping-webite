<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    
<nav>
    <form action="home.php" method="post">
    <ul>
        <li><input type="submit" name="logout_submit" value="Logout" id="logout_btn"></li>
        <li><button id="add_btn">add item</button></li>
    </ul>
    </form>
    

</nav>

<form class="add_item" id="add_item_form">
    <label for="itemImage">Item Image:</label>
    <input type="file" id="itemImage" accept="image/*" required>
    <br>

    <label for="itemName">Item Name:</label>
    <input type="text" id="itemName" required>
    <br>

    <label for="itemDescription">Item Description:</label>
    <textarea id="itemDescription" rows="4" required></textarea>
    <br>

    <label for="itemPrice">Item Price:</label>
    <input type="number" id="itemPrice" step="1" required>
    <br>

    <input type="submit" value="Add Item">
</form>
    
    <script type="module" src="js/item.js"></script>
</body>
</html>

<?php
    include 'database/db_logout.php';
?>