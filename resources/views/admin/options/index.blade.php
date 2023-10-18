@extends('admin.admin')

@section('title')
    {{ 'Toutes les options'}}
@endsection

@section('content')
    <div class="flex justify-between">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.option.create')}}" class="bg-blue-300 text-white p-3 cursor-pointer">Ajouter une option</a>
    </div>

    <table>
    <thead>
        <tr>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($options as $option)
            <tr>
                <td>{{$option->name}}</td>
                <td>
                    <div class="flex gap-3">
                        <a href="{{route('admin.option.edit', $option)}}" class="rounded p-2 bg-blue-500"> Editer</a>
                        <form action="{{ route('admin.option.destroy', $option)}}" method="post">
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
@endsection