<?php

    require './requirements/connectdb.php';

    $action = $_POST['action'];
    $id=$_POST['id'];

    if($action=='supprimer'){
        $query = 'DELETE FROM blog WHERE id_blog = :id';

    $statment = $pdo->prepare($query);

    $statment->execute([
        ':id'=>$id
    ]);
    header('location:./../index.php');
    }else{
        echo 'ook';
    }

    