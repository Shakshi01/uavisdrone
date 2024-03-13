<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <title>Payment Form</title>
  <!-- Payment form styles -->
  <style>
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .payment-form {
      max-width: 600px;
      margin: 20px auto;
      padding: 40px;
      border: 1px solid #ccc;
      background-color: #f2f2f2;
      text-align: center;
    }

    .payment-form h2 {
      font-size: 24px;
      margin-bottom: 20px;
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
  <h1 class="section-title">Payment Form</h1>

  <div class="payment-form">
    <form method="POST" action="process_payment.php">
      <h2>Enter Credit Card Details</h2>
      <input type="text" name="cardholder_name" placeholder="Cardholder Name" required>
      <input type="text" name="card_number" placeholder="Card Number" required>
      <input type="number" name="expiry_month" placeholder="Expiry Month" min="1" max="12" required>
      <input type="number" name="expiry_year" placeholder="Expiry Year" min="2023" max="2099" required>
      <input type="text" name="cvv" placeholder="CVV" required>
      <input type="submit" value="Submit Payment">
    </form>
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
      <p>Copyright © 2023 SkyWingsDroneRentals. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->

  <script src="./app.js"></script>
</body>

</html>

