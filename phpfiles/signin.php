<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];

$fullname="$fname $lname";


if($password !== $rpassword){
    echo("Password Doesn't Match , Re-type your password");
}
else{
echo("Sign in successfully $fullname !");
addinfo();
};

function addinfo() {
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

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];
$fullname="$fname $lname";


// Insert data into database
$sql = "INSERT INTO users (Full_name, username, password) VALUES ('$fullname', '$username', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close MySQL connection
mysqli_close($conn);

  }

// echo("$fname $lname $username $password $rpassword");

?>