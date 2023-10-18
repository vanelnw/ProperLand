@extends('base')

@section('content')
    <h1>{{$property->title}}</h1>
    <h2>{{$property->rooms}} pieces - {{$property->surface}}m</h2>
    <div class="font-bold text-3xl">
        {{number_format($property->price, thousands_separator:'')}}$
    </div>



    <div class="mt-5">
        <h4>Interesse par ce bien ?</h4>

        <form action="{{route('property.contact',['property' => $property])}}" method="post" class="">
            @csrf

            <div class="grid grid-cols-2 gap-2">
            @include('shared.input', ['label'=>'Nom','class'=>'flex flex-col', 'name'=> 'lastname', 'value'=>'john'])
            @include('shared.input', ['label'=>'Prenom','class'=>'flex flex-col', 'name'=> 'firstname', 'value'=>'doe'])
            </div>

            
            <div class="grid grid-cols-2 gap-2">
            @include('shared.input', ['label'=>'Email','class'=>'flex flex-col', 'type'=>'email', 'name'=> 'email', 'value'=>'john@gmail.com'])
            @include('shared.input', ['label'=>'Phone','class'=>'flex flex-col', 'name'=> 'phone', 'value'=>'678953412'])
            </div>

             <div>
            @include('shared.input', ['type'=>'textarea', 'label'=>'Votre message','class'=>'flex flex-col', 'name'=> 'message', 'value'=>'je suis interesse'])
            </div>


            <button class="bg-red-500 mt-3">
                contacter
            </button>

        </form>
    </div>


    <div class="mt-4">
        <p>{!! nl2br($property->description) !!}</p>
        <div class="grid grid-cols-2">
            <div class="col-span-8">
                <h2 class="font-bold text-3xl">caracteristiques</h2>
            </div>
            <div class="col-span-4">
                <h2 class="font-bold text-3xl">Specificites</h2>
                <ul>
                    @foreach($property->options as $option)
                        <li>{{$option->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endSection