<?php
    require_once 'db.php';

    $query = "DELETE FROM users WHERE id = :id";

    $statement = $pdo->prepare($query);

    $statement->execute([
        ':id' => 3
    ])

?>