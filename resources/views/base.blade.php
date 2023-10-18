<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite('resources/css/app.css')
     <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <title>@yield('title') | Administration</title>
</head>
<body>
    <section class="relative mx-auto">
        <nav class="flex justify-between bg-gray-900 text-white w-screen">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                <a class="text-3xl font-bold font-heading" href="#">
                <!-- <img class="h-9" src="logo.png" alt="logo"> -->
                Logo Here.
                </a>
                <!-- Nav Links -->

                @php
                    $route = request()->route()->getName();
                @endphp
                
                <ul class="flex px-4 mx-auto font-semibold font-heading space-x-12 text-white">
                    <li><a href='' class="hover:text-gray-200 ">home</a></li>
                    <li><a href={{route('property.index')}} @class(['hover:text-gray-200','text-red-500'=> str_contains($route, 'property.')]) ">Les biens</a></li>
                    <li><a href={{route('admin.property.index')}} @class(['hover:text-gray-200','text-red-500'=> str_contains($route, 'property.')]) href="#">properties</a></li>
                    <li><a href={{route('admin.option.index')}} @class(['hover:text-gray-200','text-red-500'=> str_contains($route, 'option.')]) >Options</a></li>
                    <li><a href={{route('admin.agent.index')}} @class(['hover:text-gray-200','text-red-500'=> str_contains($route, 'agent.')]) >Agents</a></li>
                    <li><a class="hover:text-gray-200" href="#">Contact Us</a></li>
                </ul>
            </div>
         </nav>
    </section>      
    
        @yield('content')
    
</body>
</html>