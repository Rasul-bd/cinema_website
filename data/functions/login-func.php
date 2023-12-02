<?php

session_start();

require "../db.php";

$login = $_POST["login"];
$passwd = $_POST["password"];

$user = $pdo->prepare( "SELECT id, login, password FROM users WHERE login=:login AND password=:pswd" );
$user->execute(
    array(
    "login"=>$login,
    "pswd"=>$passwd
    )
);
$userArray = $user->fetch( PDO::FETCH_ASSOC );

if($userArray["id"] > 0){
    $_SESSION['user'] = $userArray['login'];
    header('location: /' );
} else{
    echo "Такого аккаунта нет";
}

?>