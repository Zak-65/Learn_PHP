<?php

    require_once 'db.php';

    $query = "SELECT * FROM users WHERE id = :id";

    $statement = $pdo->prepare($query);

    $statement->execute([
        ':id' => 2
    ]);
    
    //$users = $statement->fetchAll(PDO::FETCH_ASSOC);
    $users = $statement->fetch(PDO::FETCH_ASSOC);
    var_dump($users);
    
?>