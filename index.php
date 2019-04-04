<?php
include_once 'SmartForm.php';

$obj1 = new Form();
$obj1->open('SmartForm.php', 'POST');
echo "\n";
$obj1->input('text', 'Ваше имя', 'name');
echo "\n";
$obj1->password('Ваш пароль', 'pass');
echo "\n";
$obj1->submit('отправить');
echo "\n";
$obj1->close();


