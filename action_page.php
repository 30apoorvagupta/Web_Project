<?php
$email = $_POST['username'];
$password = $_POST['password'];

$con=mysqli_connect("localhost","root","","blog");

    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else{
      echo"Successs!!!!!";
    }

  $res = mysqli_query($con, "SELECT * FROM user_login WHERE email = '$email' AND password = '$password'");
  while(!$res){
    die("Invalid query: " . mysqli_error());
  }

  
  
  