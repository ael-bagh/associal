<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased bg-gray-200">
        <div class="p-2 bg-white flex justify-between items-center">
            <div class="flex items-center"></div>
            <img class="h-24 w-24 inline-block p-4" src="https://codesign.com.bd/conversations/content/images/2020/03/Sprint-logo-design-Codesign-agency.png" alt="">
            <a class="font-extrabold inline-block p-2" href="/who">L'association</a>
            <a class="font-extrabold inline-block p-2" href="/activities">Activites</a>
            <a class="font-extrabold inline-block p-2" href="/blog">Nos articles</a>
        </div>
        <div>
            <a class="bg-green-300 text-white text-extrabold" href="">faire un don</a>
        </div>
    </body>
</html>
