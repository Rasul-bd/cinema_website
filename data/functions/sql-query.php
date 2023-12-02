<?php

// запрос всех категорий
function get_all_category(){
    global $pdo;
    $all_category = $pdo -> query ( " SELECT * FROM category " );
    return $all_category;
}

// запрос отдельной категорий
    function get_category_by_id( $id ){
        global $pdo;
        $category = $pdo->query(" SELECT * FROM category WHERE category_id= '$id' ");
        foreach ($category as $item){
            return $item;
        }
    }

function get_all_films(){
    global $pdo;
    $all_films = $pdo->query(" SELECT * FROM films ");
    return $all_films;
}

// запрос на фильм по категориям
function get_film_by_cat( $id ){
    global $pdo;
    $films = $pdo->query(" SELECT * FROM films WHERE category = '$id' ");
    return $films;
}

function film_by_url($key){
    global $pdo;
    $film = $pdo->query(" SELECT * FROM films WHERE url = '$key'");
    foreach($film as $item){
        return $item;
    }
}

//запрашиваем свежие фильмы
function premiers(){
    global $pdo;
    $films = $pdo->query ("SELECT * FROM films ORDER BY id DESC");
    return $films;
}

function limited_premiers(){
    global $pdo;
    $premiers = $pdo->query("SELECT * FROM films ORDER BY id DESC LIMIT 4");
    return $premiers;
}

// функция поиска
function search($key){
    global $pdo;
    $result = $pdo->query("SELECT * FROM films WHERE search_text LIKE '%$key%' ");
    return $result;
}

// функция новости
function news(){
    global $pdo;
    $news = $pdo->query("SELECT * FROM news ORDER BY date DESC");
    return $news;
}


function last_news(){
    global $pdo;
    $last_news = $pdo->query("SELECT * FROM news ORDER BY date DESC LIMIT 2");
    return $last_news;
}

// функция отдельной статьи
function post($key){
    global $pdo;
    $post = $pdo->query("SELECT * FROM news WHERE id=$key");
    foreach($post as $item){
        return $item;
    }
}

//функция вывода всех пользователей
function users(){
    global $pdo;
    $users = $pdo->query( " SELECT * FROM users " );
    return $users;
}

function archive_users(){
    global $pdo;
    $users = $pdo->query( " SELECT * FROM archive_users " );
    return $users;
}

function get_cat_by_key($key){
    global $pdo;
    $cat = $pdo->query( "SELECT * FROM category WHERE category_id='$key'" );
    foreach ($cat as $item) {
        return $item;
    }
}
?>