<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css">
  <title>Marketplace Website</title>
  <style>
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Your custom CSS styles -->
  <style>
    /* Add red color to the icon */
    .red-icon {
      color: red;
    }
  </style>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container1">
      <div class="nav-bar">
           <div class="nav-list">
    <ul>
      <li><a href="https://uavisdrone.com/marketplace.html"><i class="fas fa-home red-icon"></i></a></li>
    </ul>
    </div>
        <div class="brand">
          <a href="https://uavisdrone.com/marketplace.html">
            <h1><span>Welcome to Market Place</span></h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
            <ul>
            <li><a href="https://uavisdrone.com/top_product.php" data-after="Index">Top Products</a></li>
            <li><a href="https://uavisdrone.com/history.html" data-after="Service">History</a></li>
            <li><a href="https://uavisdrone.com/review_marketplace.php" data-after="Products">Reviews</a></li>
            <li><a href="https://uavisdrone.com" data-after="Contact">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <div class="container">
  <h1 class="section-title">Review Form</h1>

  <div class="review-form">
   <!-- <form method="POST" action="process_review.php"> -->
      <form id="reviewForm" method="POST" action="process_review.php">
      <h2>Leave Your Review</h2>
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="text" name="title" placeholder="Review Title" required>
      <textarea name="review_text" placeholder="Write your review here" required></textarea>
      <h2>Rate Us</h2>
      <div class="rating">
        <input type="radio" id="star5" name="rating" value="5 stars"><label for="star5" title="5 stars">5 stars</label>
        <input type="radio" id="star4" name="rating" value="4 stars"><label for="star4" title="4 stars">4 stars</label>
        <input type="radio" id="star3" name="rating" value="3 stars"><label for="star3" title="3 stars">3 stars</label>
        <input type="radio" id="star2" name="rating" value="2 stars"><label for="star2" title="2 stars">2 stars</label>
        <input type="radio" id="star1" name="rating" value="1 stars"><label for="star1" title="1 star">1 star</label>
      </div>
      <input type="submit" value="Submit Review">
    </form>
    <button onclick="window.location.href='view_review.php'" style="margin-top: 10px;">Go To Reviews</button>
  </div>
</div>
  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
         <h1><span>Welcome to Market Place</span> </h1>
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
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div>
      <p>Copyright © 2023 MarketPlace. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->

</body>

</html>

