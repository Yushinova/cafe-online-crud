<?php
// connection.php - функции открытия и проверки соединения с БД

// pingDb - проверка доступности БД
function pingDb() : bool {
    try {
        $conn = openDbConnection();
        if ($conn->ping()) {
           return true;
        } else {
           return false;
        }
        $conn->close();
    } catch (Exception $ex) {
        die("ping failed: ".$ex->getMessage());
    }
}

// openDbConnection - создание подключения к БД
function openDbConnection() : mysqli {
    $host = $_ENV["DB_HOST"];
    $port = $_ENV["DB_PORT"];
    $username = $_ENV["DB_USERNAME"];
    $password = $_ENV["DB_PASSWORD"];
    $database = $_ENV["DB_NAME"];
    // создать и вернуть подключение к БД
    return new mysqli($host, $username, $password, $database, $port);
}

