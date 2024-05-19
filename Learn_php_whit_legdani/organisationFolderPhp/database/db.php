<?php 

$dsn = "mysql:host=localhost;port=3306;dbname=myblogger;charset=utf8";

try{
    $pdo= new PDO($dsn,'root','');
    echo 'connected';
}catch(PDOException $e){

    echo $e->getMessage();
}