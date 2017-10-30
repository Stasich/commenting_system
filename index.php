<?php
require_once('connect_to_mysql.php');  //подключение к базе
require_once ('model.php');

session_start();

$token = getToken();

if ($_POST) {                           //если есть данные в POST запросе до добавить их в базу
    if ( $_SESSION['token'] === $_POST['token']){
        $name = htmlentities( $_POST['first_name'] );
        $comment = htmlentities( $_POST['comment'] );
        insertComment( $name, $comment, $pdo);
    }
}
$_SESSION['token'] = $token;

$stmt = getComments( $pdo );

require_once ("html.php");        // html страничка