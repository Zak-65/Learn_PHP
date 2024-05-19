<?php

    $dsn = "mysql:host=localhost;port=3306;dbname=test;charset=utf8";

    try{

        $pdo = new PDO($dsn, 'root', 'rootroot');

        echo 'connected';
    }catch(PDOException $e){
        echo $e->getMessage();
    }
