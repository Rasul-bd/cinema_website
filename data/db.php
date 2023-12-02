<?php

    $user = "root";
    $password = "";
    $host = "127.0.0.1";
    $db = "cinema";
    $dbh = "mysql:host=".$host.";dbname=".$db.";charset=utf8";
    $options = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO ($dbh, $user, $password);

    require "functions/sql-query.php";

?>