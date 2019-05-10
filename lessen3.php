<?php

require 'vendor/autoload.php';

function request($url, $postdata = null, $cookiefile = 'cookie.txt') {

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // сохранять в переменные
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // переходит, если есть перенаправление
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_5) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.1.1 Safari/605.1.15');
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookiefile);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookiefile);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // выключает проблемы при работе с HTTPS
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // выключает проблемы при работе с HTTPS

if ($postdata) {
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
}

$html = curl_exec($ch);
curl_close($ch);
return $html;


}

file_put_contents('cookie.txt', '');

$html = request('https://www.e-klase.lv');

xprint($html,'html');
