<!DOCTYPE HTML>
<html>
	<head>
		<title>Name : {{$article->title}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
	</head>
	<body class="bg-gray-100">
		<div class="flex flex-row-reverse items-center bg-white border-b-2 border-gray-200 font-sans">
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
				<div><img src="../images/logo.png" width="50" height="50" alt=""></div>
				<div class="text-3xl text-black ml-2">Name</div>
			</div>
			<div class="flex justify-between items-center gap-2 p-2">
				<a href="" class="m-2 hover:bg-gray-200">Association</a>
				<a href="" class="m-2">Activities</a>
				<a href="" class="m-2">Articles</a>
			</div>
			<div class="flex items-center gap-2">
				<div class="p-2 bg-green-500 hover:bg-green-700 text-white items-center">
					<a class="flex flex-row items-center" href=""> 
						<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
				  		</svg>Fair un don
					</a>
				</div>
				<div class="p-2 bg-green-500 hover:bg-green-700 text-white">
					<a href="">Rejoindre l'Association</a>
				</div>
			</div>
		</div>
        <div class="bg-white rounded-lg m-10 p-6 pb-0 article shadow-lg"> 
            <img class="object-scale-down h-96 w-full rounded-xl m-auto" src="../images/{{$article->cover}}" alt="">
            <h1 class="text-3xl m-4 text-center">{{$article->title}}:</h1>
            <h1 class="text-2xl text-gray-800 m-4 text-center">{{$article->subtitle}}:</h1>
            <div class="bg-gray-700 p-2 m-4 flex flex-row justify-between rounded-xl">
                <div class="text-white flex flex-row items-center"> 
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                    <div class="flex-shrink-0">{{$article->user->name}}</div>  
                </div>
                <div class="text-white flex flex-row items-center"> 
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                    </svg>
                    <div class="flex-shrink-0">{{$article->created_at}}</div>              
                </div>
            </div>
            <div class="p-6">
				{!!$article->content!!}
			</div>
		</div>
		<!-- component -->
		<!-- component -->
<div>

    <section class="rounded-b-lg  mt-4 m-10">
      
<h1 class="ml-4 text-gray-900 font-bold">Ecrire un commentaire:(@auth
    {{ Auth::user()->name }}
@endauth)</h1>
<form action="/createcomment" accept-charset="UTF-8" method="post">
    @csrf
    @guest
    <input class="w-full shadow-inner p-4 border-0 mb-2 rounded-lg focus:shadow-outline text-2xl" type="text" placeholder="Nom et prenom" name="name" required>
    <input class="w-full shadow-inner p-4 border-0 mb-2 rounded-lg focus:shadow-outline text-2xl" type="email" placeholder="Adresse email" name="email" required>
    @endguest
    <input type="hidden" name="article_id" value="{{$article->id}}">
  	<textarea class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl" placeholder="Commentaire." cols="6" rows="6" id="comment_content" spellcheck="false" name="comment" required></textarea>
  	<button class="font-bold py-2 px-4 w-full bg-green-400 text-lg text-white shadow-md rounded-lg" type="submit">Comment </button>
</form>

      <div id="task-comments" class="pt-4">
        <!--     comment-->
@foreach ($comments as $comment)
<div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
    <div class="flex flex-row justify-center items-center mr-2">
      <img alt="avatar" width="48" height="48" class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4" src="https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png">
      <h3 class="text-green-600 font-semibold text-lg text-center md:text-left ">{{$comment->name}}</h3>
      <h3 class=" text-sm text-gray-600 font-light pl-4">{{$comment->created_at}}</h3>
    </div>
  
  
      <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">{{$comment->comment}} </p>
  
  </div>
@endforeach
<!--  comment end--><!--     comment-->
<div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
  <div class="flex flex-row justify-center mr-2">
    <img alt="avatar" width="48" height="48" class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4" src="https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png">
    <h3 class="text-green-600 font-semibold text-lg text-center md:text-left ">@Tim Motti</h3>
  </div>


    <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left "><span class="text-purple-600 font-semibold">@Shanel</span> Hello. Yes, the entire exterior, including the walls. </p>

</div>
<!--  comment end-->
      </div>
    </section>

  </div>
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
	</body>
</html>