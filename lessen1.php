<?php

require 'vendor/autoload.php';

$html = file_get_contents('https://lv-2b.herokuapp.com');

phpQuery::newDocument($html);

//$title = pq('.fact__temp')->text();
//$title = pq('title')->html();
$title = pq('#atk_centered_columns_view_header');
echo $title.' ';
for ($i=1; $i <= 4; $i++) {
$title = pq('#atk_centered_columns_view_'.$i.'_header')->text();
echo $title.' ';
}

//xd($title);
//xd()

// xprint($html,'$html');






phpQuery::unloadDocuments($html);
