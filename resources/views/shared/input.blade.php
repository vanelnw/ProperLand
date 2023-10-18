@php 
$label ??= null;
$type ??= 'text';
$class ??= null;
$name  ??= '';
$value ??= '';
@endphp

<div @class(["form", $class])>
    <label class="text-black" for={{$name}}>{{$label}}</label>
    @if($type === 'textarea')
       <textarea class="border border-gray-700 @error($name) border-red-700 @enderror" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" >{{ old($name, $value) }}"</textarea>
    @else
        <input class="border border-gray-700 @error($name) border-red-700 @enderror" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}">
    @endif
    @error($name)
    <div class='text-red-400 text-sm'>
        {{$message}}
    </div>
    @enderror
</div>