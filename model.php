<?php
function getComments( $pdo )
{
    $query = "SELECT name, text, time FROM comments ORDER BY id ASC"; //запрос комментариев из базы
    $stmt = $pdo->query($query);
    return $stmt;
}

function insertComment( $name, $comment, $pdo )
{
    $time = time(); //получаю текущее время
    $query = "INSERT INTO comments (name, text, time) VALUES ( :name, :comment, :time )"; //строка для запроса
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        'name' => $name,
        'comment' => $comment,
        'time' => $time
    ]);
}

function getToken()
{
    return hash('ripemd160', 'mytime'.time() );
}