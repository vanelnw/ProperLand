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
    <title>About us</title>
</head>
<body>

    <div class="relative hero h-screen bg-gradient-to-r from-[#FFF6F2] to-[#EEC1AC] pt-1 text-primary">
        <div class="absolute top-0 md:top-16 w-full">
            @include('shared.header')
        </div>
        <div class="container mx-auto flex flex-col justify-center h-screen ">
            <div class="flex items-center gap-2 w-fit rounded-sm bg-gradient-to-r from-[rgba(255,177.69,141.31,0)] to-[#F3D1C1] p-3" >
                <img src="{{ asset('storage/images/homeIcon.png') }}" alt="home-image" class="w-6 h-6 object-contain" />
                <span class="text-link text-[20px] tracking-[5.50px] leading-[23.7px]">Real Estate Agency</span>
            </div>
            <h1 class="text-5xl leadi sm:text-6xl font-bold text-prinary">About Our Real <br/>Estate</h1>
        </div>

        <div class="absolute bottom-0 right-0 w-1/2">
            <img src="{{ asset('storage/images/about/aboutHero.png') }}" alt="home-image" class="w-full h-full object-contain" />
        </div>
    </div>

    <section class="w-full p-5">
        <div class="w-full md:max-w-2xl lg:max-w-3xl py-10 mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/3 ">
                    <img src="{{ asset('storage/images/about/introPhoto.png') }}" alt="home-image" class="w-full object-contain" />
                </div>
                <div class="w-full md:w-2/3 md:pl-5">
                    @include('shared.sectionTitle', ['number'=>'01', 'label'=>'VINTRO VIDEO', 'text'=>'Buying & Renting Property In An Easy Way', 'class'=>'max-w-md'])
                    <p class="text-link mt-4 text-[.8rem] tracking-[0] leading-[15.7px]">Distinctively re-engineer revolutionary meta-services and premium  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
                    <div class="mt-10">
                        <div class="flex gap-5 items-center justify-center">
                            <img src="{{ asset('storage/images/about/visionIcon.png') }}" alt="home-image" class="w-10 h-10 object-contain" />
                            <div class="max-w-xs">
                                <h2 class="text-primary text-[1.1rem] font-semibold">Our Vision</h2>
                                <p class="text-[.7rem]">Distinctively re-engineer revolutionary meta-services and premium  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                            </div>
                        </div>
                        <div class="flex gap-5 items-center justify-center">
                            <img src="{{ asset('storage/images/about/missionIcon.png') }}" alt="home-image" class="w-10 h-10 object-contain" />
                            <div class="max-w-xs">
                                <h2 class="text-primary text-[1.1rem] font-semibold">Our Mission</h2>
                                <p class="text-[.7rem]">Distinctively re-engineer revolutionary meta-services and premium  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full p-5">
        <div class="w-full md:max-w-2xl lg:max-w-3xl py-10 mx-auto flex flex-col items-center">
             @include('shared.sectionTitle', ['number'=>'02', 'label'=>'PROCESS', 'text'=>'Our Main Focus', 'class'=>'text-center max-w-md'])
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3 mt-8">
                <div class="p-5 bg-gradient-to-t from-[#e6a357] to-[#fde2b6] ">
                    <div class="w-14 h-14 rounded-full text-white text-[1.5rem] font-bold flex items-center justify-center bg-secondary">
                        01
                    </div>
                    <h2 class="text-primary text-[1rem] font-semibold mt-3">Planing stage</h2>
                    <p class="text-[.7rem] mt-2 text-link">High level overviews. approaches lverall value proposition. Organically grow the holistic world view of disruptive.</p>
                </div>
                <div class="p-5 bg-gradient-to-t from-[#e6a357] to-[#fde2b6] ">
                    <div class="w-14 h-14 rounded-full text-white text-[1.5rem] font-bold flex items-center justify-center bg-secondary">
                        02
                    </div>
                    <h2 class="text-primary text-[1rem] font-semibold mt-3">Development</h2>
                    <p class="text-[.7rem] mt-2 text-link">High level overviews. approaches lverall value proposition. Organically grow the holistic world view of disruptive.</p>
                </div>
                <div class="p-5 bg-gradient-to-t from-[#e6a357] to-[#fde2b6] ">
                    <div class="w-14 h-14 rounded-full text-white text-[1.5rem] font-bold flex items-center justify-center bg-secondary">
                        03
                    </div>
                    <h2 class="text-primary text-[1rem] font-semibold mt-3">New way of living</h2>
                    <p class="text-[.7rem] mt-2 text-link">High level overviews. approaches lverall value proposition. Organically grow the holistic world view of disruptive.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full p-5">
        <div class="w-full md:max-w-2xl lg:max-w-3xl py-10 mx-auto ">

            <div class="w-full flex flex-col  lg:flex-row lg:justify-between">
                <div class="flex flex-col  bg-[#f2f2f2]   rounded-sm lg:max-w-xl xl:max-w-lg lg:text-left ">
                <h2 class="text-primary text-[1.2rem] font-bold">We're reinventing the space</h2>
                <p class="text-link text-[.8rem] mt-3">Distinctively re-engineer revolutionary meta-services and premium  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolore.</p>
                <div class="mt-5">
                    <div class="max-w-xs">
                        <h2 class="text-primary text-[1.1rem] font-semibold">Full Services</h2>
                        <p class="text-[.7rem]">Interactively procrastinate high-payoff content without backward-compatible data.</p>
                    </div>
                    <div class="max-w-xs mt-3">
                        <h2 class="text-primary text-[1.1rem] font-semibold">Safe Investments</h2>
                        <p class="text-[.7rem]">Interactively procrastinate high-payoff content without backward-compatible data.</p>
                    </div>
                </div>
            </div>
                <div class="flex mt-8 lg:mt-0 w-full h-60 xl:h-112 2xl:h-128">
                    <img src="{{ asset('storage/images/introImage.png') }}" alt="home-image" class="object-cover md:object-cover w-full h-60 xl:h-112 2xl:h-128">
                </div>
            </div>

        </div>
    </setion>

    <section class="w-full p-7 bg-secondary">
        <div class="max-w-2xl mx-auto grid grid-cols-2 row-gap-8 md:grid-cols-4">
           <div class="text-center">
                <h6 class="text-[1.7rem] font-bold lg:text-[2rem] xl:text-[2.5rem] text-primary">56,180</h6>
                <p class="text-white text-[.8rem]  tracking-widest">
                    In property sales
                </p>
          </div>
                     <div class="text-center">
                <h6 class="text-[1.7rem] font-bold lg:text-[2rem] xl:text-[2.5rem] text-primary">99%</h6>
                <p class="text-white text-[.8rem]  tracking-widest">
                    Customer satisfaction
                </p>
          </div>
                     <div class="text-center">
                <h6 class="text-[1.7rem] font-bold lg:text-[2rem] xl:text-[2.5rem] text-primary">25K+</h6>
                <p class="text-white text-[.8rem]  tracking-widest">
                    Property Transaction
                </p>
          </div>
                     <div class="text-center">
                <h6 class="text-[1.7rem] font-bold lg:text-[2rem] xl:text-[2.5rem] text-primary">2,918</h6>
                <p class="text-white text-[.8rem]  tracking-widest">
                    Price Reduce
                </p>
          </div>
        </div>
    </section>

    <section class="w-full p-5">
        <div class="w-full md:max-w-2xl lg:max-w-3xl py-10 mx-auto flex flex-col items-center">
             @include('shared.sectionTitle', ['number'=>'06', 'label'=>'EXPERTS', 'text'=>'Our Property Team', 'class'=>'text-center max-w-md'])
               <div class="grid gap-10 mx-auto sm:grid-cols-2 lg:grid-cols-4 lg:max-w-screen-l  mt-5">
                    <div class="">
                        <div class="relative mb-4 rounded shadow">
                            <img class="object-cover w-full h-full rounded" src="{{ asset('storage/images/introImage.png') }}" alt="Person" />
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
                    
                             <div class="">
                        <div class="relative mb-4 rounded shadow">
                            <img class="object-cover w-full h-full rounded" src="{{ asset('storage/images/introImage.png') }}" alt="Person" />
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

                             <div class="">
                        <div class="relative mb-4 rounded shadow">
                            <img class="object-cover w-full h-full rounded" src="{{ asset('storage/images/introImage.png') }}" alt="Person" />
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

                             <div class="">
                        <div class="relative mb-4 rounded shadow">
                            <img class="object-cover w-full h-full rounded" src="{{ asset('storage/images/introImage.png') }}" alt="Person" />
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

    @include('shared.footer')
    
</body>
</html>