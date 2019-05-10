<?php

require 'vendor/autoload.php';

$ch = curl_init('https://lv-2b.herokuapp.com');

curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); // сохранять в переменные
curl_setopt($ch,CURLOPT_HEADER, true); // ловит заголовок
curl_setopt($ch,CURLOPT_NOBODY, true); // получает только заголовок. Основная инфа, меньше ресурсов требует
curl_setopt($ch,CURLOPT_FOLLOWLOCATION, true); // переходит, если есть перенаправление
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, false); // выключает проблемы при работе с HTTPS
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false); // выключает проблемы при работе с HTTPS

$html = curl_exec($ch);

curl_close($ch);

xprint($html);
