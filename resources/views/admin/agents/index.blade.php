@extends('admin.admin')

@section('title')
    {{ 'Tous les Agents'}}
@endsection

@section('content')

<div class="flex justify-between">
    <h1 class="text-primary text-[2rem] font-bold">@yield('title')</h1>
    <a href="{{ route('admin.agent.create')}}" class="bg-primary rounded-lg text-white p-2 cursor-pointer">Ajouter un agent</a>
</div>
<div class="align-middle inline-block min-w-full bg-white shadow-lg rounded-sm border border-gray-200 my-6">
<table class="min-w-full table-auto">
    <thead class="w-full">
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal w-full">
            <th class="py-3 px-6 text-left">Name</th>
            <th class="py-3 px-6 text-left">Email</th>
            <th class="py-3 px-6 text-left">PhoneNumber</th>
            <th class="py-3 px-6 text-left">Image</th>
            <th class="py-3 px-6 text-left">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($agents as $agent)
            <tr>
                <td class="py-3 px-6 text-left">{{$agent->name}}</td>
                <td class="py-3 px-6 text-left">{{$agent->email}}</td>
                <td class="py-3 px-6 text-left">{{$agent->phone_number}}</td>
                <td class="py-3 px-6 text-left">
                    @if($agent->image)
                        <img src="{{$agent->imageUrl()}}" alt="Agent Image" width=50 height=50>
                    @endif
                </td>
                <td class="py-3 px-6 text-left">
                    <div class="flex gap-3">
                        <a href="{{route('admin.agent.edit', $agent)}}" class="rounded p-2 bg-yellow-200 text-yellow-600"> <x-icons.pencil-alt /></a>
                        <form action="{{ route('admin.agent.destroy', $agent)}}" method="post">
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


@endsection