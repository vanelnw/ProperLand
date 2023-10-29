@extends('admin.admin')

@section('title')
    {{ $property->exists ? 'Editer un bien' : 'Ajouter un bien' }}
@endsection

@section('content')

    <h1 class="text-primary text-[2rem] font-bold">@yield('title')</h1>
    <form action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post" enctype="multipart/form-data" >
        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="grid grid-cols-4 gap-2">
            @include('shared.input', ['label'=>'title','class'=>'flex flex-col', 'name'=> 'title', 'value'=>$property->title])
            @include('shared.input', ['label'=>'Surface','class'=>'flex flex-col', 'name'=> 'surface', 'value'=>$property->surface])
            @include('shared.input', ['label'=>'Prix','class'=>'flex flex-col', 'name'=> 'price', 'value'=>$property->price])
            <div class="flex flex-col ">
                <label class="text-black" for='status'}>Status</label>
                <select class="h-12 px-4 py-1 rounded-md border border-gray-100 shadow-md text-gray-800 focus:outline-none p-1" name="status" class="form-control">
                    @foreach(["0" => "Select status","For sale" => "For sale", "For Rent" => "For Rent"] as $value => $label)
                        <option @selected($property->status === $value) value="{{ $value }}">{{ $label }}</option>
                    @endforeach
                </select>
                @error("status")
                <div class='text-red-400 text-sm'>
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="grid grid-cols-4 gap-2">
            @include('shared.input', ['label'=>'Pieces','class'=>'flex flex-col', 'name'=> 'rooms', 'value'=>$property->rooms])
            @include('shared.input', ['label'=>'Chambres','class'=>'flex flex-col', 'name'=> 'bedrooms', 'value'=>$property->bedrooms])
            @include('shared.input', ['label'=>'Toilettes','class'=>'flex flex-col', 'name'=> 'bathrooms', 'value'=>$property->bathrooms])
            @include('shared.input', ['label'=>'Etage','class'=>'flex flex-col', 'name'=> 'floor', 'value'=>$property->floor])
        </div>

        <div>
            @include('shared.input', ['type'=>'textarea', 'label'=>'Description','class'=>'flex flex-col', 'name'=> 'description', 'value'=>$property->description])
        </div>
        
        <div class="grid grid-cols-4 gap-2">
            @include('shared.input', ['label'=>'Ville','class'=>'flex flex-col', 'name'=> 'city', 'value'=>$property->city])
            @include('shared.input', ['label'=>'Address','class'=>'flex flex-col', 'name'=> 'address', 'value'=>$property->address])
            @include('shared.input', ['label'=>'code postal','class'=>'flex flex-col', 'name'=> 'postal_code', 'value'=>$property->postal_code])
        </div>

        @include('shared.select', ['label' => 'Opitons', 'name' => 'options', 'value' => $property->options()->pluck('id'), 'multiple'=>true, 'options'=>$options])

        @include('shared.select', ['label' => 'Agents', 'name' => 'agent_id', 'value' => $property->agent()->pluck('id'),'options'=>$agents,'class'=>'flex flex-col'])

    <div class="flex">
        <div>
            <label for="thumbnail">Main Thumbnail:</label>
            <input type="file" name="thumbnail" id="thumbnail"  accept="image/*">
                @error("thumbnail")
                <div class='text-red-400 text-sm'>
                    {{$message}}
                </div>
                @enderror
        </div>

        <div>
            <label for="images">Images (Select multiple):</label>
            <input type="file" name="images[]" id="images" multiple accept="image/*">
        </div>
    </div>


        <div>
            <button class="bg-red-500 px-2 py-1 rounded-sm mt-2">
                @if($property->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>

    </form>

@endsection