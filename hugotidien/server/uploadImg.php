<?php
include "../../vars.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = $sql = "SELECT AUTO_INCREMENT
        FROM information_schema.TABLES
        WHERE TABLE_SCHEMA = '{$dbname}'
          AND TABLE_NAME = 'articles'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id = $row['AUTO_INCREMENT'];
    $id = (int)$id;
  }
} else {
  echo "0 results";
}

$conn->close();

$uploadDir = '../artImages/';
    $newName = 'i' . $id .".png";
    $uploadFile = $uploadDir . $newName;

    if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadFile)) {
        echo $newName;
    } else {
        echo "Échec de l'upload.";
    }
?>
