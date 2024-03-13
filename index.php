<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
    function statusChangeCallback(response) {
      // This function needs to be implemented by you. It should handle different response statuses.
      // For example, if the person is logged into Facebook ('connected'), you might redirect them to another part of your site.
      console.log(response);
    }

    function checkLoginState() {
      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });
    }

    window.fbAsyncInit = function() {
      FB.init({
        appId: '241743651833071',
        cookie: true,
        xfbml: true,
        version: 'v16.0'
      });

      FB.AppEvents.logPageView();

      // Check the initial login status when the page loads
      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });
    };
  </script>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

</head>

<body>


  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="login.png" class="img-fluid" alt="Phone image" height="300px" width="600px">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form action="login.php" method="post">
            <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3">Login</p>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13"> <i class="bi bi-person-circle"></i> Username</label>
              <input type="email" id="form1Example13" class="form-control form-control-lg py-3" name="username" autocomplete="off" placeholder="enter your e-mail" style="border-radius:25px ;" required />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23"><i class="bi bi-chat-left-dots-fill"></i> Password</label>
              <input type="password" id="form1Example23" class="form-control form-control-lg py-3" name="password" autocomplete="off" placeholder="enter your password" style="border-radius:25px ;" required />
            </div>
          


            <!-- Submit button -->
            <!-- <button type="submit" class="btn btn-primary btn-lg">Login in</button> -->
            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
              <input type="submit" value="Sign in" name="login" class="btn btn-warning btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600;" />
            </div>
            
            <!-- Facebook login button -->
            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
              <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="true" onlogin="checkLoginState();"></div>
            </div>

          </form><br>
          <p align="center">I don't have any account <a href="register.php" class="text-warning" style="font-weight:600;text-decoration:none;">Register Here</a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId: '241743651833071',
        cookie: true,
        xfbml: true,
        version: 'v13.0'
      });

      FB.AppEvents.logPageView();

      FB.getLoginStatus(function(response) {
        // Check login status on page load
        if (response.status === 'connected') {
          // User is logged in and authorized
          console.log('Logged in');
        } else {
          // User is not logged in or authorized
          console.log('Not logged in');
        }
      });
    }

    function checkLoginState() {
      FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
          // User is logged in and authorized
          console.log('Logged in');
          // Redirect or perform actions after successful login
          window.location.href = 'https://uavisdrone.com/marketplace.html';
        } else {
          // User is not logged in or authorized
          console.log('Not logged in');
        }
      });
    }
  </script>

</body>

</html>
