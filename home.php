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
    <ul>
        <li><button id="logout_btn"><a href="index.html">logout</a></button></li>
        <li><button id="add_btn">add item</button></li>
    </ul>

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