<?php
require_once('connect_to_mysql.php');               // данные для подключения к базе
require_once ('model.php');
$comments = new Comments($dsn, $username, $password);

session_start();
$token = getToken();

if ($_POST) {                                       //если есть данные в POST запросе то добавить их в базу
    if ( $_SESSION['token'] === $_POST['token']){
        $name = htmlentities( $_POST['first_name'] );
        $comment = htmlentities( $_POST['comment'] );
        $comments->insertComment( $name, $comment );
    }
}
$_SESSION['token'] = $token;

$selectedPage = ( isset($_GET['page']) ) ? intval( $_GET['page'] ) : 0 ;
$arrComments = $comments->getComments( $selectedPage );
$countPages = $comments->getCountPagesLink();


require_once ("html.php");        // html страничка