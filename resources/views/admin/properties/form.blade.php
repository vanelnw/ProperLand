@extends('admin.admin')

@section('title')
    {{ $property->exists ? 'Editer un bien' : 'Ajouter un bien' }}
@endsection

@section('content')

    <h1>@yield('title')</h1>
    <form action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post">
        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="grid grid-cols-3 gap-2">
            @include('shared.input', ['label'=>'title','class'=>'flex flex-col', 'name'=> 'title', 'value'=>$property->title])
            @include('shared.input', ['label'=>'Surface','class'=>'flex flex-col', 'name'=> 'surface', 'value'=>$property->surface])
            @include('shared.input', ['label'=>'Prix','class'=>'flex flex-col', 'name'=> 'price', 'value'=>$property->price])
        </div>
        <div>
            @include('shared.input', ['type'=>'textarea', 'label'=>'Description','class'=>'flex flex-col', 'name'=> 'description', 'value'=>$property->description])
        </div>

        <div class="grid grid-cols-4 gap-2">
            @include('shared.input', ['label'=>'Pieces','class'=>'flex flex-col', 'name'=> 'rooms', 'value'=>$property->rooms])
            @include('shared.input', ['label'=>'Chambres','class'=>'flex flex-col', 'name'=> 'bedrooms', 'value'=>$property->bedrooms])
            @include('shared.input', ['label'=>'Toilettes','class'=>'flex flex-col', 'name'=> 'bathrooms', 'value'=>$property->bathrooms])
            @include('shared.input', ['label'=>'Etage','class'=>'flex flex-col', 'name'=> 'floor', 'value'=>$property->floor])
        </div>

      
        
        <div class="grid grid-cols-4 gap-2">
            @include('shared.input', ['label'=>'Ville','class'=>'flex flex-col', 'name'=> 'city', 'value'=>$property->city])
            @include('shared.input', ['label'=>'Address','class'=>'flex flex-col', 'name'=> 'address', 'value'=>$property->address])
            @include('shared.input', ['label'=>'code postal','class'=>'flex flex-col', 'name'=> 'postal_code', 'value'=>$property->postal_code])
        </div>

        @include('shared.select', ['label' => 'Opitons', 'name' => 'options', 'value' => $property->options()->pluck('id'), 'multiple'=>true, 'options'=>$options])

        @include('shared.select', ['label' => 'Agents', 'name' => 'agent_id', 'value' => $property->agent()->pluck('id'), 'multiple'=>false, 'options'=>$agents])

    <div class="flex gap-5">
        @include('shared.checkbox', ['label' => 'Vendu', 'class' => 'flex', 'name' => 'sold_or_rent', 'value' => $property->sold_or_rent])
        @include('shared.checkbox', ['label' => 'A vender', 'class' => 'flex', 'name' => 'for_sale', 'value' => $property->for_sale])
    </div>

        <div>
            <button class="bg-red-500">
                @if($property->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>

    </form>

@endsection