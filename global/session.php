<?php session_start();
$_SESSION['id'] = $_GET['id'];
$_SESSION['fName'] = $_GET['fname'];
$_SESSION['lName'] = $_GET['lname'];
echo "<script>document.location.replace('index.php');</script>";
?>