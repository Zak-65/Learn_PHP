<?php
$nom = $_GET['prenom']??'';
var_dump($nom);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
            <input type="text" name= "nom" >
            <input type="submit" value="tt">
    </form>
    <?php 
    var_dump($_POST)
     ?>
</body>
</html>