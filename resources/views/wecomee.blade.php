<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Accueil</title>
</head>
<body class="bg-white">
    <!-- component -->
    <div class="flex flex-row-reverse items-center bg-white border-b-2 border-black">
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
<div class="w-full border-b-2 border-green-500">
    <nav class="bg-white shadow-lg">
        <div class="md:flex items-center justify-between py-2 px-8 md:px-12">
            <div class="flex justify-between items-center">
               <div class="text-2xl font-bold text-gray-800 md:text-3xl">
                    <a href="#">L'association</a>
               </div>
                <div class="md:hidden">
                    <button type="button" class="block text-gray-800 hover:text-gray-700 focus:text-gray-700 focus:outline-none" onclick="myFunction()">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path class="hidden" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/>
                            <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row -mx-2 md:block hidden"  id="myTopnav">
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Association</a>
                <a href="/articles" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Articles</a>
                <a href="/activities" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Activities</a>
            </div>
        </div>
    </nav>
    <div class="flex bg-white" style="height:600px;">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
            <div>
                <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Nous luttons pour l'avenir de <span class="text-green-600">Nos enfants</span> et celui de <span class="text-red-600">Notre pays</span></h2>
                <p class="mt-2 text-sm text-gray-500 md:text-base">Créée le 5 Juillet 2009 une association civile marocaine opérant à l’échelle national à but non lucratif et sans aucune appartenance politique ni religieuse.
                    Notre stratégie au sein de l’association prétend à accroître la conscience du public vis-à-vis des effets désastreux que représentent le tabac et la drogue, aussi bien pour l’avenir de nos enfants et celui de notre pays. Ceci est à travers des compagnes de sensibilisation au profit du grand public et notamment des établissements publics.</p>
                <div class="flex justify-center lg:justify-start mt-6">
                    <a class="px-4 py-3 bg-green-500 text-gray-200 text-xs font-semibold rounded hover:bg-green-300" href="#">Fair un don</a>
                    <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400" href="#">Rejoindre l'association</a>
                </div>
            </div>
        </div>
        <div class="lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
            <div class="h-full object-cover" style="background-image: url(./images/cover.jpg)">
                <div class="h-full bg-black opacity-25"></div>
            </div>
        </div>
    </div>
