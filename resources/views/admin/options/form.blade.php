@extends('admin.admin')

@section('title')
    {{ $option->exists ? 'Editer une option' : 'Ajouter une option' }}
@endsection

@section('content')

     <div class="max-w-lg mx-auto">
    <h1 class="text-primary text-[2rem] font-bold mb-3">@yield('title')</h1>
    <form action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}" method="post">
        @csrf
        @method($option->exists ? 'put' : 'post')

    
        @include('shared.input', ['label'=>'Name','class'=>'flex flex-col', 'name'=> 'name', 'value'=>$option->name])


        <div>
            <button class="bg-red-500 px-2 py-1 rounded-sm mt-2 ">
                @if($option->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>

    </form>
</div>

@endsection