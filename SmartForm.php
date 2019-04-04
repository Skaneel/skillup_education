<?php
include_once 'Form.php';

class SmartForm extends Form
{

    public function myecho()
    {
        var_dump($_POST);
    }
}

$obj2 = new SmartForm;

if (!empty($_POST['name'] || $_POST['pass'])) {
    echo 'массив не пустой';
    $deckriptor = fopen('text.txt', 'a');
    $str = $_POST['name'] . "\t" . $_POST['pass'] . "\n";
    fputs($deckriptor, $str);
    $obj2->myecho();
    fclose($deckriptor);
} else {
  echo 'массив пустой';
}
include 'index.php';
//////////////////////////////