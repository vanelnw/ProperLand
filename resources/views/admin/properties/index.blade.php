@extends('admin.admin')

@section('title')
    {{ 'Tous les biens'}}
@endsection

@section('content')

<div class="flex justify-between">
    <h1 class="text-primary text-[2rem] font-bold">@yield('title')</h1>
    <a href="{{ route('admin.property.create')}}" class="bg-primary rounded-lg text-white p-2 cursor-pointer">Ajouter un bien</a>
</div>
<div class="align-middle inline-block min-w-full bg-white shadow-lg rounded-sm border border-gray-200 my-6">
    <div class="overflow-x-auto">
<table class="min-w-full table-auto">
    <thead class="w-full">
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal w-full">
            <th class="py-3 px-6 text-left">Titre</th>
            <th class="py-3 px-6 text-left">Surface</th>
            <th class="py-3 px-6 text-left">Prix</th>
            <th class="py-3 px-6 text-left">city</th>
            <th class="py-3 px-6 text-left">images</th>
            <th class="py-3 px-6 text-left">Action</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 text-sm font-light">
        @foreach($properties as $property)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left">{{$property->title}}</td>
                <td class="py-3 px-6 text-left">{{$property->surface}}m</td>
                <td class="py-3 px-6 text-left">{{number_format($property->price, thousands_separator: ' ')}}</td>
                <td class="py-3 px-6 text-left">{{$property->city}}</td>
                <td class='py-3 px-6 text-left flex gap-2'>
                @foreach($property->images as $image)


        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Property Image" width=50 height=50>
    @endforeach
</td>
                <td class="py-3 px-6 text-left">
                    <div class="flex gap-3">
                        <a href="{{route('admin.property.edit', $property)}}" class="rounded p-2 bg-yellow-200 text-yellow-600"> <x-icons.pencil-alt /></a>
                        <form action="{{ route('admin.property.destroy', $property)}}" method="post">
                            @csrf 
                            @method('delete')
                            <button class="rounded p-2 bg-red-300 text-red-500" ><x-icons.trash /></button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
<!-- {{ $properties->links()}} -->

@endsection