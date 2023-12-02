<?php

require "../db.php";

$name = $_POST["newname"];
$login = $_POST["newlogin"];
$pswd = $_POST["newpassword"];

$sql = " INSERT INTO users (name, login, password) VALUES (:name, :login, :password) ";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(":name", $name);
$stmt->bindParam(":login", $login);
$stmt->bindParam(":password", $pswd);

$stmt->execute();

header("location: /");
?>