<form action="index.php" method="post">
    <p>Введите страницу</p>
    <input type="text" name="value">
    <input type="submit" value=" отправить ">
</form>

<?php
session_start();

$a = $_SESSION['value'] = $_POST['value'];

if (isset($_SESSION['value']))
header("Location: test.php");
