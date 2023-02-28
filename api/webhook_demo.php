<?php
$file = 'weebhook.txt';
$result = file_get_contents('php://input');
//file_put_contents($file, $result);

file_put_contents($file, $result.PHP_EOL , FILE_APPEND | LOCK_EX);
?>		