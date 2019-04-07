<?php
session_start();

isset($_SESSION['sess']) ? $count = $_SESSION['sess'] : $count = 0;
$count++;


if ($count > 5)
{
    $count = 0;
}
$_SESSION['sess'] = $count;
echo $count;
echo '</br>';
echo session_id() . "\n";