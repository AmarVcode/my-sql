<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <style>
        .table{
            max-width:500px;
            background:black;
            margin:auto;
    border: 1px solid black;
}

td,th{
    font-size:1rem;
    padding:.5em;
            background:white;
    border:1px solid black;

}
    </style>

        <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "userdata";
// create a connection to the database
$conn = mysqli_connect("$host", "$user", "$password", "$dbname");

// check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// query to fetch data from table
$sql = "SELECT * FROM users";

// execute the query
$result = mysqli_query($conn, $sql);

// check if any rows returned
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table class='table'>";
    echo "<tr><th>Full Name</th><th>Username</th><th>Password</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["Full_name"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// close the connection
mysqli_close($conn);
?>



</body>
</html>