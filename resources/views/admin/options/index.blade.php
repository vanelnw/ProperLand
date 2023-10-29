@extends('admin.admin')

@section('title')
    {{ 'Toutes les options'}}
@endsection

@section('content')
    <div class="flex justify-between">
        <h1 class="text-primary text-[2rem] font-bold">@yield('title')</h1>
        <a href="{{ route('admin.option.create')}}" class="bg-primary rounded-lg text-white p-2 cursor-pointer">Ajouter une option</a>
    </div>

    <table class="max-w-full table-auto">
    <thead class="w-full">
        <tr>
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Name</th>
            <th class="py-3 px-6 text-left">Ations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($options as $option)
            <tr>
                <td class="py-3 px-6 text-left">{{$option->id}}</td>
                <td class="py-3 px-6 text-left">{{$option->name}}</td>
                <td class="py-3 px-6 text-left">
                    <div class="flex gap-3">
                        <a href="{{route('admin.option.edit', $option)}}" class="rounded p-2 bg-yellow-200 text-yellow-600"> <x-icons.pencil-alt /></a>
                        <form action="{{ route('admin.option.destroy', $option)}}" method="post">
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
@endsection