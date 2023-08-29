
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minhaj";
$name = $_POST['name'];
$id = $_POST['id'];
$book_return = $_POST['books'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "UPDATE users SET name = '$name', books = '$book_return' WHERE id = $id;  ";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  header('location: list.php');

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
