<?php
include_once('./../connect.php');

// Retrieve cart items from the database
$sql = "SELECT itemName, Price, SUM(Quantity) AS TotalQuantity FROM `cart` GROUP BY itemName";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <title>Cart</title>
  <style>
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #f2f2f2;
      margin-bottom: 20px;
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

    .total-table {
      margin-top: 20px;
    }

    .total-table th,
    .total-table td {
      padding: 8px;
    }

    .total-table th {
      text-align: right;
    }

    .pay-button button {
      padding: 6px 20px; /* Adjust the padding values as needed */
      font-size: 16px; /* Adjust the font size as needed */
    }
    
    /* Payment form styles */
    .payment-form {
      max-width: 400px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      background-color: #f2f2f2;
    }
    .payment-form input[type="text"],
    .payment-form input[type="number"],
    .payment-form input[type="submit"] {
      display: block;
      width: 100%;
      margin-bottom: 10px;
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    .payment-form input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }
    .payment-form input[type="submit"]:hover {
      background-color: #45a049;
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
    <h1 class="section-title">C<span>a</span>rt</h1>
    <?php
    if (mysqli_num_rows($result) > 0) {
      ?>
      <table>
        <tr>
          <th>Item Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total Cost</th>
          <th>Action</th>
        </tr>
        <?php
        $totalCost = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          $itemName = $row['itemName'];
          $price = $row['Price'];
          $quantity = $row['TotalQuantity'];
          $totalItemCost = $price * $quantity;
          $totalCost += $totalItemCost;
          ?>
          <tr>
            <td><?php echo $itemName; ?></td>
            <td><?php echo '$' . $price; ?></td>
            <td>
              <form method="POST" action="update_quantity.php">
                <input type="hidden" name="itemName" value="<?php echo $itemName; ?>">
                <input type="number" name="quantity" min="1" value="<?php echo $quantity; ?>">
                <input type="submit" value="Update">
              </form>
            </td>
            <td><?php echo '$' . $totalItemCost; ?></td>
            <td>
              <form method="POST" action="delete_item.php">
                <input type="hidden" name="itemName" value="<?php echo $itemName; ?>">
                <input type="submit" value="Delete">
              </form>
            </td>
          </tr>
          <?php
        }
        ?>
      </table>

      <table class="total-table">
        <tr>
          <th colspan="3">Total Cost of All Items:</th>
          <td><?php echo '$' . $totalCost; ?></td>
        </tr>
      </table>

      <div class="pay-button">
        <a href="payment_form.php">
          <button type="button">Pay</button>
        </a>
      </div>

      <?php
    } else {
      echo "No items in the cart.";
    }
    ?>
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
      <p>Copyright © 2023 SkyWingsDroneRentals. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->

  <script>
    function pay() {
      alert("Payment processed successfully!");
      // Additional payment processing logic can be added here
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script>
    // Get the current URL
    var currentURL = window.location.href;
    console.log(currentURL);
    $.ajax({
      url: '../save_history.php',
      type: 'POST',
      data: {
        action: 'callFunction',
        url: currentURL
      },
      success: function(response) {
        // Handle the response from the PHP script
        console.log('Result:', response);
      },
      error: function(xhr, status, error) {
        // Handle the error
        console.error('Error:', error);
      }
    });
  </script>
</body>

</html>
