<?php
    require_once 'db.php';

   
    $query = "INSERT INTO users(name) VALUES (:user_name)";

    $statement = $pdo->prepare($query);

    $statement->execute([
        ':user_name'=>'Youssef'
    ]);
?>