</div>
<!-- component -->
<!-- This is an example component -->
<div>
    <div class="relative items-center justify-center">
      <!-- Header Text-->
      <h1 class="text-center text-2xl font-bold p-4 bg-gray-800 text-gray-400">Nos derniers Articles</h1>
      <!-- All Cards Container -->
      <div class="lg:flex items-center container mx-auto my-auto">
        @if ($articles->count() == 0)
            <h1 class="font-bold text-center m-32 text-3xl text-gray-600">Aucun article existant</h1>
        @else
        @foreach ($articles as $article)
        <div class="lg:m-4 shadow-md hover:shadow-lg hover:bg-gray-100 rounded-lg overflow-hidden bg-white my-12 mx-8" style="min-width: 30%;">
            <!-- Card Image -->
            <img src="./images/{{$article->cover}}" alt="" class="object-contain max-w-lg min-w-full h-80">
            <!-- Card Content -->
            <div class="p-4">
              <h3 class="font-medium text-gray-600 text-lg my-2 uppercase">{{$article->title}}</h3>
              <p class="text-justify">Author: {{$article->user->name}}</p>
              <div class="mt-5">
                <a href="/article/{{$article->id}}" class="hover:bg-gray-700 rounded-full py-2 px-3 font-semibold hover:text-white bg-gray-400 text-gray-100">Read More</a>
              </div>
            </div>
          </div>
        @endforeach
        @endif
      </div>
      @if ($articles->count() > 0)
      <h1 class="md:ml-10 md:mr-10 mb-6 text-center text-xl font-bold p-4 bg-gray-100 hover:bg-gray-900 hover:text-white"> <a href="/articles">Voir tous les articles</a> </h1>
      @endif
    </div>
  </div>
  <div class="relative items-center justify-center">
    <h1 class="text-center text-2xl font-bold p-4 bg-gray-800 text-gray-400">Nos dernieres Actvites</h1>
      <div class="lg:flex items-center container mx-auto my-auto">
        <!-- component -->
        @if ($articles->count() == 0)
            <h1 class="font-bold text-center m-32 text-3xl text-gray-600">Aucun article existant</h1>
        @else
        @foreach ($articles as $article)
        <div class="lg:m-4 bg-white shadow-lg rounded-lg overflow-hidden my-12 mx-8" style="min-width: 30%;">
            <img class="object-contain max-w-lg min-w-full h-80" src="./images/{{$article->cover}}" alt="avatar">
            <div class="flex items-center px-6 py-3 bg-gray-900">
                <svg class="h-6 w-6 text-white fill-current" viewBox="0 0 512 512">
                    <path d="M256 48C150 48 64 136.2 64 245.1v153.3c0 36.3 28.6 65.7 64 65.7h64V288h-85.3v-42.9c0-84.7 66.8-153.3 149.3-153.3s149.3 68.5 149.3 153.3V288H320v176h64c35.4 0 64-29.3 64-65.7V245.1C448 136.2 362 48 256 48z"/>
                </svg>
                <h1 class="mx-3 text-white font-semibold text-lg">{{$article->title}}</h1>
            </div>
            <div class="py-4 px-6">
                <h1 class="text-2xl font-semibold text-gray-800">Patterson johnson</h1>
                <p class="py-2 text-lg text-gray-700">Full Stack maker & UI / UX Designer , love hip hop music Author of Building UI.</p>
                <div class="flex items-center mt-4 text-gray-700">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                        <path d="M256 32c-88.004 0-160 70.557-160 156.801C96 306.4 256 480 256 480s160-173.6 160-291.199C416 102.557 344.004 32 256 32zm0 212.801c-31.996 0-57.144-24.645-57.144-56 0-31.357 25.147-56 57.144-56s57.144 24.643 57.144 56c0 31.355-25.148 56-57.144 56z"/>
                    </svg>
                    <h1 class="px-2 text-sm">California</h1>
                </div>
            </div>
        </div>   
        @endforeach
        @endif
      </div>
  </div>
  <div class="w-full bottom-0 h-auto bg-gray-800 text-white">
        <div class="flex lg:flex-row flex-col justify-between gap-4 lg:gap-0 ml-10 lg:ml-0 p-6 lg:p-0">
            <div class="flex flex-col lg:m-20 lg:mr-20 lg:border-r-2 border-green-600 border-dashed pr-7 gap-2">
                <h1 class="text-xl font-bold text-white">Association</h1>
                <h1 class=" text-green-600">Siege: <span class="text-white"> Secteur 8 bmo meknes</span></h1>
                <h1 class=" text-green-600">Email: <span class="text-white"> email@email.com</span></h1>
                <h1 class=" text-green-600">Tel: <span class="text-white"> 0661536604</span></h1>
                <a class="bg-green-600 text-white hover:bg-white hover:text-green-600 p-5" href="#">Contactez-nous</a>
            </div>
            <div class="flex flex-col lg:m-20 gap-4">
                <h1 class="text-xl font-bold">A propos:</h1>
                <a class="text-green-600 hover:text-white" href="#">Nos Membre</a>
                <a class="text-green-600 hover:text-white" href="#">Mot du president</a>
                <a class="text-green-600 hover:text-white" href="#">Plan de l'annee en cours</a>
            </div>
            <div class="flex flex-col lg:m-20 gap-4">
                <h1 class="text-xl font-bold">Blogs:</h1>
                <a class="text-green-600 hover:text-white" href="/articles">Articles</a>
                <a class="text-green-600 hover:text-white" href="/articles">Activites</a>
            </div>
            <div class="flex flex-col lg:m-20 gap-4">
                <h1 class="text-xl font-bold">Donnez un coup de pouce:</h1>
                <a class="text-green-600 hover:text-white" href="#">Rejoindre l'association</a>
                <a class="text-green-600 hover:text-white" href="#">Fair un don</a>
            </div>
        </div>
        <div class="flex flex-row justify-between bg-gray-800 border-t-2 border-dotted p-5">
            <div class="lg:invisible"></div>
            <div class="text-xl text-center text-white">Copyrights: <a class="text-green-600 hover:text-white" href="">Associal</a> <span>2020/2021</span></div>
            <div class="flex flex-row gap-2">
                <div>fb</div>
                <div>tw</div>
                <div>ig</div>
            </div>
        </div>
  </div>
  <!-- component -->
<script>
    var clicked = 0;
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (clicked == 1)
        {
            x.classList.add("hidden");
            clicked = 0;
        }
        else
        {
            clicked = 1;
            x.classList.remove("hidden");
        }
    }
    </script>
</body>
</html>