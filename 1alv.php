<?php

require 'vendor/autoload.php';

$html = file_get_contents('https://www.elkor.lv/rus/elektronika-1/speles/datorspeles/?game_age_restriction=5305');

phpQuery::newDocument($html);

//$title = pq('.fact__temp')->text();
//$title = pq('title')->html();
$title = pq('#products-grid-table')->text();
$title = explode('Компьютерная игра',$title);

foreach ($title as $game) {
    $echo = str_replace("Добавить в корзину "," ",$game);
    echo $echo.' ';
}

//var_dump($title);

//xd($title);
//xd()

// xprint($html,'$html');






phpQuery::unloadDocuments($html);
