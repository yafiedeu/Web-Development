<?php 
require("inc/db.inc.php"); 
require("inc/functions.inc.php");

$stmt = $pdo->prepare("INSERT INTO `messages` 
  (`name`, `email`, `subject`, `message`) 
  VALUE(:name, :email, :subject, :message) ");

$name = "Max";
$email = "max@gmail.com";
$subject = "Nachricht!";
$message = "Das hier ist die gesamte Nachricht";

$stmt->bindParam(":name", $name, PDO::PARAM_STR);
$stmt->bindParam(":email", $email, PDO::PARAM_STR);
$stmt->bindParam(":subject", $subject, PDO::PARAM_STR);
$stmt->bindParam(":message", $message, PDO::PARAM_STR);

$stmt->execute();

?>


<?php require("./parts/contact.php"); ?>