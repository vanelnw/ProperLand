<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite('resources/css/app.css')
     <link
        href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css"
        rel="stylesheet"
    />
     <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <title>@yield('title') | Administration</title>
</head>
<body>

    <section class="relative mx-auto">
        <div class="relative hero h-screen bg-gradient-to-r from-[#FFF6F2] to-[#EEC1AC] pt-1 text-primary">
            <div class="absolute top-0 md:top-16 w-full">
                @include('shared.header')
            </div>
 

    <div class="container mx-auto flex flex-col justify-center h-screen ">
        <div class="flex flex-col justify-center p-6 rounded-sm lg:max-w-md xl:max-w-lg text-left">
            <div class="flex items-center gap-2 w-fit rounded-sm bg-gradient-to-r from-[rgba(255,177.69,141.31,0)] to-[#F3D1C1] p-3" >
                <img src="{{ asset('storage/images/homeIcon.png') }}" alt="home-image" class="w-6 h-6 object-contain" />
                <span class="text-link text-[20px] tracking-[5.50px] leading-[23.7px]">Real Estate Agency</span>
            </div>
            <h1 class="text-5xl leadi sm:text-6xl font-bold text-prinary">Find the perfect place to Live with your family</h1>
            <p class="text-link text-sm my-8 mt-6 mb-8 sm:mb-12">
                Distinctively re-engineer revolutionary meta-services and premium architectures. Intrinsically incubate.
            </p>
            <button class="bg-white w-fit text-primary py-2 px-4 shadow rounded hover:bg-blue-600">
                Learn More
            </button>

        </div>
        <div class="absolute bottom-0 right-0 w-1/2">
            <img src="{{ asset('storage/images/homeImage.png') }}" alt="home-image" class="w-full h-full object-contain" />
        </div>
    </div>
