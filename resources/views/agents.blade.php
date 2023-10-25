<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="relative hero h-[60vh] bg-gradient-to-r from-[#FFF6F2] to-[#EEC1AC] pt-1 text-primary  bg-cover bg-center" style="background-image: url('{{ asset('storage/images/agents/agentBanner.png') }}');">
        <div class="absolute top-0 md:top-10 w-full z-20">
            @include('shared.header')
        </div>
        <div class="container mx-auto flex flex-col justify-center gap-3 h-full pt-20 z-20">
            <div class="flex items-center gap-2 w-fit rounded-sm bg-gradient-to-r from-[rgba(255,177.69,141.31,0)] to-[#F3D1C1] p-2" >
                <img src="{{ asset('storage/images/homeIcon.png') }}" alt="home-image" class="w-6 h-6 object-contain" />
                <span class="text-link text-[18px] tracking-[5.50px] leading-[23.7px]">PROPERTY EXPERTS</span>
            </div>
            <h1 class="text-3xl leadi sm:text-4xl font-bold text-prinary">Meet Our Agents </h1>
        </div>
        <!-- <div class="absolute bottom-0 right-0 w-full h-full bg-gradient-to-r from-[#FFF6F2] to-[#EEC1AC]">
           // <img src="{{ asset('storage/images/agents/agentBanner.png') }}" alt="home-image" class="w-full h-full object-fill" />
        </div> -->
    </div>
    <section class="py-10">
        <div class="container mx-auto">
        <div class="grid gap-10 mx-auto sm:grid-cols-2 lg:grid-cols-4 lg:max-w-screen-xl  mt-5">
                    <div class="rounded hover:bg-secondary">
                        <div class="relative mb-4 rounded shadow">
                            <img class="object-cover w-full h-full rounded" src="{{ asset('storage/images/agents/agentImage.png') }}" alt="agent" />
                        </div>
                        <div class="flex flex-col px-1">
                            <p class="text-[1rem] font-bold">Oliver Aguilerra</p>
                            <div class="flex justify-between ">
                                <span class="text-link text-[.8rem]">Land Seller</span>
                                <div class="flex gap-2">
                                    <i class="fa fa-brands fa-instagram"></i>
                                    <i class="fa fa-brands fa-facebook"></i>
                                    <i class="fa fa-brands fa-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                             <div class="rounded hover:bg-secondary">
                        <div class="relative mb-4 rounded shadow">
                            <img class="object-cover w-full h-full rounded" src="{{ asset('storage/images/agents/agentImage.png') }}" alt="agent" />
                        </div>
                        <div class="flex flex-col">
                            <p class="text-[1rem] font-bold">Oliver Aguilerra</p>
                            <div class="flex justify-between">
                                <span class="text-link text-[.8rem]">Land Seller</span>
                                <div class="flex gap-2">
                                    <i class="fa fa-brands fa-instagram"></i>
                                    <i class="fa fa-brands fa-facebook"></i>
                                    <i class="fa fa-brands fa-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                             <div class="rounded hover:bg-secondary">
                        <div class="relative mb-4 rounded shadow">
                            <img class="object-cover w-full h-full rounded" src="{{ asset('storage/images/agents/agentImage.png') }}" alt="agent" />
                        </div>
                        <div class="flex flex-col">
                            <p class="text-[1rem] font-bold">Oliver Aguilerra</p>
                            <div class="flex justify-between">
                                <span class="text-link text-[.8rem]">Land Seller</span>
                                <div class="flex gap-2">
                                    <i class="fa fa-brands fa-instagram"></i>
                                    <i class="fa fa-brands fa-facebook"></i>
                                    <i class="fa fa-brands fa-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                             <div class="rounded hover:bg-secondary">
                        <div class="relative mb-4 rounded shadow">
                            <img class="object-cover w-full h-full rounded" src="{{ asset('storage/images/agents/agentImage.png') }}" alt="agent" />
                        </div>
                        <div class="flex flex-col">
                            <p class="text-[1rem] font-bold">Oliver Aguilerra</p>
                            <div class="flex justify-between">
                                <span class="text-link text-[.8rem]">Land Seller</span>
                                <div class="flex gap-2">
                                    <i class="fa fa-brands fa-instagram"></i>
                                    <i class="fa fa-brands fa-facebook"></i>
                                    <i class="fa fa-brands fa-twitter"></i>
                                </div>
                            </div>
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
</body>
</html>