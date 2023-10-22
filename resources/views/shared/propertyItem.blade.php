@php
    $number ??= '';
    $label ??= null;
    $title ??= 'text';
    $class ??= null;
@endphp

<div class="bg-white p-4 rounded-md w-full">
    <img src="{{ asset('storage/images/introImage.png') }}" alt="home-image" class="object-cover w-full h-52">
    <div class="flex justify-between items-center py-3">
        <span class="text-secondary font-bold text-[1.3rem]">$3500/Mo</span>
        @include('shared.button', ['label'=> 'For sale', 'class'=>'bg-secondary text-black'])
    </div>
    <p class="text-primary font-semibold text-[1rem] tracking-[0] leading-[29.6px]">Comefortable Appartment</p>
    <p class="flex  items-center mb-2"> 
        <img src="{{ asset('storage/images/locationIcon.png') }}" alt="location-icon" class="object-contain w-4 h-4">
        <span class="font-normal text-[#8e8e8e] text-[.7rem] tracking-[0] leading-[23.7px]">709 West Drive Chicago, IL 60606</span>
    </p>

    <div class="flex justify-between mt-3"> 
        <div class="border border-[#8e8e8e] text-[#8e8e8e] text-[.7rem] w-fit p-1 rounded">
            <i class="fa-regular fa-house"></i>  | 3 rooms
        </div>          
        <div class="border border-[#8e8e8e] text-[#8e8e8e] text-[.7rem] w-fit p-1 rounded">
            <i class="fa fa-bed"></i>  | 3 beds
        </div>

        <div class="border border-[#8e8e8e] text-[#8e8e8e] text-[.7rem] w-fit p-1 rounded">
        <i class="fa fa-bath"></i>  | 2 baths
        </div>
        <div class="border border-[#8e8e8e] text-[#8e8e8e] text-[.7rem] w-fit p-1 rounded">
            <i class="fa fa-car"></i>  | 1 parking
        </div>
    </div>
</div>