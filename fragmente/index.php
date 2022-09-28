<?php declare(strict_types=1);

$page = file_get_contents('formatted.html');

$productList = require 'defaultList.php';

$products = '';
foreach($productList as $product) {
    $products .= file_get_contents('products/' . $product . '.html');
}

echo str_replace('%PRODLIST%', $products, $page);
