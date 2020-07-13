<?php
date_default_timezone_set('Asia/Tokyo');
$timestamp = time();

$week = ['日','月','火','水','木','金','土',];

$d = date('w');

$day = $week[$d];

?>