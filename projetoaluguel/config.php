<?php
try {
    $pdo = new PDO("mysql:dbname=projeto_aluguel;host=localhost", "root", "");
} catch (PDOException $e) {

    echo "erro" . $e->getMessage();
    exit;
}
