<?php

require_once __DIR__ . '/paginateHelper.php';

$items = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32];


//print_r($items);

//paginateHelper($itemNumber, $perPage, $currentPage, $visiblePages=8)


$ph = paginateHelper(count($items), 7, 1);

echo "<pre>";
print_r($ph);
echo "</pre>";

$ph = paginateHelper(count($items), 7, 2);

echo "<pre>";
print_r($ph);
echo "</pre>";

$ph = paginateHelper(count($items), 7, 3);

echo "<pre>";
print_r($ph);
echo "</pre>";

$ph = paginateHelper(count($items), 7, 4);

echo "<pre>";
print_r($ph);
echo "</pre>";

$ph = paginateHelper(count($items), 7, 5);

echo "<pre>";
print_r($ph);
echo "</pre>";

