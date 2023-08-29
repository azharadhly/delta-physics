<?php
require_once __DIR__ . '../../../../config.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['email'];
$password = $_POST['password'];
$books = $_POST['books'];
$newPassword = password_hash($password, PASSWORD_DEFAULT);


try {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (username, email, password,name,books)
VALUES ('$fname','$address','$newPassword','$lname','$book')";
    // use exec() because no results are returned
    $conn->exec($sql);
    header('location:sign_up.php');
} catch (PDOException $e) { 
    echo "<script>
    var result = alert('email already exists  Tr another!!!');
    if (result) {
        window.location.href = 'sign_up.php';
      }
      else{
        window.location.href = 'sign_up.php';
      }
  </script>";
}
$conn = null;
