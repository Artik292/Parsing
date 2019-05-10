<?php
$echo = "Call of Duty Black Ops 4 EN 3.60 € 59.99 €";

$money = '';
if ($echo !== " ") {

  for ($i = strlen($echo); $i >= 0; $i--){
      if (is_numeric($echo[$i]) OR $echo[$i]=='.') {
        $money = $echo[$i].$money;
      }
      if ((10<$money and $money<100) AND $echo[$i-1] !== '.') {
        break;
      }
  }
  echo $money*0.8;
  //var_dump($money);
}
