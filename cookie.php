<?php
if (isset($_COOKIE['keyCook']))
    $count = $_COOKIE['keyCook'];
$count++;
setcookie('keyCook', $count, strtotime('+1 year'));
if ($count == 1)
    echo "вы здесь впервые";
else {
    echo 'Вы посетили страницу ' . $count . ' рас';
}