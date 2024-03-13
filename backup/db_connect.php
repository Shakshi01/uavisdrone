<?php
  $host_name = 'db5012368746.hosting-data.io';
  $database = 'dbs10402157';
  $user_name = 'dbu826496';
  $password = '<Enter your password here.>';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
  } else {
    echo '<p>Connection to MySQL server successfully established.</p>';
  }
?>