@extends('admin.admin')

@section('title')
    {{ $agent->exists ? 'Editer un Agent' : 'Ajouter un Agent' }}
@endsection

@section('content')

    <h1>@yield('title')</h1>
    <form action="{{ route($agent->exists ? 'admin.agent.update' : 'admin.agent.store', $agent) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method($agent->exists ? 'put' : 'post')

        <div class="grid grid-cols-3 gap-2">
            @include('shared.input', ['label'=>'Name','class'=>'flex flex-col', 'name'=> 'name', 'value'=>$agent->name])
            @include('shared.input', ['label'=>'Email','class'=>'flex flex-col', 'name'=> 'email', 'value'=>$agent->email])
            @include('shared.input', ['label'=>'Phone Number','class'=>'flex flex-col', 'name'=> 'phone_number', 'value'=>$agent->phone_number])
        </div>
        <div>
            @include('shared.input', ['type'=>'textarea', 'label'=>'Bio','class'=>'flex flex-col', 'name'=> 'bio', 'value'=>$agent->bio])
        </div>

        <div>
            <label for="">Image</label>
            <input type="file" id='image' name="image">
            @error('image')
               {{message}}
            @enderror
        </div>    
        

        <div>
            <button class="bg-red-500">
                @if($agent->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>

    </form>

@endsection