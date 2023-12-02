<?php

require '../db.php';

$id = $_POST['id'];

$sql = "DELETE from archive_users WHERE id=:id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":id", $id);

$stmt->execute();

header("location: /admin-page")
?>