@extends('admin.admin')

@section('title')
    {{ 'Tous les biens'}}
@endsection

@section('content')

<div class="flex justify-between">
    <h1>@yield('title')</h1>
    <a href="{{ route('admin.property.create')}}" class="bg-blue-300 text-white p-3 cursor-pointer">Ajouter un bien</a>
</div>
<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Surface</th>
            <th>Prix</th>
            <th>city</th>
            <th>images</th>
        </tr>
    </thead>
    <tbody>
        @foreach($properties as $property)
            <tr>
                <td>{{$property->title}}</td>
                <td>{{$property->surface}}m</td>
                <td>{{number_format($property->price, thousands_separator: ' ')}}</td>
                <td>{{$property->city}}</td>
                <td class='flex gap-2'>
                @foreach($property->images as $image)


        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Property Image" width=50 height=50>
    @endforeach
</td>
                <td>
                    <div class="flex gap-3">
                        <a href="{{route('admin.property.edit', $property)}}" class="rounded p-2 bg-blue-500"> Editer</a>
                        <form action="{{ route('admin.property.destroy', $property)}}" method="post">
                            @csrf 
                            @method('delete')
                            <button class="rounded p-2 bg-red-500 text-black" >Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $properties->links()}}

@endsection