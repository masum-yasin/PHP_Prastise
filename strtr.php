<?php
$table = array('<b>' => '<strong>', '</b>' => '</strong>');
$html = '<b>Today In PHP-Powered News</b><i>Today In PHP Powered News</i>';
echo strtr($html, $table);
?>