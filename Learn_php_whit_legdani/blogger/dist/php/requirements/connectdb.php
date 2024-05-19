<?php

    $dsn = "mysql:host=localhost;port=3306;dbname=blog;charset=utf8";

    try{
        $pdo = new PDO($dsn,'root','');
    }catch(PDOException $e){
        echo $e->getMessage();
    }