<!DOCTYPE html>
<?php
    include 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['phone'];
      
        if($link->connect_error){
            echo "$link->connect_error";
            die("Connection Failed : ". $link->connect_error);
        } else {
          	echo "entering Registration ...";
            $stmt = $link->prepare("insert into user(first_name, last_name, gender, email, password, phone) values(?, ?, ?, ?, ?, ?)");
            echo "1.....";
          	$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
            echo "2 ...";
          	$execval = $stmt->execute();
          	echo "3 ...";
            echo $execval;
          	echo "4 ...";
            echo "Registration successfully...";
            $stmt->close();
            $link->close();
        }
    }
?>

<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="" method="post">
           <!-- <form action="connect.php" method="post">-->
              <div class="form-group">
                <label for="first_name">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="first_name"
                  name="first_name"
                />
              </div>
              <div class="form-group">
                <label for="last_name">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="last_name"
                  name="last_name"
                />
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="phone"
                  name="phone"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
			</form>
          </div>
          <div class="panel-footer text-right">
          </div>
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>
  </body>
</html>