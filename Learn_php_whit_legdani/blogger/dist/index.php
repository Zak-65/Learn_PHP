<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="style.css">
	<title>Blogger</title>
</head>
<body class="h-[100vh] bg-orange-400 flex flex-col items-center">
 <h1 class="text-6xl font-serif text-center mt-8">blogger</h1>
 <form class="flex flex-col w-1/2 h-1/2 justify-between m-10 bg-gray-500 p-6 rounded-md gap-2" action="./php/createBlog.php" method="post" >
	<label for="name_blogger" class="text-lg font-bold">Enter your name</label>
	<input type="text" name="name" id="name_blogger" class="h-10 w-1/3 p-4 rounded">
	<label for="title_blog" class="text-lg font-bold">Enter title</label>
	<input type="text" name="title" id="title_blog" class="h-10 w-1/3 p-4 rounded">
	<label for="blog" class="text-lg font-bold">Enter your blog</label>
	<textarea name="blog" id="blog" class="rounded-md h-1/3"></textarea>
	<input type="hidden">
	<input type="submit" value="Send" class="bg-black text-white w-1/6 ml-auto mr-auto rounded-md mt-2 h-12 font-medium text-lg ">
 </form>
 <?php

    require_once './php/requirements/connectdb.php';

    $query = "SELECT * FROM blog ";

    $statement = $pdo->prepare($query);

    $statement->execute([]);
    
    //$users = $statement->fetchAll(PDO::FETCH_ASSOC);
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
	<div class="bg-white overflow-visible rounded-xl shadow-2xl shadow-black w-[50%] ">
		<?php 
		foreach($users as $user){
		echo "<div class='dark:bg-gray-100 dark:text-gray-800'>
			<div class='container max-w-4xl px-10 py-6 mx-auto rounded-lg shadow-sm dark:bg-gray-50 '>
				<div class='mt-3'>
					<div class='flex w-full justify-between' id='container_title'>
						<a rel='noopener noreferrer' href='#' class='text-3xl font-bold hover:underline'>{$user['blog_title']}</a>
						<i class='text-3xl fa-solid fa-ellipsis-vertical test hover:text-red-500  w-10 '></i>
						<form  method='POST' action='./php/deleteAndModifieBlog.php'   class='inline-flex hidden'>
							<input type='submit' value='modifier' name='action'  class='bg-gray-300 hover:bg-green-400 text-gray-800 font-bold py-2 px-4 rounded-l' />
							<input type='submit' value='supprimer' name='action' class='bg-gray-300 hover:bg-red-400 text-gray-800 font-bold py-2 px-4 rounded-l' />
							<input type=hidden value='{$user['id_blog']}' name='id'  />
							</form>
					</div>
					<p class='mt-2 text-lg' id='test'>{$user['blog_text']}</p>
				</div>
				<div class='flex items-center justify-between mt-4'>
					<div class='w-48 flex justify-evenly'><a rel='noopener noreferrer'   class='hover:underline hover:text-blue-500'>Read more</a><a onclick='speek()' class='hover:text-blue-500' ><i class='fa-solid fa-play'>     Play</i></a></div>
					<div>
						<a rel='noopener noreferrer' href='#' class='flex items-center'>
							<img src='https://source.unsplash.com/50x50/?portrait' alt='avatar' class='object-cover w-10 h-10 mx-4 rounded-full dark:bg-gray-500'>
							<span class='hover:underline dark:text-gray-600'>{$user['blogger']}</span>
						</a>
					</div>
				</div>
			</div>";

		}
		?>
	<!-- </div> -->
	<script>
		let btn_param =	document.querySelectorAll('.test')
		function test(){
			btn_param.forEach((element)=>{
				element.addEventListener("click",(e)=>{
					console.log(e.target)
					e.target.classList.add("hidden")
					e.target.nextElementSibling.classList.remove('hidden')	
				})
			})
		}
		test()
	</script>
</body>
</html>