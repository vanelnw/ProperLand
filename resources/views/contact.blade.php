<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<section class="relative mx-auto h-screen">
        <div class="relative hero  md:h-[90vh] bg-gradient-to-r from-[#FFF6F2] to-[#EEC1AC] pt-1 text-primary p-10">
            <div class="absolute top-0 md:top-10 w-full">
                @include('shared.header')
            </div>
 

    <div class="max-w-5xl mx-auto flex mt-28 md:mt-0 flex-col md:flex-row md:items-end  md:h-full">
        <div class="w-full md:w-1/2 flex items-end h-full">
            <div class="flex flex-col justify-end p-6 rounded-sm lg:max-w-md xl:max-w-lg text-left gap-4">
            <div class="flex items-center gap-2 w-fit rounded-sm bg-gradient-to-r from-[rgba(255,177.69,141.31,0)] to-[#F3D1C1] p-1" >
                <img src="{{ asset('storage/images/homeIcon.png') }}" alt="home-image" class="w-5 h-5 object-contain" />
                <span class="text-link text-[.8rem] tracking-[5.50px] leading-[10.7px]">CONTACT US</span>
            </div>
            <h1 class="text-3xl leadi sm:text-4xl font-bold text-prinary">Contact us
            For More Information
            </h1>
            <p class="text-link text-[.8rem] ">
                Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
           
            <p class="bg-white rounded-sm p-2 w-fit text-link"><span class=" font-bold mr-1"><i class="fa fa-envelope"></i></span> anne-hathaway@mail.com</p>
            <p class="bg-white rounded-sm p-2 w-fit text-link"><span class=" font-bold mr-1"><i class="fa fa-phone" ></i></span> +1 719-504-1984</p>
            
            <div class="">
                <h3 class="text-xl leadi sm:text-2xl font-bold text-prinary">
                 Location
                </h3>
                <p class="text-link text-[.8rem] ">
                   Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.
                </p>
            </div>
            <div class="flex gap-5">
                <div class="bg-white rounded-sm p-2 w-fit text-center">
                   <h3 class="text-[.8rem] font-bold text-prinary">
                     London
                    </h3>
                    <p class="text-[#8d8d8d] text-[.6rem] ">
                     3803 Marquette Pl #5S<br/>
                     San Diego, 92106 
                    </p>
                </div>
                <div class="bg-white rounded-sm p-2 w-fit text-center">
                   <h3 class="text-[.8rem] font-bold text-prinary">
                     Los Angeles
                    </h3>
                    <p class="text-[#8d8d8d] text-[.6rem] ">
                     1000 S Westgate Ave.<br/>
                      Los Angeles, 90049
                    </p>
                </div>
            </div>
        </div>
        </div>
        <div class="w-full md:w-1/2 p-10 shadow-lg bg-white">
            <h2 class="text-xl leadi sm:text-2xl font-bold text-prinary">Quick Contact</h2>
            <p class="text-[.7rem]">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                <form action="" method="post" class="flex flex-col gap-2 mt-3">
                            @csrf
                            <div class="">
                                <label for="">Name</label>
                                <input type="text" name="name" placeholder="Name" value="" class="w-full p-2 bg-[#f3f3f3] rounded placeholder:text-[.6rem]"/>
                            </div>
                            <div class="">
                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="Email" value="" class="w-full p-2 bg-[#f3f3f3] rounded placeholder:text-[.6rem]"/>
                            </div>
                            <div class="">
                                <label for="">Phone</label>
                                <input type="text" name="phone" placeholder="Phone" value="" class="w-full p-2 bg-[#f3f3f3] rounded placeholder:text-[.6rem]"/>
                            </div>
                            <div class="">
                                <label for="">Message</label>
                                <textarea name="message" id="Message" placeholder="Message" cols="20" rows="3" class="w-full p-2 bg-[#f3f3f3] rounded placeholder:text-[.6rem]"></textarea>
                            </div>

                            
                            @include('shared.button', ['label'=> 'submit', 'class'=>'bg-primary text-white w-fit'])
            </form>
        </div>
    </div
</section>

<section class="py-20">
    <div class="max-w-xl mx-auto flex flex-col items-center justify-center">
            <div class="flex items-center gap-2 w-fit rounded-sm bg-gradient-to-r from-[rgba(255,177.69,141.31,0)] to-[#F3D1C1] p-1" >
                <img src="{{ asset('storage/images/homeIcon.png') }}" alt="home-image" class="w-5 h-5 object-contain" />
                <span class="text-link text-[.8rem] tracking-[5.50px] leading-[10.7px]">ANSWERS</span>
            </div>
            <h1 class="text-2xl leadi sm:text-3xl font-bold text-prinary">
                Frequently Asked Questions
            </h1>

            <div class="mt-8 space-y-8 lg:mt-12">
                <div class="p-8 bg-gray-100 rounded-lg ">
                    <button class="flex items-center justify-between w-full">
                        <h1 class="font-semibold text-gray-700">How i can play for my appoinment ?</h1>

                        <span class="text-gray-400 bg-secondary rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                            </svg>
                        </span>
                    </button>

                    <p class="mt-6 text-sm text-gray-500 dark:text-gray-300">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas eaque nobis, fugit odit omnis fugiat deleniti animi ab maxime cum laboriosam recusandae facere dolorum veniam quia pariatur obcaecati illo ducimus?
                    </p>
                </div>

                <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-70">Is the cost of the appoinment covered by private health insurance?</h1>

                    <span class="text-black bg-secondary rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </span>
                </button>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700 ">Do i need a referral?</h1>
                    <span class="text-black bg-secondary rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </span>
                </button>
            </div>
            </div>
    </div>

</section>
    
</body>
</html>