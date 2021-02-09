<?php

$num = 17;

$n = true;
for($i = 2; $i < $num; $i++) {
if($num % $i == 0) {
$n = false;
break;}
}
if ($n) {
    echo $num. " は素数です ";
} else {
    echo $num. " は素数ではありません ";
}
