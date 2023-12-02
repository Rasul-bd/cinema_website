<?php

require '../db.php';

$title = $_POST['title'];
$short_text = $_POST['short_text'];
$long_text = $_POST["long_text"];
$small_img = $_POST['small_img'];
$big_img = $_POST['big_img'];

// echo "Название:" .$title."<br>"; 
// echo "Крактий текст:" .$short_text."<br>"; 
// echo "Длинный текст:" .$long_text."<br>"; 
// echo "маленкое изо:" .$small_img."<br>"; 
// echo "Большое изо:" .$big_img."<br>";

$write = "INSERT INTO news (title, short_text, long_text, small_img, big_img) 
                    VALUES (:title, :short_text, :long_text, :small_img, :big_img)";
$push = $pdo->prepare($write);
$push->bindParam(":title", $title);
$push->bindParam(":short_text", $short_text);
$push->bindParam(":long_text", $long_text);
$push->bindParam(":small_img", $small_img);
$push->bindParam(":big_img", $big_img);
$push->execute();

header("location: /admin-page");
?>