</div>

     <div class="container mx-auto flex flex-col justify-center p-6 lg:py-24 lg:flex-row lg:justify-between">

        <div class="flex flex-col justify-center bg-[#f2f2f2] p-6 text-center rounded-sm lg:max-w-xl xl:max-w-lg lg:text-left lg:gap-5">
            @include('shared.sectionTitle', ['number'=>'01', 'label'=>'PROPERLAND INTRO', 'text'=>'Buying & Selling Property In An Easy Way'])
            <p class="text-link mt-4 text-[.6rem] tracking-[0] leading-[15.7px]">Distinctively re-engineer revolutionary meta-services and premium  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.
            </p>
            <div class="flex flex-col sm:flex-row justify-between mt-4">
                <div class="flex items-center gap-2">
                    <div class="h-5 w-5 rounded-full bg-[#CFCFCF] flex items-center justify-center">
                        <div class="h-2 w-2 rounded-full bg-primary"></div>
                    </div>
                    <p class="font-normal text-[#757575] text-[.6rem] tracking-[0] leading-[38.5px]">Only pay when you publish</p>
                </div>
                <div class="flex items-center gap-2">
                    <div class="h-5 w-5 rounded-full bg-[#CFCFCF] flex items-center justify-center">
                        <div class="h-2 w-2 rounded-full bg-primary"></div>
                    </div>
                    <p class="font-normal text-[#757575] text-[.6rem] tracking-[0] leading-[38.5px]">Unlimited featured use</p>
                </div>
                <div class="flex items-center gap-2">
                    <div class="h-5 w-5 rounded-full bg-[#CFCFCF] flex items-center justify-center">
                        <div class="h-2 w-2 rounded-full bg-primary"></div>
                    </div>
                    <p class="font-normal text-[#757575] text-[.6rem] tracking-[0] leading-[38.5px]">24/7 supports</p>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
            <img src="{{ asset('storage/images/introImage.png') }}" alt="home-image" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
        </div>
     </div>

     <section class="bg-[#F5F1EF] py-10 flex items-center justify-center">
        <div class="container mx-auto px-6 pt-16 pb-16 flex flex-col items-center justify-center">
            @include('shared.sectionTitle', ['number'=>'02', 'label'=>'Featured properties', 'text'=>'Properties for sale in your favorite area', 'class'=>'text-center max-w-md'])
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
     <section class="section py-10 flex items-center justify-center">
        <div class="container mx-auto px-6 pt-16 pb-16 flex flex-col items-center justify-center">
            @include('shared.sectionTitle', ['number'=>'03', 'label'=>'WHY CHOOSE', 'text'=>'Why Choose Our Properties Of Real Estate Industries', 'class'=>'text-center max-w-lg'])
            <div class="w-full mt-5 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="w-full col-span-1 bg-gradient-to-b from-[#F3D1C1] to-[#FFEEE5] p-5 rounded-md">
                    <div class="relative">
                        <img src="{{ asset('storage/images/pig.png') }}" alt="pig-image" class="object-contain h-20">
                        <img src="{{ asset('storage/images/vector1.png') }}" alt="vector" class="absolute top-0 right-0 object-contain h-15 w-20">
                    </div>
                    <div class="mt-5">
                        <h2 class="text-primary font-semibold text-[1rem]">Budget Friendly</h2>
                        <p class="text-link text-[.7rem] mt-2">Distinctively re-engineer revolutionary meta-services and premium  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>
                <div class="w-full relative col-span-1 md:col-span-2 flex bg-gradient-to-b from-[#F3D1C1] to-[#FFEEE5] p-5 rounded-md">
                    <div class="relative flex-1">
                        <img src="{{ asset('storage/images/pig.png') }}" alt="pig-image" class="object-contain h-20">
                    </div>
                    <div class="mt-5 flex-1">
                        <h2 class="text-primary font-semibold text-[1rem]">Property Insurance</h2>
                        <p class="text-link text-[.7rem] mt-2">Distinctively re-engineer revolutionary meta-services and premium  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        <p class="text-link text-[.7rem] mt-2">Distinctively re-engineer revolutionary meta-services and premium.</p>
                    </div>
                    <img src="{{ asset('storage/images/vector2.png') }}" alt="vector2" class="absolute bottom-0 right-0 object-contain h-32 w-32  ">
                </div>
                <div class="bg-gradient-to-b from-[#F3D1C1] to-[#FFEEE5] p-5 rounded-md">
                    <div class="relative">
                        <img src="{{ asset('storage/images/pig.png') }}" alt="pig-image" class="object-contain h-20">
                        <img src="{{ asset('storage/images/vector1.png') }}" alt="vector" class="absolute top-0 right-0 object-contain h-15 w-20">
                    </div>
                    <div class="mt-5">
                        <h2 class="text-primary font-semibold text-[1rem]">Trusted By Thousands</h2>
                        <p class="text-link text-[.7rem] mt-2">Distinctively re-engineer revolutionary meta-services and premium  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>
                <div class="bg-gradient-to-b from-[#F3D1C1] to-[#FFEEE5] p-5 rounded-md">
                    <div class="relative">
                        <img src="{{ asset('storage/images/map.png') }}" alt="map-image" class="object-contain h-20">
                        <img src="{{ asset('storage/images/vector1.png') }}" alt="vector" class="absolute top-0 right-0 object-contain h-15 w-20">
                    </div>
                    <div class="mt-5">
                        <h2 class="text-primary font-semibold text-[1rem]">Prime Location</h2>
                        <p class="text-link text-[.7rem] mt-2">Distinctively re-engineer revolutionary meta-services and premium  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>
                <div class="w-full bg-gradient-to-b from-[#F3D1C1] to-[#FFEEE5] p-5 rounded-md">
                    <div class="relative">
                        <img src="{{ asset('storage/images/money.png') }}" alt="money-image" class="object-contain h-20">
                        <img src="{{ asset('storage/images/vector1.png') }}" alt="vector" class="absolute top-0 right-0 object-contain h-15 w-20">
                    </div>
                    <div class="mt-5">
                        <h2 class="text-primary font-semibold text-[1rem]">Lowest Commission</h2>
                        <p class="text-link text-[.7rem] mt-2">Distinctively re-engineer revolutionary meta-services and premium  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>
            </div>
        </div>

     </section>
     <section class="about relative bg-[#F2F1EF]">
        <div class="container mx-auto py-20 ">
            <div class="max-w-lg pl-5 md:pl-0">
                @include('shared.sectionTitle', ['number'=>'04', 'label'=>'ABOUT US', 'text'=>'42+ years of helping you find the right Propertys', 'class'=>'max-w-md'])
                <div class="my-5">
                    <p class="text-[.6rem] text-link">Distinctively re-engineer revolutionary meta-services and premium  At vero eos et accusamus et iusto</p>
                    <p class="text-[.6rem] text-link mt-2">Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                @include('shared.button', ['witharrow'=>'true','label'=> 'Learn more', 'class'=>'bg-secondary text-black w-fit'])
            </div>
        </div>
        <div class="absolute hidden md:flex top-0 right-0 bg-link w-1/2 h-full">
            <img src="{{ asset('storage/images/about.png') }}" alt="about-image" class="object-cover h-full w-full">
        </div>
        <div class="absolute bottom-0 left-0 w-1/2 h-full">
            <img src="{{ asset('storage/images/Pattern.png') }}" alt="about-image" class="object-cover h-full w-full">
        </div>
     </section>
     <section class="section py-10 flex items-center justify-center">

        <div class="container mx-auto px-6 pt-16 pb-16 flex flex-col items-center justify-center">
            @include('shared.sectionTitle', ['number'=>'05', 'label'=>'SERVICES', 'text'=>'See How Can Help', 'class'=>'text-center max-w-lg'])
            <div class="w-full mt-5 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div class="flex flex-col items-center justify-center">
                    <div class="w-32 h-36 flex items-center justify-center rounded-full bg-gradient-to-b from-[#FFE5BB] to-[#FFFFFF]">
                        <div class="relative w-full flex items-center justify-center">
                            <img src="{{ asset('storage/images/Doller.png') }}" alt="vector" class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 object-cover h-11 w-11">
                            <img src="{{ asset('storage/images/houseIcon.png') }}" alt="vector" class="object-cover h-15 w-20">
                        </div>
                    </div>
                    <div class="text-center max-w-sm">
                        <h2 class="font-semibold text-[1.2rem] text-primary">Rent a Home</h2>
                        <p class="text-[.8rem]  text-[#8D8D8D]">High level overviews. approaches lverall value proposition. Organically grow the holistic world view of disruptive.</p>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <div class="w-32 h-36 flex items-center justify-center rounded-full bg-gradient-to-b from-[#FFE5BB] to-[#FFFFFF]">
                        <div class="relative w-full flex items-center justify-center">
                            <img src="{{ asset('storage/images/Doller2.png') }}" alt="vector" class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 object-cover h-11 w-11">
                            <img src="{{ asset('storage/images/houseIcon.png') }}" alt="vector" class="object-cover h-15 w-20">
                        </div>
                    </div>
                    <div class="text-center max-w-sm">
                        <h2 class="font-semibold text-[1.2rem] text-primary">Sale a Home</h2>
                        <p class="text-[.8rem] text-[#8D8D8D]">Frameworks to provide a robust synopsis for high level overviews. approaches lverall, Organically grow the holistic.</p>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <div class="w-32 h-36 flex items-center justify-center rounded-full bg-gradient-to-b from-[#FFE5BB] to-[#FFFFFF]">
                        <div class="relative w-full flex items-center justify-center">
                            <img src="{{ asset('storage/images/Doller2.png') }}" alt="vector" class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 object-cover h-11 w-11">
                            <img src="{{ asset('storage/images/houseIcon.png') }}" alt="vector" class="object-cover h-15 w-20">
                        </div>
                    </div>
                    <div class="text-center max-w-sm">
                        <h2 class="font-semibold text-[1.2rem] text-primary">Buy a Home</h2>
                        <p class="text-[.8rem] text-[#8D8D8D]">Leverage agile frameworks to provide a robust synopsis for high level overviews. approaches lverall value proposition.</p>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <div class="w-32 h-36 flex items-center justify-center rounded-full bg-gradient-to-b from-[#FFE5BB] to-[#FFFFFF]">
                        <div class="relative w-full flex items-center justify-center">
                            <img src="{{ asset('storage/images/user-doller.png') }}" alt="vector" class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 object-cover h-11 w-11">
                            <img src="{{ asset('storage/images/houseIcon.png') }}" alt="vector" class="object-cover h-15 w-20">
                        </div>
                    </div>
                    <div class="text-center max-w-sm">
                        <h2 class="font-semibold text-[1.2rem] text-primary">Experience Agent</h2>
                        <p class="text-[.8rem] text-[#8D8D8D]">Leverage agile frameworks to provide a robust synopsis for high level overviews. approaches lverall value proposition.</p>
                    </div>
                </div>
                 <div class="flex flex-col items-center justify-center">
                    <div class="w-32 h-36 flex items-center justify-center rounded-full bg-gradient-to-b from-[#FFE5BB] to-[#FFFFFF]">
                        <div class="relative w-full flex items-center justify-center">
                            <img src="{{ asset('storage/images/Doller3.png') }}" alt="vector" class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 object-cover h-11 w-11">
                            <img src="{{ asset('storage/images/houseIcon.png') }}" alt="vector" class="object-cover h-15 w-20">
                        </div>
                    </div>
                    <div class="text-center max-w-sm">
                        <h2 class="font-semibold text-[1.2rem] text-primary">Buy a Home</h2>
                        <p class="text-[.8rem] text-[#8D8D8D]">Leverage agile frameworks to provide a robust synopsis for high level overviews. approaches lverall value proposition.</p>
                    </div>
                </div>
            </div>
        </div>
     </section>
     @include('shared.brand')
     <section class="cta py-10 flex flex-col items-center justify-center">
        <div class="container p-3">
            <div class="flex flex-col gap-5 md:flex-row items-center">
                <div class="w-full md:w-2/5">
                    <div class="flex md:items-center gap-2 text-3xl font-bold">
                        <img src="{{ asset('storage/images/properland.png') }}" alt="Logo" width=50 height=50>
                        <span class="mt-2">Properland</span>
                    </div>
                    <div class="flex gap-2 mt-3">
                        <i class="fa fa-brands fa-instagram"></i>
                        <i class="fa fa-brands fa-facebook"></i>
                        <i class="fa fa-brands fa-twitter"></i>
                        <i class="fa fa-linkedin"></i>
                        <i class="fa fa-youtube"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
                    </div>
                </div>
                <div class="w-full md:w-3/5 flex flex-col gap-3">
                    <h2 class="text-primary  font-bold text-[2rem] tracking-[0] leading-[33.3px] "> Get a free estimate</h2>
                    <p class=" max-w-md  text-link text-[.9rem] tracking-[0] leading-[15.7px]">Leverage agile frameworks to provide a robust synopsis for high level overviews. approaches lverall value proposition. Organically grow the holistic world view of disruptive.</p>
                    <form action="">
                        <input type="text" name="email" placeholder="your email address here" class="border border-[#c0c0c0] py-2 px-4 rounded-sm placeholder:text-[.6rem]">
                        <button class="btn bg-primary text-white rounded-md p-2" >Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
     </section>

      @include('shared.footer')
        <nav class="flex justify-between bg-primary text-white w-screen">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                <a class="text-3xl font-bold font-heading" href="#">
                <!-- <img class="h-9" src="logo.png" alt="logo"> -->
                Logo Here.
                </a>
                <!-- Nav Links -->

                @php
                    $route = request()->route()->getName();
                @endphp
                
                <ul class="flex px-4 mx-auto font-semibold font-heading space-x-12 text-white">
                    <li><a href='' class="hover:text-gray-200 ">home</a></li>
                    <li><a href={{route('property.index')}} @class(['hover:text-gray-200','text-red-500'=> str_contains($route, 'property.')]) ">Les biens</a></li>
                    <li><a href={{route('admin.property.index')}} @class(['hover:text-gray-200','text-red-500'=> str_contains($route, 'property.')]) href="#">properties</a></li>
                    <li><a href={{route('admin.option.index')}} @class(['hover:text-gray-200','text-red-500'=> str_contains($route, 'option.')]) >Options</a></li>
                    <li><a href={{route('admin.agent.index')}} @class(['hover:text-gray-200','text-red-500'=> str_contains($route, 'agent.')]) >Agents</a></li>
                    <li><a class="hover:text-gray-200" href="#">Contact Us</a></li>
                </ul>
            </div>
         </nav>
    </section>      
    
        @yield('content')
    
</body>
</html>