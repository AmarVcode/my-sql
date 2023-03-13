<?php

$username=$_POST['username'];
$password=$_POST['password'];
    // Connect to MySQL
    $host = " sql112.epizy.com ";
    $user = "epiz_33679567";
    $password = "8UYXdwS9jqHkgfR";
    $dbname = "epiz_33679567_userdata";
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$username=$_POST['username'];
$password=$_POST['password'];


$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

// execute the query
$result = mysqli_query($conn, $sql);

// check if any rows returned
if (mysqli_num_rows($result) > 0) {
    // records exist
    echo "Login Succefully";

// redirect to another page
header("Location: ../pages/homepage.html");
exit; // make sure to exit the script after the redirect


} else {
    // records do not exist
    echo "You entered Wrong Credentials !";
}

// Close MySQL connection
mysqli_close($conn);

  

// echo("$fname $lname $username $password $rpassword");

?>



