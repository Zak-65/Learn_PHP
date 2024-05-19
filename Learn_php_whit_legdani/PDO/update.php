<?php
    require 'db.php';

    $query = "UPDATE users SET name = :user_name WHERE id = :id";

    $statement = $pdo->prepare($query);

    $statement->execute([
        ':user_name'=>'amine',
        ':id' => 1
    ]);
?>