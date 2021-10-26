<?php
define("NUME_AUTOR_SITE" , "AM");

$menu_items = array(
    array(
        'url' => 'index.php',
        'title' => 'Home',
    ),
    array(
        'url' => 'movies.php',
        'title' => 'Movies',
    ),
    array(
        'url' => 'contact.php',
        'title' => 'Contact',
    ),
);

if( !in_array(basename($_SERVER['PHP_SELF']), array('index.php', 'contact.php'))){
    $movies = json_decode(file_get_contents('./assets/movies-list-db.json'), true)['movies'];
}



