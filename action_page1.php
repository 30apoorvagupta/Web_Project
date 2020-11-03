<?php
$email = $_POST['email'];
$password = $_POST['psw'];
$name = $_POST['name'];
echo print_r($_POST,true);
$con=mysqli_connect("localhost","root","","blog");

    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $sql = "INSERT INTO user_details (name, email, password) VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["psw"]."')";
if(mysqli_query($con, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
  