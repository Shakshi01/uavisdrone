<?php
include_once('./../connect.php');

// Check if the form has been submitted
if (isset($_POST['add_to_cart'])) {
    // Get the item name from the form
    $itemID = $_POST['itemID'];
    $itemName = $_POST['itemName'];
    $Price = $_POST['Price'];
    $Quantity = $_POST['Quantity'];

    // Check if the item already exists in the database
    $existingItemQuery = "SELECT * FROM `cart` WHERE `itemID` = '$itemID'";
    $existingItemResult = mysqli_query($conn, $existingItemQuery);
    if (mysqli_num_rows($existingItemResult) > 0) {
        // Item already exists, update the quantity
        $existingItemData = mysqli_fetch_assoc($existingItemResult);
        $existingQuantity = $existingItemData['Quantity'];
        $updatedQuantity = $existingQuantity + $Quantity;

        $updateQuery = "UPDATE `cart` SET `Quantity` = '$updatedQuantity' WHERE `itemID` = '$itemID'";
        if (mysqli_query($conn, $updateQuery)) {
            echo "Item quantity updated successfully.";
            // Refresh the cart page after a short delay
        	echo '<script>
                setTimeout(function() {
                    window.location.href = "products.html";
                }, 1); // Delay in milliseconds
              </script>';
        } else {
            echo "Error updating item quantity: " . mysqli_error($conn);
        }
    } else {
        // Item does not exist, create a new entry
        $insertQuery = "INSERT INTO `cart` (`itemID`, `itemName`, `Price`, `Quantity`) VALUES ('$itemID','$itemName','$Price','$Quantity')";
        if (mysqli_query($conn, $insertQuery)) {
            echo "Item added to cart successfully.";
            // Refresh the cart page after a short delay
        	echo '<script>
                setTimeout(function() {
                    window.location.href = "products.html";
                }, 1); // Delay in milliseconds
              </script>';
        } else {
            echo "Error adding item to cart: " . mysqli_error($conn);
        }
    }
}
?>
