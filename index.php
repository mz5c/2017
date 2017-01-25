<?php
session_start();
$_SESSION['abc'] = empty($_GET['abc']) ? mt_rand(100000, 999999) : $_GET['abc'];
echo 'hello world !!!' . "\n";
echo 'now is ' . date('Y-m-d H:i:s') . "\n";
echo 'abc = ' . $_SESSION['abc'];
