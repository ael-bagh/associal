<!DOCTYPE HTML>
<html>
	<head>
		<title>Name : articles</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
	</head>
	<body class="bg-gray-100">
		<div class="flex flex-row-reverse items-center bg-white border-b-2 border-gray-200">
			<div class="flex flex-row items-center m-2">
				<div>
					<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
					</svg>
				</div>
				<div>
					: 0661536604
				</div>
			</div>
	 
			<div class="flex flex-row items-center m-2">
				<div>
					<svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
					</svg>
				</div>
				<div>
					: test@email.com
				</div>
			</div>
		</div>
		<div class="flex flex-row justify-between items-center p-1 bg-white border-b-2 border-black rounded-b-md shadow-2xl">
			<div class="flex items-center">
				<div><img src="images/logo.png" width="50" height="50" alt=""></div>
				<div class="text-3xl text-black ml-2">Name</div>
			</div>
			<div class="flex justify-between items-center">
				<a href="" class="m-2 hover:bg-gray-200">Association</a>
				<a href="" class="m-2">Activities</a>
				<a href="" class="m-2">Articles</a>
			</div>
		</div>
		<h1 class="text-5xl pb-4 m-4">Articles:</h1>
		<form class="relative m-4">
			<svg width="20" height="20" fill="currentColor" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
			  <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
			</svg>
			<input class="focus:border-green-500 focus:ring-1 focus:ring-green-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-2 pl-10" type="text" aria-label="Cherchez un article" placeholder="cherchez un article" id="myInput" onkeyup="myFunction()" />
		  </form>
		<div class="grid grid-cols-3 m-8">
			@foreach ($articles as $article)
			<div class="md:col-span-1 col-span-3 gap-2 m-2 myUL" id="myUL">
				<div class=" h-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center" style="background-image: url('images/{{$article->cover}}')">
				</div>
				<div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
				  <div class="mb-8">
					<p class="text-sm text-grey-dark flex items-center">
					  <svg class="text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
						<path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
					  </svg>
					  <a class="text-xl hover:bg-gray-400 hover:text-white" href="/article/{{$article->id}}">Voir l'article</a>
					</p>
					<div class="text-black font-bold text-xl mb-2 list-item" id="li">{{$article->title}}</div>
					<p class="text-grey-darker text-base">{{$article->subtitle}}</p>
				  </div>
				  <div class="flex items-center">
					<img class="w-10 h-10 rounded-full mr-4" src="images/{{$article->cover}}" alt="Avatar of Jonathan Reinink">
					<div class="text-sm">
					  <p class="text-black leading-none">{{$article->user->name}}</p>
					  <p class="text-grey-dark">{{$article->created_at}}</p>
					</div>
				  </div>
				</div>
			</div>
			@endforeach
		</div>
			<!-- footer -->
			<footer class="footer bg-white relative pt-1 border-b-2 border-green-700">
				<div class="container mx-auto px-6">
				
					<div class="sm:flex sm:mt-8">
						<div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
							<div class="flex flex-col">
								<span class="font-bold text-gray-700 uppercase mb-2">A propos d'associal</span>
								<span class="my-2"><a href="#" class="text-green-700  text-md hover:text-green-500">Qui sommes nous ?</a></span>
								<span class="my-2"><a href="#" class="text-green-700  text-md hover:text-green-500">Creer une page pour votre association</a></span>
								<span class="my-2"><a href="#" class="text-green-700  text-md hover:text-green-500">Rejoindre associal</a></span>
							</div>
							<div class="flex flex-col">
								<span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Name</span>
								<span class="my-2"><a href="#" class="text-green-700 text-md hover:text-green-500">L'association</a></span>
								<span class="my-2"><a href="#" class="text-green-700 text-md hover:text-green-500">Activities</a></span>
								<span class="my-2"><a href="#" class="text-green-700 text-md hover:text-green-500">Articles</a></span>
							</div>
							<div class="flex flex-col">
								<span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Autre</span>
								<span class="my-2"><a href="#" class="text-green-700  text-md hover:text-green-500">Rejoindre name</a></span>
								<span class="my-2"><a href="#" class="text-green-700  text-md hover:text-green-500">Fair un don</a></span>
							</div>
						</div>
					</div>
				</div>
				<div class="container mx-auto px-6">
					<div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
						<div class="sm:w-2/3 text-center py-6">
							<p class="text-sm text-green-700 font-bold mb-2">
								© 2021 Name
							</p>
						</div>
					</div>
				</div>
			</footer>
			<script>
				function myFunction() {
				  var input, filter, div, li, a, i, txtValue;
				  input = document.getElementById('myInput');
				  filter = input.value.toUpperCase();
				  div = document.getElementsByClassName("myUL");
				  li = document.getElementsByClassName("list-item");
				  for (i = 0; i < li.length; i++) {
					a = li[i];
					txtValue = a.textContent || a.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
					  div[i].style.display = "block";
					} else {
					  div[i].style.display = "none";
					}
				  }
				}
				</script>
	</body>
</html>
