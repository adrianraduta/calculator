<?php
$servername = "j5zntocs2dn6c3fj.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "ispdec3h1kmywx58";
$password = "wffu1yoh6mc2dqy2";
$database = "t2szimexkozly7rg";
$message = "blank";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	$message = "fail";
}
$message = "true";

$sql = "SELECT ID, Nume, Email FROM Senders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - Name: " . $row["Nume"]. " " . $row["Email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
