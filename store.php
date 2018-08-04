<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwtproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo $_GET["name"];
echo "asdasd";

$name = $_GET["name"];
$usn = $_GET["usn"];;
$phone = $_GET["phone"];
$address = $_GET["address"];
$email = $_GET["email"];
$tenth = $_GET["tenth"];
$twelth = $_GET["twelth"];
$engg = $_GET["engg"];
$skills = $_GET["skills"];
$cert = $_GET["cert"];
$achei = $_GET["achei"];


$sql = "INSERT INTO studentresume (Name, USN, PhoneNo, Address, Email, 10thMarks, 12thMarks, EnggMarks, Skills, CertCourses, Achievements)
VALUES ('$name', '$usn', '$phone', '$address', '$email', '$tenth', '$twelth', '$engg', '$skills', '$cert', '$achei')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


echo "success";
$conn->close();
?>