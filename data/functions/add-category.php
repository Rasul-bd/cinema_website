<?php

require '../db.php';


$category_id = $_POST['category_id'];
$category_title = $_POST['category_title'];
$category_img = $_FILES['category_img']['name'];

$path = '../../assets/img/icon/';
$img = $_FILES['category_img']['tmp_name'];

move_uploaded_file($img, $path.$category_img);

$category_description = $_POST['category_description'];


$write = "INSERT INTO category (category_id, category_title, category_img, category_description) VALUES (:category_id, :category_title, :category_img, :category_description)";
$push = $pdo->prepare($write);
$push->bindParam(":category_id", $category_id);
$push->bindParam(":category_title", $category_title);
$push->bindParam(":category_img", $category_img);
$push->bindParam(":category_description", $category_description);
$push->execute();

header("location: /admin-page");



?>