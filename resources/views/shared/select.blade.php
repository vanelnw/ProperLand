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
    <select class="h-12 px-4 py-1 rounded-md border border-gray-100 shadow-md text-gray-800 focus:outline-none p-1 " name="{{ $multiple ? $name.'[]' : $name }}" id={{$name}} {{$multiple ? 'multiple' : ''}}>
        <option value="" @if (empty($value) || (is_array($value) && empty($value))) selected @endif>Select an option</option>
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
