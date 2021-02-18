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
<!-- component -->
<div class="bg-gray-500 h-screen w-screen sm:px-8 md:px-16 sm:py-8">
    <main class="container mx-auto max-w-screen-lg h-full">
      <!-- file upload modal -->
      <form action="/createactivity" method="post" enctype="multipart/form-data">
        @csrf
      <article aria-label="File Upload Modal" class="relative h-full flex flex-col bg-white shadow-xl rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
        <!-- overlay -->
        <input class="m-4 p-4 rounded-xl" type="text" name="title">
        <input class="m-4 p-4 rounded-xl" type="date" name="date">
        <div id="overlay" class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
          <i>
            <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
            </svg>
          </i>
          <p class="text-lg text-blue-700">Drop files to upload</p>
        </div>

        <!-- scroll area -->
        <section class="h-full overflow-auto p-8 w-full h-full flex flex-col">
          <header class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
            <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
              <span>Drag and drop your</span>&nbsp;<span>files anywhere or</span>
            </p>
            <input id="hidden-input" type="file" class="hidden" multiple name="imageFile[]" />
            </form>
            <div id="button" class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
              Upload a file
            </div>
          </header>

          <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-900">
            To Upload
          </h1>

          <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
            <li id="empty" class="h-full w-full text-center flex flex-col items-center justify-center items-center">
              <img class="mx-auto w-32" src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png" alt="no data" />
              <span class="text-small text-gray-500">No files selected</span>
            </li>
          </ul>
        </section>

        <!-- sticky footer -->
        <footer class="flex justify-end px-8 pb-8 pt-4">
          <button id="submit" class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
            Upload now
          </button>
          <button id="cancel" class="ml-3 rounded-sm px-3 py-1 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
            Cancel
          </button>
          </form>
        </footer>
      </article>
    </main>
  </div>

  <!-- using two similar templates for simplicity in js code -->
  <template id="file-template">
    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
      <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
        <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

        <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
          <h1 class="flex-1 group-hover:text-blue-800"></h1>
          <div class="flex">
            <span class="p-1 text-blue-800">
              <i>
                <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                </svg>
              </i>
            </span>
            <p class="p-1 size text-xs text-gray-700"></p>
            <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
              <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
              </svg>
            </button>
          </div>
        </section>
      </article>
    </li>
  </template>

  <template id="image-template">
    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
      <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
        <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

        <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
          <h1 class="flex-1"></h1>
          <div class="flex">
            <span class="p-1">
              <i>
                <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                </svg>
              </i>
            </span>

            <p class="p-1 size text-xs"></p>
            <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
              <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
              </svg>
            </button>
          </div>
        </section>
      </article>
    </li>
  </template>
  <div class="user-image mb-3 text-center">
    <div class="imgPreview"> </div>
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
            const fileTempl = document.getElementById("file-template"),
            imageTempl = document.getElementById("image-template"),
            empty = document.getElementById("empty");
            
            // use to store pre selected files
            let FILES = {};
            
            // check if file is of type image and prepend the initialied
            // template to the target element
            function addFile(target, file) {
            const isImage = file.type.match("image.*"),
              objectURL = URL.createObjectURL(file);
            
            const clone = isImage
              ? imageTempl.content.cloneNode(true)
              : fileTempl.content.cloneNode(true);
            
            clone.querySelector("h1").textContent = file.name;
            clone.querySelector("li").id = objectURL;
            clone.querySelector(".delete").dataset.target = objectURL;
            clone.querySelector(".size").textContent =
              file.size > 1024
                ? file.size > 1048576
                  ? Math.round(file.size / 1048576) + "mb"
                  : Math.round(file.size / 1024) + "kb"
                : file.size + "b";
            
            isImage &&
              Object.assign(clone.querySelector("img"), {
                src: objectURL,
                alt: file.name
              });
            
            empty.classList.add("hidden");
            target.prepend(clone);
            
            FILES[objectURL] = file;
            }
            
            const gallery = document.getElementById("gallery"),
            overlay = document.getElementById("overlay");
            
            // click the hidden input of type file if the visible button is clicked
            // and capture the selected files
            const hidden = document.getElementById("hidden-input");
            document.getElementById("button").onclick = () => hidden.click();
            hidden.onchange = (e) => {
            for (const file of e.target.files) {
              addFile(gallery, file);
            }
            };
            
            // use to check if a file is being dragged
            const hasFiles = ({ dataTransfer: { types = [] } }) =>
            types.indexOf("Files") > -1;
            
            // use to drag dragenter and dragleave events.
            // this is to know if the outermost parent is dragged over
            // without issues due to drag events on its children
            let counter = 0;
            
            // reset counter and append file to gallery when file is dropped
            function dropHandler(ev) {
            ev.preventDefault();
            for (const file of ev.dataTransfer.files) {
              addFile(gallery, file);
              overlay.classList.remove("draggedover");
              counter = 0;
            }
            }
            
            // only react to actual files being dragged
            function dragEnterHandler(e) {
            e.preventDefault();
            if (!hasFiles(e)) {
              return;
            }
            ++counter && overlay.classList.add("draggedover");
            }
            
            function dragLeaveHandler(e) {
            1 > --counter && overlay.classList.remove("draggedover");
            }
            
            function dragOverHandler(e) {
            if (hasFiles(e)) {
              e.preventDefault();
            }
            }
            
            // event delegation to caputre delete events
            // fron the waste buckets in the file preview cards
            gallery.onclick = ({ target }) => {
            if (target.classList.contains("delete")) {
              const ou = target.dataset.target;
              document.getElementById(ou).remove(ou);
              gallery.children.length === 1 && empty.classList.remove("hidden");
              delete FILES[ou];
            }
            };
            
            // print all selected files
            document.getElementById("submit").onclick = () => {
            alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
            console.log(FILES);
            };
            
            // clear entire selection
            document.getElementById("cancel").onclick = () => {
            while (gallery.children.length > 0) {
              gallery.lastChild.remove();
            }
            FILES = {};
            empty.classList.remove("hidden");
            gallery.append(empty);
            };
            
            </script>
            
            <style>
            .hasImage:hover section {
            background-color: rgba(5, 5, 5, 0.4);
            }
            .hasImage:hover button:hover {
            background: rgba(5, 5, 5, 0.45);
            }
            
            #overlay p,
            i {
            opacity: 0;
            }
            
            #overlay.draggedover {
            background-color: rgba(255, 255, 255, 0.7);
            }
            #overlay.draggedover p,
            #overlay.draggedover i {
            opacity: 1;
            }
            
            .group:hover .group-hover\:text-blue-800 {
            color: #2b6cb0;
            }
            </style>
             <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        });    
    </script>
	</body>
</html>