<?php

function dd($data) {
    die(var_dump($data));
}

function openDB() {
    try {
    return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
} catch (Exception $e) {
    die($e->getMessage());
}
}

function fetchAllTasks($pdo) {
    
$statement = $pdo->prepare('select * from todos');
$statement->execute();

return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
