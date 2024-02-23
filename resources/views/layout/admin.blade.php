<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- CSS -->
    <

    </head>
    <body class="font-sans antialiased">
        <!-- -->
        <div>   
            <!-- sidebar -->
            <aside>
                 <!-- logo -->
                 <div>
                    <div>
                        <a href="">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                        </a>
                        <span>Admin</span>
                    </div>
                    <button>
                    <i class="fa-solid fa-list"></i>
                    </button>
                 </div>
                 
                  <!-- enlaces de navetacion -->
                  <nav>

                  </nav>
            </aside>

            <!-- contenido principal -->
        <main>
            <nav></nav>
            <div>
              
            </div>
        </main>


        </div>
    </body>
</html>
