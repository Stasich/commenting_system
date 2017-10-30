<?php
$username = 'future_test';
$password = '12345';
$dbname = 'future_test';
$charset = 'utf8';
$dsn = "mysql:host=localhost;dbname=$dbname;charset=$charset";
//$opt = [
//PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//PDO::ATTR_EMULATE_PREPARES   => false,
//];
try {                                                                                 // подключаюсь к mysql
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e ) {
    echo "Невозможно установить соединение" . $e->getMessage();
}