<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="relative hero h-[60vh] bg-gradient-to-r from-[#FFF6F2] to-[#EEC1AC] pt-1 text-primary">
        <div class="absolute top-0 md:top-10 w-full z-20">
            @include('shared.header')
        </div>
        <div class="absolute bottom-0 right-0 w-full h-full z-1">
            <img src="{{ asset('storage/images/properties/detailsProperty.png') }}" alt="home-image" class="w-full h-full object-fill" />
        </div>
    </div>

    <section class="py-14">
        <div class="container mx-auto pb-11 border-b border-b-link ">
            <div class="w-full flex flex-wrap md:flex-nowrap gap-10 ">
                <div class="w-full md:w-1/2 flex flex-col gap-2">
                    <p class="flex  items-center mb-2"> 
                        <img src="{{ asset('storage/images/locationIcon.png') }}" alt="location-icon" class="object-contain w-4 h-4">
                        <span class="font-normal text-[#8e8e8e] text-[.7rem] tracking-[0] leading-[23.7px]">709 West Drive Chicago, IL 60606</span>
                    </p>
                    <h2 class="text-primary font-bold text-[1.3rem] tracking-[0] leading-[29.6px]">Modern Loft in Land River</h2>
                    <p class="font-normal text-[#8e8e8e] text-[.8rem] tracking-[0] leading-[15.7px] max-w-md">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically .</p>
                </div>
                <div class="w-full md:w-1/2 flex flex-col gap-3">
                    <span class="text-secondary font-bold text-[1.3rem]">$3500/Mo</span>
                    <div class="flex gap-3"> 
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

                    @include('shared.button', ['label'=> 'For sale', 'class'=>'bg-primary text-white w-fit'])
                </div>
            </div>
        </div>

        <div class="container mx-auto pt-10">
            <div class="flex flex-wrap md:flex-nowrap gap-5">
                <div class="w-full md:w-2/3">
                   <div class="">
                    <h2 class="text-primary font-bold text-[1rem] tracking-[0] leading-[20.6px]">About the Property</h2>
                    <p class="font-normal text-[#8e8e8e] text-[.8rem] tracking-[0] leading-[15.7px] mt-3">
                        Laminate flooring is a more affordable option in place of hardwood flooring that can cost almost ten times the
                        cost of laminate flooring. Laminate flooring is light, durable and can be made to resemble.
                        <br />
                        <br />
                        Appropriately empower dynamic leadership skills after business portals. Globally my cardinate interactive supply chains with distinctive quality vectors global sources services. Uniquely matrix economically sound value through cooperative technology. Competently parallel task fully researched data and enterprise process improvements.
                    </p>
                    <ul>
                        <li>Dynamically target high-payoff intellectual capital for customized</li>
                        <li>Interactively procrastinate high-payoff content</li>
                        <li>Credibly reinter mediate backend ideas for cross-platform models</li>
                    </ul>
                    <p class="font-normal text-[#8e8e8e] text-[.8rem] tracking-[0] leading-[15.7px] mt-3">Uniquely matrix economically sound value through cooperative technology. Competently parallel task fully researched data and enterprise process improvements. Collaboratively expedite quality manufactured products via client-focused results quickly communicate enabled technology and turnkey leadership skills. Uniquely enable accurate supply chains rather than friction technology.</p>
                   </div>
                   <div class="mt-5">
                    <h2 class="text-primary font-bold text-[1rem] tracking-[0] leading-[20.6px]">Make real time a build services</h2>
                    <p class="font-normal text-[#8e8e8e] text-[.8rem] tracking-[0] leading-[15.7px] mt-3">
                      Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
                    </p>
                    <ol class="text-[.8rem] text-[#8e8e8e] mt-3">
                        <li>Dynamically target high-payoff intellectual capital for customized</li>
                        <li>Interactively procrastinate high-payoff content</li>
                        <li>Credibly reinter mediate backend ideas for cross-platform models</li>
                    </ol>

                    <p class="font-normal text-[#8e8e8e] text-[.8rem] tracking-[0] leading-[15.7px] mt-3">It is a long established fact that a reader will be distracted by the readable content page when looking at its layout. The point of using Lorem Ipsum is that it more-or-less normal distribution of letters, as felt opposed to using 'Content here making it look like readable.</p>
                   </div>
                </div>
                <div class="w-full md:w-1/3">
                    <div class="p-5 flex flex-col gap-3  border border-[#dac5bb] bg-[#F5F1EF]">
                        <h2 class="text-primary font-semibold text-[.8rem]">About agent</h2>
                        <p class="text-[.8rem] text-[#7d7d7d] tracking-[0] leading-[15.7px]">A perfect property finder and seller with great knowledge in the real estate field. Talented in searching for a property with in the customer&#39;s needed areas.</p>
                        <div class="flex gap-2 items-center">
                            <div class="w-12 h-12 rounded-md">
                                <img src="{{ asset('storage/images/properties/detailsProperty.png') }}" alt="home-image" class="w-full h-full object-fill rounded-sm" />
                            </div>
                            <div class="">
                                <h3 class="text-primary text-[.8rem]">Anne Hathaway</h3>
                                <p class="text-link text-[.7rem]"> Land Seller </p>
                            </div>
                        </div>
                        <div class="bg-white rounded-sm p-3 text-[.8rem]">
                            <p><span class="text-secondary font-bold mr-1"><i class="fa fa-envelope"></i></span> anne-hathaway@mail.com</p>
                            <p><span class="text-secondary font-bold mr-1"><i class="fa fa-phone" ></i></span> +1 719-504-1984</p>
                        </div>
                    </div>
                    <div class="p-5 border border-[#dac5bb] bg-[#F5F1EF] mt-5">
                        <form action="" method="post" class="flex flex-col gap-2">
                            @csrf
                            <input type="text" name="name" placeholder="Name" value="" class="w-full p-2 bg-white border border-[#d6d6d6] rounded"/>
                            <input type="email" name="email" placeholder="Email" value="" class="w-full p-2 bg-white border border-[#d6d6d6] rounded"/>
                            <input type="text" name="phone" placeholder="Phone" value="" class="w-full p-2 bg-white border border-[#d6d6d6] rounded"/>
                            <textarea name="message" id="Message" placeholder="Message" cols="20" rows="3" class="w-full p-2 bg-white border border-[#d6d6d6] rounded"></textarea>
                            @include('shared.button', ['label'=> 'submit', 'class'=>'bg-primary text-white w-fit'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#F5F1EF] py-10">
            <div class="container mx-auto">
                <h1 class="text-primary  font-bold text-[1.5rem]">Property gallery</h1>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3 mt-5">
                    <div class="h-56 rounded-md">
                        <img src="{{ asset('storage/images/properties/detailsProperty.png') }}" alt="home-image" class="w-full h-full object-fill rounded-sm" />
                    </div>
                    <div class="h-56 rounded-md">
                        <img src="{{ asset('storage/images/properties/detailsProperty.png') }}" alt="home-image" class="w-full h-full object-fill rounded-sm" />
                    </div>
                    <div class="h-56 rounded-md">
                        <img src="{{ asset('storage/images/properties/detailsProperty.png') }}" alt="home-image" class="w-full h-full object-fill rounded-sm" />
                    </div>
                </div>
            </div>
    </section>
    <section class="py-10">
        <div class="container mx-auto">
            <h1 class="text-primary  font-bold text-[1.5rem]">Best Property Deals</h1>
            <div class="flex flex-col items-center justify-center">
                <div class="w-full mt-5 grid grid-cols-1 md:grid-cols-2 gap-5 z-[100]">
                    @include('shared.propertyItem', ['class'=>'bg-[#F5F1EF]'])
                    @include('shared.propertyItem', ['class'=>'bg-[#F5F1EF]'])
                    @include('shared.propertyItem', ['class'=>'bg-[#F5F1EF]'])
                    @include('shared.propertyItem', ['class'=>'bg-[#F5F1EF]'])
                </div>
                <div class="w-96 h-56 -mt-20 flex items-center justify-center rounded-t-full bg-gradient-to-t from-[rgba(255,177.69,141.31,0)] to-[#F3D1C1] p-3" >
                    @include('shared.button', ['witharrow'=>'true','label'=> 'Touch With Us', 'class'=>'bg-white text-black mt-20'])
                </div>
            </div>
        </div>
</section>

    
</body>
</html>