@php
    $number ??= '';
    $label ??= null;
    $title ??= 'text';
    $class ??= null;
    $witharrow ??= false;
@endphp

<a href="" @class(["px-5 py-1 flex items-center gap-2 rounded shadow",$class])>
    {{$label}}
    @if($witharrow)
        <div class="bg-secondary flex items-center justify-center p-1 rounded-full text-white text-[.5rem]">
           <i class="fa fa-bath"></i> 
        </div>
    @endif
</a>