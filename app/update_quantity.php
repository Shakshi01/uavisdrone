<?php
include_once('./../connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted form data
    $itemName = $_POST['itemName'];
    $newQuantity = $_POST['quantity'];

    // Update the quantity in the database
    $sql = "UPDATE `cart` SET `Quantity` = '$newQuantity' WHERE `itemName` = '$itemName'";
    if (mysqli_query($conn, $sql)) {
        echo "Quantity updated successfully.";
      	// Refresh the cart page after a short delay
        echo '<script>
                setTimeout(function() {
                    window.location.href = "cart.php";
                }, 1); // Delay in milliseconds
              </script>';
    } else {
        echo "Error updating quantity: " . mysqli_error($conn);
    }
}
?>
