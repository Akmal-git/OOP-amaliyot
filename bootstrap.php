<?php

require_once './autoload.php';

$database = new Database('127.0.0.1', 'oop-amaliyot', 'root', 'Egamberdiyev');
$pdo = $database->connect();
Post::$pdo = $pdo;

echo "Hamma kodlar muafaqiyatli ishlamoqda Tabriklaymiz !!!";
