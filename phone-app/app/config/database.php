<?php
$host = 'localhost'; // ou '127.0.0.1'
$db = 'phones_db';
$user = 'root';
$pass = 'root';
$socket = '/Applications/MAMP/tmp/mysql/mysql.sock'; // chemin vers le socket de MAMP

try {
    $pdo = new PDO("mysql:unix_socket=$socket;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connexion échouée : " . $e->getMessage();
}
