<?php
session_start();
require '../db.php';
$login = $_POST["login"];
$password = $_POST["password"];

$admin = $pdo->prepare("SELECT id, login, password FROM admin WHERE login=:login AND password=:password");
$admin->execute(
    array(
        'login'=>$login,
        'password'=>$password
    )
);
$adminArray = $admin->fetch(PDO::FETCH_ASSOC);
if($adminArray['id'] > 0) {
    $_SESSION['admin'] = $adminArray['login'];
    header ('location: /admin-page');
} else{header ('location: /login');}
?>