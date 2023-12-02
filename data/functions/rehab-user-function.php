<?php

require '../db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];


$sql = "DELETE from archive_users WHERE id=:id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":id", $id);

$stmt->execute();


$write = "INSERT INTO users (id, name, login, password) VALUES (:id, :name, :login, :password)";
$push = $pdo->prepare($write);
$push->bindParam(":id", $id);
$push->bindParam(":name", $name);
$push->bindParam(":login", $login);
$push->bindParam(":password", $password);
$push->execute();

header("location: /admin-page")

?>