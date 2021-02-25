<!DOCTYPE HTML>
<html>
	<head>
		<title>Name : {{$article->title}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
	</head>
	<body class="bg-gray-100">
        <main class="mt-10">

            <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
              <div class="absolute left-0 bottom-0 w-full h-full z-10"
                style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
              <img src="../images/{{$article->cover}}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
              <div class="p-4 absolute bottom-0 left-0 z-20">
                <a href="#"
                  class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">Association</a>
                <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                    {{$article->title}}
                </h2>
                <div class="flex mt-3">
                  <img src="https://randomuser.me/api/portraits/men/97.jpg"
                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                  <div>
                    <p class="font-semibold text-gray-200 text-sm"> {{$article->user->name}} </p>
                    <p class="font-semibold text-gray-400 text-xs"> {{$article->created_at}} </p>
                  </div>
                </div>
              </div>
            </div>    
            <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
                {!!$article->content!!}
            </div>
          </main>
		<!-- comments -->
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
	</body>
</html>