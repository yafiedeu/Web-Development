<?php 
require("inc/db.inc.php"); 
require("inc/functions.inc.php");

echo "<pre>";
print_r($_POST);
echo "</pre>";

$stmt = $pdo->prepare("INSERT INTO `messages` 
  (`name`, `email`, `subject`, `message`) 
  VALUE(:name, :email, :subject, :message) ");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$stmt->bindParam(":name", $name, PDO::PARAM_STR);
$stmt->bindParam(":email", $email, PDO::PARAM_STR);
$stmt->bindParam(":subject", $subject, PDO::PARAM_STR);
$stmt->bindParam(":message", $message, PDO::PARAM_STR);

$stmt->execute();

?>


<?php require("./parts/contact.php"); ?>