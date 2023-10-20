@extends('base')

@section('title')
    {{'se Connecter'}}
@endsection

@section('content')
   <div class="mt-4">
    <h1>@yield('title')</h1>
    
    <form action="{{route('login')}}" method='post'>
        @csrf

        @include('shared.input', ['label'=>'Email','class'=>'flex flex-col', 'type'=>'email', 'name'=> 'email'])
        @include('shared.input', ['label'=>'Mot de passe','class'=>'flex flex-col', 'type'=>'password', 'name'=> 'password'])

        <button class="bg-red-500 mt-3">
            se connecter
        </button>
    </form>
   </div>
@endsection