<?php
$email = $_POST['username'];
$password = $_POST['password'];
echo print_r($_POST,true);
$con=mysqli_connect("localhost","root","","blog");

    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else{
      echo"Successful Connection";
    }

  $res = mysqli_query($con, "SELECT * FROM user_details WHERE email = '$email' AND password = '$password'");
  $count=mysqli_num_rows($res);
  if($count==1){
    echo "Successfully logged in!";
  }

  else {
    echo "<script type='text/javascript'>alert('Wrong Username or Password');
    window.location='login.html';
    </script>";
    }
    
  
  

  
  
  