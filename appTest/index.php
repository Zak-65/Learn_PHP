<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css">
    <title>learn php</title>
</head>

<body>
    <?php $prenom = "zakaria";
    $nom = "sidqui";
    $age = 22;
    $isStudent = true;
    $note = 19;
     ?>
    <header class="flex justify-center items-center h-32 bg-blue-500">
        <div class="text-white">M107 : Dévlopper de sites web dynamiques</div>
    </header>
    <?php echo "<h1 class=\"text-red-300 text-3xl text-center\">This is php text</h1>"; ?>
    <main class="container mx-auto px-32 w-full">
        <div class="h-64 border border-gray-200 rounded-md bg-white">
            I am <?php echo $prenom.' '.$nom;?>,and I am a Copmuter developer trainee !
            <br/>
            <br/>
            <?php echo "I am {$prenom} {$nom} ,and I am a Copmuter developer trainee !"?>
        </div>
    </main>
</body>

</html>