<?php 

    require './Requirements/connectdb.php';

    $nameBlogger = $_POST['name'];
    $titleBlog = $_POST['title'];
    $blog = $_POST['blog'];

    $query = "INSERT INTO blog(blog_title,blog_text,blogger) VALUE (:title,:blog,:nom)";

    $statment = $pdo->prepare($query);

    $statment->execute([
        ':nom'=>$nameBlogger,
        ':title'=>$titleBlog,
        ':blog'=>$blog
    ]);
    header("location:../index.php");
   
    
    