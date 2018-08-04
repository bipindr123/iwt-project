<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$firstname = $_GET["firstname"];
$usn = $_GET["usn"];;
$branch = $_GET["branch"];
$companyname = $_GET["companyname"];
$package = $_GET["package"];



$sql = "INSERT INTO admin (fname, usn, branch, cname, package) 
VALUES ('$firstname','$usn','$branch','$companyname','$package')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


echo "success";
$conn->close();
?>