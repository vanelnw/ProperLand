<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="relative hero h-[60vh] bg-gradient-to-r from-[#FFF6F2] to-[#EEC1AC] pt-1 text-primary">
        <div class="absolute top-0 md:top-10 w-full z-20">
            @include('shared.header')
        </div>
        <div class="container mx-auto flex flex-col justify-center gap-3 h-full pt-20 ">
            <div class="flex items-center gap-2 w-fit rounded-sm bg-gradient-to-r from-[rgba(255,177.69,141.31,0)] to-[#F3D1C1] p-2" >
                <img src="{{ asset('storage/images/homeIcon.png') }}" alt="home-image" class="w-6 h-6 object-contain" />
                <span class="text-link text-[18px] tracking-[5.50px] leading-[23.7px]">PROPERTIES</span>
            </div>
            <h1 class="text-3xl leadi sm:text-4xl font-bold text-prinary">Browse <br/> properties</h1>
        </div>

        <div class="absolute bottom-0 right-0 w-1/2 h-full z-1">
            <img src="{{ asset('storage/images/properties/propertyImage.png') }}" alt="home-image" class="w-full h-full object-fill" />
        </div>
    </div>


    <section class="bg-[#F5F1EF] py-10 flex items-center justify-center">
        <div class="container mx-auto px-6 pt-16 pb-16 flex flex-col items-center justify-center">
            @include('shared.sectionTitle', ['number'=>'01', 'label'=>'PROPERTIES', 'text'=>'Properties for sale in your favorite area', 'class'=>'text-center max-w-md'])
            <div class="w-full mt-5 grid grid-cols-1 md:grid-cols-2 gap-3 z-[100]">
                @include('shared.propertyItem', [])
                @include('shared.propertyItem', [])
                @include('shared.propertyItem', [])
                @include('shared.propertyItem', [])
            </div>
            <div class="w-96 h-56 -mt-20 flex items-center justify-center rounded-t-full bg-gradient-to-t from-[rgba(255,177.69,141.31,0)] to-[#F3D1C1] p-3" >
                @include('shared.button', ['witharrow'=>'true','label'=> 'Touch With Us', 'class'=>'bg-white text-black mt-20'])
            </div>
        </div>
    </section>


    @include('shared.footer')
</body>
</html>