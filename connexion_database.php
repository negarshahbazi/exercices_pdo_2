<?php

try {
    $dsn = 'mysql:host=localhost;dbname=hospitale2n';
    $username = 'root';
    $password = '';
    $database = new PDO($dsn, $username, $password);
} catch (Exception $message) {
    echo "ya un problem <br>" . $message;
}
