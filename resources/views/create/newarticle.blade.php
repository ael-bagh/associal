<!DOCTYPE HTML>
<html>
	<head>
		<title>Name :</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
	</head>
	<body class="bg-gray-100">
        <!-- header -->
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
                <a href="" class="m-2">Espace membre</a>
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
        <!-- alert -->
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
        @endif
        <!-- body -->
        <form action="/storearticle" method="POST" enctype="multipart/form-data">
        <div class="flex flex-col m-10 p-4 gap-4 bg-white">
                @csrf
                <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                    <div class="absolute">
                        <div class="flex flex-col items-center "> <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> <span class="block text-gray-400 font-normal">Choisissez une couverture pour l'article</span> <span class="block text-gray-400 font-normal">or</span> <span class="block text-blue-400 font-normal">Browse files</span> </div>
                    </div> <input type="file" class="h-full w-full opacity-0" name="cover" id="file">
                </div>
                <div class="flex justify-between items-center text-gray-400"> <span>type: image uniquement</span> <span class="flex items-center "></span></div>
                <input class="focus:ring-2 ring-offset-green-500" type="text" name="title" id="" placeholder="Titre">
                <input class="focus:ring-2 ring-offset-green-500" type="text" name="subtitle" placeholder="Soustitle">
                <textarea class="ckeditor" id="editor1" name="content"></textarea>
                <button class="p-4 bg-green-500 hover:bg-green-700" type="submit">create</button>
        </div>
        </form>
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
        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
	</body>
</html>