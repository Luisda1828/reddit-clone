<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#0e1113] text-white px-4" >

<header class="flex justify-between py-4 fixed top-0 bg-[#0e1113] z-30 w-full border-0 border-b-[.0625rem] border-solid border-b-white border-opacity-10">
        <div class="flex gap-1 items-center ml-4">
            <span class="size-12">
                <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0" />
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                    <g id="SVGRepo_iconCarrier">
                        <path d="M16 2C8.27812 2 2 8.27812 2 16C2 23.7219 8.27812 30 16 30C23.7219 30 30 23.7219 30 16C30 8.27812 23.7219 2 16 2Z" fill="#FFD700 " />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0193 8.90951C20.0066 8.98984 20 9.07226 20 9.15626C20 10.0043 20.6716 10.6918 21.5 10.6918C22.3284 10.6918 23 10.0043 23 9.15626C23 8.30819 22.3284 7.6207 21.5 7.6207C21.1309 7.6207 20.7929 7.7572 20.5315 7.98359L16.6362 7L15.2283 12.7651C13.3554 12.8913 11.671 13.4719 10.4003 14.3485C10.0395 13.9863 9.54524 13.7629 9 13.7629C7.89543 13.7629 7 14.6796 7 15.8103C7 16.5973 7.43366 17.2805 8.06967 17.6232C8.02372 17.8674 8 18.1166 8 18.3696C8 21.4792 11.5817 24 16 24C20.4183 24 24 21.4792 24 18.3696C24 18.1166 23.9763 17.8674 23.9303 17.6232C24.5663 17.2805 25 16.5973 25 15.8103C25 14.6796 24.1046 13.7629 23 13.7629C22.4548 13.7629 21.9605 13.9863 21.5997 14.3485C20.2153 13.3935 18.3399 12.7897 16.2647 12.7423L17.3638 8.24143L20.0193 8.90951ZM12.5 18.8815C13.3284 18.8815 14 18.194 14 17.3459C14 16.4978 13.3284 15.8103 12.5 15.8103C11.6716 15.8103 11 16.4978 11 17.3459C11 18.194 11.6716 18.8815 12.5 18.8815ZM19.5 18.8815C20.3284 18.8815 21 18.194 21 17.3459C21 16.4978 20.3284 15.8103 19.5 15.8103C18.6716 15.8103 18 16.4978 18 17.3459C18 18.194 18.6716 18.8815 19.5 18.8815ZM12.7773 20.503C12.5476 20.3462 12.2372 20.4097 12.084 20.6449C11.9308 20.8802 11.9929 21.198 12.2226 21.3548C13.3107 22.0973 14.6554 22.4686 16 22.4686C17.3446 22.4686 18.6893 22.0973 19.7773 21.3548C20.0071 21.198 20.0692 20.8802 19.916 20.6449C19.7628 20.4097 19.4524 20.3462 19.2226 20.503C18.3025 21.1309 17.1513 21.4449 16 21.4449C15.3173 21.4449 14.6345 21.3345 14 21.1137C13.5646 20.9621 13.1518 20.7585 12.7773 20.503Z" fill="white" />
                    </g>4 18.8815 14 18.194 14 17.3459C14 16.4978 13.3284 15.8103 12.5 15.8103C11.6716 15.8103 11 16.4978 11 17.3459C11 18.194 11.6716 18.8815 12.5 18.8815ZM19.5 18.8815C20.3284 18.8815 21 18.194 21 17.3459C21 16.4978 20.3284 15.8103 19.5 15.8103C18.6716 15.8103 18 16.4978 18 17.3459C18 18.194 18.6716 18.8815 19.5 18.8815ZM12.7773 20.503C12.5476 20.3462 12.2372 20.4097 12.084 20.6449C11.9308 20.8802 11.9929 21.198 12.2226 21.3548C13.3107 22.0973 14.6554 22.4686 16 22.4686C17.3446 22.4686 18.6893 22.0973 19.7773 21.3548C20.0071 21.198 20.0692 20.8802 19.916 20.6449C19.7628 20.4097 19.4524 20.3462 19.2226 20.503C18.3025 21.1309 17.1513 21.4449 16 21.4449C15.3173 21.4449 14.6345 21.3345 14 21.1137C13.5646 20.9621 13.1518 20.7585 12.7773 20.503Z" fill="white"/> </g>
                </svg>
            </span>
            <span class="text-[1.5rem] font-bold ">Golddit</span>
        </div>

        <span class="hidden sm:flex px-4 gap-2 relative bg-[#2a3236] rounded-full w-[33%]">
            <button>
                <svg class="" rpl="" aria-hidden="true" fill="currentColor" height="16" icon-name="search-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5 18.616 14.985 14.1a8.528 8.528 0 1 0-.884.884l4.515 4.515.884-.884ZM1.301 8.553a7.253 7.253 0 1 1 7.252 7.253 7.261 7.261 0 0 1-7.252-7.253Z"></path>
                </svg>
            </button>
            <input class="bg-transparent border-none focus:outline-none w-full" type="text" name="q" placeholder="Search Golddit">
        </span>

        <span class="flex gap-2 mr-10 relative items-center px-4 py-2 hover:bg-[#2a3236] duration-200 rounded-full">
            <a slot="full-post-link" class="absolute inset-0" href="{{ route('posts.create') }}"></a>
            <svg class="" rpl="" fill="currentColor" height="20" icon-name="add-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 9.375h-8.375V1h-1.25v8.375H1v1.25h8.375V19h1.25v-8.375H19v-1.25Z"></path>
            </svg>
            <span class="">Crear</span>
        </span>
    </header>
<section class="flex flex-col m-auto max-w-[800px] justify-center items-center mt-40 ">

    <form class="w-full " action="{{ route('posts.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$data->id}}">
            <div>
            <div class="mt-2 mb-2">
                    <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-white dark:text-white">Update Post</label>
                       
                    </div>
                </div>
                
                <div class="mt-2 mb-2">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-white dark:text-white">Title</label>
                        <textarea id="myTextarea" class="ring-[.0625rem] ring-white ring-opacity-10 rounded-2xl px-3 py-1 text-white resize-none overflow-hidden w-full bg-transparent " name="title" maxlength="300" >{{$data->title}}</textarea> 
                    </div>
                </div>
                <div class="mt-2 mb-2">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-white dark:text-white">Content</label>
                        <textarea id="myTextarea" class="ring-[.0625rem] ring-white ring-opacity-10 rounded-2xl px-3 py-1 text-white resize-none overflow-hidden w-full h-52 bg-transparent " name="content" maxlength="300">{{$data->content}}</textarea>
                             
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Update</button>
                </div>
                
                
            </div>
        </form>
</section>
</body>


<script>
        document.addEventListener('DOMContentLoaded', function() {
            const textarea = document.getElementById('myTextarea');

            textarea.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = (this.scrollHeight) + 'px';
            });

            // Inicialmente ajustar la altura
            textarea.style.height = 'auto';
            textarea.style.height = (textarea.scrollHeight) + 'px';
        });
    </script>

</html>