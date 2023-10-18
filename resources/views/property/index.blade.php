@extends('base')

@section('content')
    
    <div class="bg-slite-200">
        <form action="" method="" class="container flex gap-2 p-5">
            <input type="number" placeholder="Budget max" class="border border-gray-400 rounded" name="price" value="{{$input['price'] ?? ""}}">
            <input type="number" placeholder="Surface min" class="border border-gray-400 rounded" name="surface" value="{{$input['surface'] ?? ""}}">
            <input type="number" placeholder="Nbre de piece min" class="border border-gray-400 rounded" name="rooms" value="{{$input['rooms'] ?? ""}}">
            <input type="text" placeholder="mot-cle" class="border border-gray-400 rounded" name="title" value="{{$input['title'] ?? ""}}">
            <button class="flex-grow-0 bg-blue-500 p-1 rounded">rechercher</button>
        </form>
    </div>

    <div class="container">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @forelse($properties as $property)
        <div class="bg-gray-700 p-4">
            @include("property.card")
        </div>

        @empty
         <div class="bg-gray-700 p-4">
            <p class='text-white'>Aucun biens ne correspomd a votre recherche</p>
        </div>
        @endforelse
    </div>
    </div>

    <div class="my-4">
        {{ $properties->links() }}
    </div>
@endsection