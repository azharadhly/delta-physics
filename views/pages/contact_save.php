<?php

require_once __DIR__ . '/../../config.php';

$name = $_POST['name'];
$subject = $_POST['subject'];
$address = $_POST['email'];
$mess = $_POST['mess'];


try {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO contact (name, email, subject,message)
VALUES ('$name','$address','$subject','$mess')";
    $conn->exec($sql);
    echo"<script>
    var result = alert('message sent');
    if (result) {
      window.location.href = 'contact-us.php';
    }
    else{
      window.location.href = 'contact-us.php';
    }
    </script>";
    
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

?>