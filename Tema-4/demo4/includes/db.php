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
$movies = array(
    array(
        'id' => '1',
        'title' => 'Titanic',
        'poster' => 'img/10236_aa.jpg',
        'description' => 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious ill-fated R.M.S. Titanic',
        // 'link' => 'movie-1.php'
    ),
    array(
        'id' => '2',
        'title' => 'Avatar',
        'poster' => 'img/download.jpg',
        'description' => 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his   home',
        // 'link' => 'movie-2.php'
    ),
    array(
        'id' => '3',
        'title' => 'Terminator',
        'poster' => 'img/download (1).jpg',
        'description' => 'A human soldier is sent from 2029 to 1984 to stop an almost indestructible cyborg killing machine, sent from the same year, which has been programmed to execute a young woman whose unborn son is the key to humanity future salvation',
        // 'link' => 'movie-3.php'
    ),
);
}



