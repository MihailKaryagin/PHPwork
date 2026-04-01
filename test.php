<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "========================================================";
echo "<br/>";

$url = ((!empty($_SERVER['HTTPS'])) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $url;

echo "=========================================================";
echo "<br/>";

echo "<pre>";
var_dump(parse_url($url));
var_dump(parse_url($url, PHP_URL_SCHEME));
var_dump(parse_url($url, PHP_URL_HOST));
var_dump(parse_url($url, PHP_URL_USER));
var_dump(parse_url($url, PHP_URL_PASS));
var_dump(parse_url($url, PHP_URL_PORT));
var_dump(parse_url($url, PHP_URL_PATH));
var_dump(parse_url($url, PHP_URL_QUERY));
var_dump(parse_url($url, PHP_URL_FRAGMENT));
echo "</pre>";
echo "=========================================================";
echo "<br/>";

echo "<pre>";
print_r($_POST);
echo "</pre>";