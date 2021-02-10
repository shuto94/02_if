<?php

$num = 17;

$flag = true;
for($i = 2; $i < $num; $i++) {
    if($num % $i == 0) {
        $flag = false;
        break;
    }
}
if ($flag) {
    echo $num. " は素数です ";
} else {
    echo $num. " は素数ではありません ";
}
