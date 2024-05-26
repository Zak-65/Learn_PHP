<?php

    $dsn = "mysql:host=localhost;port=3306;dbname=Copains;charset=utf8";

    try{
        $pdo = new PDO($dsn,'root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'connected';
    }catch(PDOException $e){
        die("Connection failed: " . $e->getMessage());
    }