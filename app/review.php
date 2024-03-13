<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <title>Review Form</title>

  <!-- Review form styles -->
  <style>
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .review-form {
      max-width: 600px;
      margin: 20px auto;
      padding: 40px;
      border: 1px solid #ccc;
      background-color: #f2f2f2;
      text-align: center;
    }

    .review-form h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .review-form input[type="text"],
    .review-form textarea,
    .review-form input[type="submit"] {
      display: block;
      width: 100%;
      margin-bottom: 10px;
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    .review-form input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }
    .review-form input[type="submit"]:hover {
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
  <h1 class="section-title">Review Form</h1>

  <div class="review-form">
    <form method="POST" action="process_review.php">
      <h2>Leave Your Review</h2>
      <input type="text" name="review_title" placeholder="Review Title" required>
      <textarea name="review_text" placeholder="Write your review here" required></textarea>
      <h2>Rate Us</h2>
      <div class="rating">
        <input type="radio" id="star5" name="rating" value="5"><label for="star5" title="5 stars">5 stars</label>
        <input type="radio" id="star4" name="rating" value="4"><label for="star4" title="4 stars">4 stars</label>
        <input type="radio" id="star3" name="rating" value="3"><label for="star3" title="3 stars">3 stars</label>
        <input type="radio" id="star2" name="rating" value="2"><label for="star2" title="2 stars">2 stars</label>
        <input type="radio" id="star1" name="rating" value="1"><label for="star1" title="1 star">1 star</label>
      </div>
      <input type="submit" value="Submit Review">
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

