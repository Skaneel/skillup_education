<?php
session_start();

isset($_SESSION['sess']) ? $count = $_SESSION['sess']: $count = 0;
$count++;
$_SESSION['sess'] = $count;

echo $count; echo '</br>';
echo session_id() . "\n";