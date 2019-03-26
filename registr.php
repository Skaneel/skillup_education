<?php

if (empty($_POST['email'])) {
//    $errors['email'] = 'Введите email';
    include 'index.php';
    exit();
} else {
    include 'index.php';
}

$file = fopen('subscribers.txt', 'a');
$line = $_POST['email'] . "\n";
fputs($file, $line);
fclose($file);
//var_dump();