<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="flex justify-center items-center h-[100vh]">
    <?php 
    $signUp = false;  ?>
    <?php if($signUp==true) : ?>
        <div class="bg-green-400 h-[50%] w-[50%] flex items-center justify-center font-bold text-3xl">
            welcome dear
        </div>
    <?php else : ?>
        <div class="w-full max-w-xs">
  <form class="bg-blue-300  shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="***********">
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Sign In
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
        Forgot Password?
      </a>
    </div>
  </form>
</div> 
    <?php endif ?>  
      <!-- switch case in php -->
      <!-- $today = date -->
      <!-- for loop in php -->
      <?php 
      $etudiants = ["khalid","zakaria","anas","ouafik"];
    //   for($i=0;$i<count($etudiants);$i++){
    //     echo $etudiants[$i];
    //     echo "<br>";
    //   };
    // forEach
    //   foreach($etudiants as $index => $etudiant){
    //     echo $etudiant." | ".$index . "<br>";
    //   }
    $posts =[['id'=>1,'titre'=>"myfirstpost",'contenu'=>'bla bla bla','tags' => []],
    ['id'=>2,'titre'=>"mysecondpost",'contenu'=>'laallalalala','tags' => []],
    ['id'=>3,'titre'=>"mytherdpost",'contenu'=>'eho eho eh','tags' => []]
    ]; 
      ?>
</body>
</html