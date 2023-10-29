<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite('resources/css/app.css')
     <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>@yield('title') | Administration</title>
</head>
<body>
     <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
        <!-- Sidebar -->
        @include('admin._layouts.sidebar')
            
        <div class="flex-1 flex flex-col overflow-hidden">
            @include('admin._layouts.header')

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    @yield('content')
                </div>
            </main>
        </div>
     </div>

    <div class="container mt-5">
        
        @if(session('success'))
            <div class="bg-green-400 text-black">
                {{session('success')}}
            </div>
        @endif

        @if($errors->any())
          <div class='p-3 bg-red-400 rounded-md' >
            <ul class='my-0'>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
          </div>
        @endif
    </div>

    <script>
        new TomSelect('select[multiple]', {plugins: {remove_button:{title:'supprimer'}}})
    </script>
</body>
</html>