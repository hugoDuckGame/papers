<?php 
include "../../vars.php";

// Create connection
$conn = new mysqli($servername, $username, $password, 'htd');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");


$sql = "INSERT INTO `articles`(`title`, `content`, `img`, `author`) VALUES ('{$_GET['title']}', '{$_GET['content']}', '{$_GET['hidName']}', '{$_GET['author']}')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
?>