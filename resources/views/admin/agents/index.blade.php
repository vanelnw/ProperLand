@extends('admin.admin')

@section('title')
    {{ 'Tous les Agents'}}
@endsection

@section('content')

<div class="flex justify-between">
    <h1>@yield('title')</h1>
    <a href="{{ route('admin.agent.create')}}" class="bg-blue-300 text-white p-3 cursor-pointer">Ajouter un agent</a>
</div>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>PhoneNumber</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach($agents as $agent)
            <tr>
                <td>{{$agent->name}}</td>
                <td>{{$agent->email}}</td>
                <td>{{$agent->phone_number}}</td>
                <td>
                    @if($agent->image)
                        <img src="{{$agent->imageUrl()}}" alt="Agent Image" width=50 height=50>
                    @endif
                </td>
                <td>
                    <div class="flex gap-3">
                        <a href="{{route('admin.agent.edit', $agent)}}" class="rounded p-2 bg-blue-500"> Editer</a>
                        <form action="{{ route('admin.agent.destroy', $agent)}}" method="post">
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