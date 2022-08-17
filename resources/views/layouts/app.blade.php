<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} : {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Flowbite -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <div class="flex flex-row min-h-screen bg-gray-100">
        <!-- Sidebar layout -->
        @include('layouts.sidebar')
        <!-- Page Content -->
        <main id="main-content" class="flex-1 ml-64 transition-all duration-500 ease-in-out">
            <!-- Navbar layout -->
            @include('layouts.navigation')
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            <!-- Page Content -->
            <div class="main-content flex flex-col flex-grow p-4 ">

                {{ $slot }}
            </div>
        </main>
    </div>
    <style>
        @media (max-width: 639px) {
            #sidebar-menu {
                display: none;
            }

            #main-content {
                margin-left: 0;
            }

            #logo-nav {
                display: inline;
            }

            #sidebar-toggle-conteiner {
                display: none;
            }
        }
    </style>
    <!-- Flowbite script -->
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <!-- Scripts -->
    <script>
        function sidebarToggle() {
            document.getElementById("sidebar-menu").classList.toggle("translate-y-full");
            document.getElementById("sidebar-menu").classList.toggle("invisible");
            document.getElementById("main-content").classList.toggle("ml-64");
        }
    </script>

    <script>
        // function updateFormSettings(id, current_name, current_email, action){
        //     document.getElementById("update-form").action = action + "/" + id;
        //     document.getElementById("name_edit").value = current_name; 
        //     document.getElementById("email_edit").value = current_email; 
        //     let row_id = document.getElementById("user_id"); 
        //     //action_update_form = action;
        //     row_id.innerHTML = id;
        // }
    </script>
</body>

</html>
