<?php
session_start();
include_once('./../connect.php');

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the payment details
    $cardholderName = $_POST['cardholder_name'];
    $cardNumber = $_POST['card_number'];
    $expiryMonth = $_POST['expiry_month'];
    $expiryYear = $_POST['expiry_year'];
    $cvv = $_POST['cvv'];

    // Process the payment

    // Retrieve the cart items from the database
    $sql = "SELECT itemName, Price, Quantity FROM `cart`";
    $result = mysqli_query($conn, $sql);

    // Display the list of items with a success check mark column
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  	<title>Payment Processing</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f2f2f2;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .checkmark {
            color: green;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <section id="header">
        <div class="header container1">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <h1><span>Sky</span> Wings<span> Drone</span> Rentals</h1>
                    </a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="https://uavisdrone.com/app/index.html" data-after="Home">Home</a></li>
                        <li><a href="https://uavisdrone.com/app/services.html" data-after="Service">Services</a></li>
                        <!--<li><a href="https://uavisdrone.com/app/projects.html" data-after="Projects">Applications</a></li>-->
                        <li><a href="https://uavisdrone.com/app/products.html" data-after="About">Products</a></li>
                        <li><a href="https://uavisdrone.com/app/contacts.html" data-after="Contact">Contact</a></li>
                        <li><a href="https://uavisdrone.com/app/cart.php" class="cart-button"><img src="./../img/shopping-cart-icon.jpg" alt="Cart"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <div class="container">
    <div class="payment-processed">
        <h1 class="section-title">Payment Processed</h1>
        <div class="payment-table">
            <table>
                <tr>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Success</th>
                </tr>

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $itemName = $row['itemName'];
                    $quantity = $row['Quantity'];

                    // Perform the payment processing logic here

                    // Assuming payment is successful, display a check mark
                    $successCheckMark = '<span class="checkmark">&#10004;</span>';

                    echo '<tr>';
                    echo '<td>' . $itemName . '</td>';
                    echo '<td>' . $quantity . '</td>';
                    echo '<td>' . $successCheckMark . '</td>';
                    echo '</tr>';
                }
  				// Delete all entries from the cart table
                $sqlDelete = "DELETE FROM `cart`";
                mysqli_query($conn, $sqlDelete);
                ?>
            </table>
        </div>
    </div>
</div>


<!-- Footer -->
<section id="footer">
    <div class="footer container">
        <div class="brand">
            <h1><span>Sky</span> Wings<span> Drone</span> Rentals</h1>
        </div>
        <h2>Your Complete Web Solution</h2>
        <div class="social-icon">
            <div class="social-item">
                <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
            </div>
            <div class="social-item">
                <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
            </div>
            <div class="social-item">
                <a href="#"><i class="fab fa-twitter fa-4x"></i></a>
            </div>
            <div class="social-item">
                <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
            </div>
        </div>
        <p>&copy; 2023 Sky Wings Drone Rentals. All rights reserved.</p>
    </div>
</section>
<!-- End Footer -->
</body>

</html>

<?php
} else {
    // Redirect to the payment form if the form was not submitted
    header("Location: payment_form.php");
    exit();
}
?>

