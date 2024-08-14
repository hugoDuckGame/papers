<?php 
include "../vars.php";

// Create connection
$conn = new mysqli($servername, $username, $password, 'papers');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT subId, name, fName, lName FROM `users` WHERE `name`='{$_GET['name']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if($row['name'] == $_GET['name'] && $row['subId'] == $_GET['id']) {
        $tempId = rand(1000, 9999);
        $id = $tempId;
        $fname = $row['fName'];
        $lname = $row['lName'];
        $isLogged = true;
    }
  }
}

if($isLogged) {
    $sql = "UPDATE `users` SET `tempId` = '{$tempId}' WHERE `users`.`name` = '{$_GET['name']}'";
    $result = $conn->query($sql);
}

$conn->close();

echo "<script>document.location.replace('session.php?id={$tempId}&fname={$fname}&lname={$lname}');</script>";


?>