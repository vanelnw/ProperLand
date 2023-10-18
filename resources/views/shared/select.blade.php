@php 
$label ??= null;
$class ??= null;
$name  ??= '';
$value ??= '';
$multiple ??= false;
$options ??= [];
@endphp

<div @class(["form", $class])>
    <label class="text-black" for={{$name}}>{{$label}}</label>
    <select name="{{ $multiple ? $name.'[]' : $name }}" id={{$name}} multiple={{$multiple}}>
        @foreach($options as $k => $v)
            <option @selected($value->contains($k)) value={{$k}}>{{$v}}</option>
        @endforeach
    </select>
    @error($name)
    <div class='text-red-400 text-sm'>
        {{$message}}
    </div>
    @enderror
</div>
