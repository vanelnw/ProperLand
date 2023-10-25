@php
    $number ??= '';
    $label ??= null;
    $title ??= 'text';
    $class ??= null;
@endphp

<div @class(["", $class])>
    <h2 class="font-normal text-[.8rem] tracking-[6.00px] leading-[38.5px]">
        |<span class="text-secondary">{{ $number }}</span> <span class="text-primary">{{ $label }}</span>|
    </h2>
    <h1 class="text-primary font-bold text-[2.2rem] tracking-[0] leading-[43.3px]">{{$text}}</h1>
</div>