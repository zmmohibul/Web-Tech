<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once 'Database.php';
include_once 'Product.php';


$database = new Database();
$db = $database->connect();
