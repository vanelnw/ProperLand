<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
        <section class="relative mx-auto">
        <div class="relative hero  md:h-[60vh] bg-gradient-to-r from-[#FFF6F2] to-[#EEC1AC] pt-1 text-primary">
            <div class="absolute top-0 md:top-16 w-full">
                @include('shared.header')
            </div>
 

    <div class="max-w-3xl mx-auto flex mt-28 md:mt-0 flex-col md:flex-row md:items-end  md:h-[60vh]">
        <div class="w-full md:w-2/3 flex items-end h-full">
            <div class="flex flex-col justify-end p-6 rounded-sm lg:max-w-md xl:max-w-lg text-left gap-4">
            <div class="flex items-center gap-2 w-fit rounded-sm bg-gradient-to-r from-[rgba(255,177.69,141.31,0)] to-[#F3D1C1] p-1" >
                <img src="{{ asset('storage/images/homeIcon.png') }}" alt="home-image" class="w-5 h-5 object-contain" />
                <span class="text-link text-[.8rem] tracking-[5.50px] leading-[10.7px]">Singling Agent</span>
            </div>
            <h1 class="text-3xl leadi sm:text-4xl font-bold text-prinary">Elena Gilberts</h1>
            <p class="text-link text-[.8rem] ">
                Distinctively re-engineer revolutionary meta-services and premium 
                At vero eos et accusamus et iusto
                <br/>
                <br/>       
                Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <div class=" rounded-sm text-[.8rem] text-link">
                <p><span class=" font-bold mr-1"><i class="fa fa-envelope"></i></span> anne-hathaway@mail.com</p>
                <p><span class=" font-bold mr-1"><i class="fa fa-phone" ></i></span> +1 719-504-1984</p>
            </div>
        </div>
        </div>
        <div class="w-full md:w-1/3 p-5 h-80 shadow-lg bg-gradient-to-b from-[#EEC1AC] to-[#FFF6F2] md:-mb-20">
            <img src="{{ asset('storage/images/agents/agentImage.png') }}" alt="home-image" class="w-full h-full object-fill" />
        </div>
    </div>
    <div class="flex gap-10 p-7 max-w-3xl mx-auto">
        <div class="text-center">
            <p class="text-[1rem]">6,180</p>
            <p class="text-[.6rem] text-link">In property sales</p>
        </div>
                <div class="text-center">
            <p class="text-[1rem]">99%</p>
            <p class="text-[.6rem] text-link">Cutomer satisfaction</p>
        </div>
                <div class="text-center">
            <p class="text-[1rem]">25K+</p>
            <p class="text-[.6rem] text-link">Property Transaction</p>
        </div>
    </div>
</section>
     <section class="bg-[#F5F1EF] py-28 flex items-center justify-center">
        <div class="container mx-auto px-6 pt-16 pb-16 flex flex-col items-center justify-center">
            @include('shared.sectionTitle', ['number'=>'02', 'label'=>'Featured properties', 'text'=>'Properties for sale in your favorite area', 'class'=>'text-center max-w-md'])
            <div class="w-full mt-5 grid grid-cols-1 md:grid-cols-2 gap-3 z-[100]">
                @include('shared.propertyItem', ['class'=>'bg-[#F5F1EF]'])
                @include('shared.propertyItem', ['class'=>'bg-[#F5F1EF]'])
                @include('shared.propertyItem', ['class'=>'bg-[#F5F1EF]'])
                @include('shared.propertyItem', ['class'=>'bg-[#F5F1EF]'])
            </div>
            <div class="w-96 h-56 -mt-20 flex items-center justify-center rounded-t-full bg-gradient-to-t from-[rgba(255,177.69,141.31,0)] to-[#F3D1C1] p-3" >
                @include('shared.button', ['witharrow'=>'true','label'=> 'Touch With Us', 'class'=>'bg-white text-black mt-20'])
            </div>
        </div>

     </section>
</body>
</html>