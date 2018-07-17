<?php
    session_start();

    /* 資料庫連線資訊 */
    define('DB_HOST', 'localhost1');
    define('DB_DATABASE', 'game');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_PORT', '33060');
    define('DB_CHARSET', 'utf8');

    try {
        $dsn = "mysql:dbname=" . DB_DATABASE . ";host=" .DB_HOST . ";port=" . DB_PORT . ";charset=" . DB_CHARSET;
        $db = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
    } catch (PDOException $e) {
        echo "資料庫連線失敗： [{$e->getCode()}] {$e->getMessage()}";
    }
