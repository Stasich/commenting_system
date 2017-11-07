<?php
class Comments
{
    private $pdo;

    public function __construct($dsn, $username, $password)             //сразу подключаюсь к базе.
    {
        try {
            $this->pdo = new PDO($dsn, $username, $password);
        } catch (PDOException $e ) {
            echo "Невозможно установить соединение" . $e->getMessage();
        }
    }

    public function getComments()
    {
        $query = "SELECT name, text, time FROM comments ORDER BY id ASC"; //запрос комментариев из базы
        $stmt = $this->pdo->query($query);
        return $stmt;
    }

    public function insertComment( $name, $comment )
    {
        $time = time(); //получаю текущее время
        $query = "INSERT INTO comments (name, text, time) VALUES ( :name, :comment, :time )"; //строка для запроса
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            'name' => $name,
            'comment' => $comment,
            'time' => $time
        ]);
    }
}

function getToken()
{
    return hash('ripemd160', 'mytime'.time() );
}