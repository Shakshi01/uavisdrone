<?php
include_once('connect.php');

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $pass=md5($_POST['password']);

    $sql   ="INSERT INTO `tbl_user`(`name`, `username`, `password`) VALUES ('$name','$username','$pass')";
    $result=mysqli_query($conn,$sql);
    if($result){ 
       echo '<script>
                setTimeout(function() {
                    window.location.href = "index.php";
                }, 1); // Delay in milliseconds
              </script>';
    echo"<script>alert('New User Register Success');</script>";
    }else{
        die(mysqli_error($conn)) ;
    }
   
}
