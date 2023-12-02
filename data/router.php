<?php

$path = parse_url($_SERVER["REQUEST_URI"]) ["path"];

$routs = [
    "/"=>"pages/main-page.php",
    "/search"=>"pages/search-page.php",

    "/category"=>"pages/category-page.php",

    "/category/id"=>"pages/category-id-page.php",

    "/premier"=>"pages/premier-page.php",

    "/news"=>"pages/news-page.php",

    "/film"=>"pages/film-page.php",

    '/news/post'=>'pages/post-page.php',

    '/check'=>'pages/stop-page.php',

    '/login'=>'pages/admin/login-page.php',
    
    '/admin-page'=>'pages/admin/admin-page.php',
];

if( array_key_exists($path, $routs) ){
    require $routs[$path];
} else{
    http_response_code(404);
    require "pages/404.php";
}

?>