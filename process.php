<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rsvp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$attending = $_POST['attending'];
$name = $_POST['name'];
$contactNumber = $_POST['contact_number'];

$sql = "INSERT INTO responses (name, contact_number, attending) VALUES ('$name', '$contactNumber', '$attending')";

if ($conn->query($sql) === TRUE) {
    header("Location: thankyou.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
