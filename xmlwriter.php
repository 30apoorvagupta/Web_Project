<?php
$con=mysqli_connect("localhost","root","","blog");

    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

$sql = "SELECT * FROM Users";
$res = mysqli_query($con, $sql);
if (!$res) {
    die("Invalid query: " . mysqli_error());
  }

$xml = new DOMDocument("1.0");
$xml->formatOutput= true;
$users = $xml->createElement("Top_Bloggers");
$xml->appendChild($users);
while($row = mysqli_fetch_array($res)){
    $user = $xml->createElement("username");
    $users->appendChild($user);
    $name = $xml->createElement("name",$row['Name']);
    $user->appendChild($name);
    $username = $xml->createElement("username",$row['username']);
    $user->appendChild($username);
    $email = $xml->createElement("email",$row['Email']);
    $user->appendChild($email);
    $number = $xml->createElement("number_of_blogs",$row['Blogs']);
    $user->appendChild($number);
}

echo "<xmp>".$xml->saveXML()."</xmp>";

$xml->save("new.xml");
