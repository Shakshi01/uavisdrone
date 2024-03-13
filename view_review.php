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

    table {
      width: 100%;
      margin-bottom: 20px;
      border-collapse: collapse;
    }

    table, th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
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
            <li><a href="https://uavisdrone.com/review_marketplace.php" data-after="Review">Reviews</a></li>
            <li><a href="https://uavisdrone.com" data-after="Contact">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- Review-->
  <div class="container">
    <h1 class="section-title">Reviews</h1>
    <div id="reviewList">
      <!-- Reviews will be loaded here dynamically -->
    </div>
  </div>

  <script>
    // Function to fetch and display products
    function fetchReview() {
      $.ajax({
        url: 'get_review.php',
        type: 'GET',
        success: function(response) {
          $('#reviewList').html(response);
        },
        error: function(xhr, status, error) {
          console.error('Error:', error);
        }
      });
    }
    $(document).ready(fetchReview);
  </script>

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

