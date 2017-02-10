
<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";

// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, "rohinicomplex");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>