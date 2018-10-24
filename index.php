<?php
/*
 *	Write a program that will output itself
 **/
$file = $_SERVER['PHP_SELF'];
$file = basename($file);

$fp = fopen($file, 'rb');
$str = fread($fp, filesize($file));
fclose($fp);

echo highlight_string($str, true);
