<?php

require '../db.php';

$url = $_POST['url'];
$title = $_POST['title'];
$cover_img = $_FILES['cover_img']['name'];
$actors = $_POST['actors'];
$description = $_POST['description'];
$category = $_POST['category'];
$search_text = $_POST['search_text'];
$video_src = $_POST['video_src'];

$img = $_FILES['cover_img']['tmp_name'];


$path = "../../assets/img/films_cover/";

move_uploaded_file($img, $path.$cover_img);

$write = "INSERT INTO films (url, title, cover_img, actors, description, category, search_text, video_src) VALUES (:url, :title, :cover_img, :actors, :description, :category, :search_text, :video_src)";
$push = $pdo->prepare($write);
$push->bindParam(":url", $url);
$push->bindParam(":title", $title);
$push->bindParam(":cover_img", $cover_img);
$push->bindParam(":actors", $actors);
$push->bindParam(":description", $description);
$push->bindParam(":category", $category);
$push->bindParam(":search_text", $search_text);
$push->bindParam(":video_src", $video_src);
$push->execute();

header("location: /admin-page");



?>