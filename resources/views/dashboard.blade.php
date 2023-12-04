<x-app-layout>
@if(session('success'))
        <div class="flex items-center justify-center w-full h-8 py-auto bg-green-300 font-semibold">
            {{ session('success') }}
        </div>
    @endif

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet"/>

    <div class=" bg-white">
        <div class="bg-white py-8 w-330 mx-auto font-semibold text-3xl text-gray-800 leading-tight">
            Welcome back, {{ Auth::user()->name }}!
        </div>


        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex">
                    <div class="w-2/12 flex items-center">
                        <div class="w-full text-right">
                            <button class="p-1 rounded-full bg-white border border-gray-100 shadow-lg">
                                <x-left-arrow-icon />
                            </button>
                        </div>
                    </div>
                    <div id="sliderContainer" class="w-full h-96 border">
                        <ul id="slider" class="flex w-full border">

                        </ul>
                    </div>
                    <div class="w-2/12 flex items-center">
                        <div class="w-full text-right">
                            <button class="p-1 rounded-full bg-white border border-gray-100 shadow-lg">
                                <x-right-arrow-icon />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="bg-white mt-4 w-330 mx-auto font-semibold text-2xl text-gray-800 leading-tight flex">
            Most popular Gigs in  
            <div class="ml-1 text-blue-600">
                Website Development 
            </div>
        </div>

            <div id="default-carousel" class="relative w-330 mx-auto py-4" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96 border border-gray-300">
                            <!-- Item 1 -->
                            

                               
                            <div class="hidden duration-700 ease-in-out flex gap-5 justify-center py-5" data-carousel-item>
                            
                            <!-- Butuh lebih banyak data untuk bisa bekerja -->
                            @for ($i = 0; $i < 5; $i++) 
                            <div class="w-60 h-90">
                                <div id="" class="relative w-full h-10">
                                    <!-- Carousel wrapper -->
                                        <div class="relative overflow-hidden rounded-lg md:h-52">
                                            <!-- Item 1 -->
                                            <div>
                                                <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                            </div>
                                        </div>
  
                                    </div>

                                    <div class="mt-2 flex">
                                        <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" alt="Example Image" class="rounded-full h-7 w-7">
                                        <div>
                                            <div class="ml-2 font-semibold text-base">
                                                Nick
                                            
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-1 text-lg">
                                        I will design a timeless logo
                                    </div>

                                    <div class="mt-4 flex items-center">
                                        <svg class="h-4 w-4 black width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"/>
                                            <path d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873" fill="currentColor" />
                                        </svg>
                                        <div class="ml-1">
                                            5
                                        </div>
                                        <div class="ml-1">
                                            (
                                        </div>
                                        <div class="">
                                            1493
                                        </div>
                                        <div>
                                            )
                                        </div>
                                    </div>

                                    <div class="font-bold">
                                            From $130
                                    </div>
                                
                                </div>  

                                @endfor

                            </div>
                            
                         
                            <div class="hidden duration-700 ease-in-out flex gap-5 justify-center py-5" data-carousel-item>
                            @for ($i = 0; $i < 5; $i++) 
                            <div class="w-64 h-90">
                                <div id="" class="relative w-full h-52">
                                    <!-- Carousel wrapper -->
                                        <div class="relative overflow-hidden rounded-lg md:h-52">
                                            <!-- Item 1 -->
                                            <div>
                                                <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                            </div>
                                        </div>
  
                                    </div>

                                    <div class="mt-2 flex">
                                        <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" alt="Example Image" class="rounded-full h-7 w-7">
                                        <div>
                                            <div class="ml-2 font-semibold text-base">
                                                Nick
                                            
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-1 text-lg">
                                        I will design a timeless logo
                                    </div>

                                    <div class="mt-4 flex items-center">
                                        <svg class="h-4 w-4 black width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"/>
                                            <path d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873" fill="currentColor" />
                                        </svg>
                                        <div class="ml-1">
                                            5
                                        </div>
                                        <div class="ml-1">
                                            (
                                        </div>
                                        <div class="">
                                            1493
                                        </div>
                                        <div>
                                            )
                                        </div>
                                    </div>

                                    <div class="font-bold">
                                            From $130
                                    </div>
                                
                                </div>  

                                @endfor
                            </div>
                           
                            <div class="hidden duration-700 ease-in-out flex gap-5 justify-center py-5" data-carousel-item>
                            @for ($i = 0; $i < 5; $i++) 
                            <div class="w-64 h-90">
                                <div id="" class="relative w-full h-52">
                                    <!-- Carousel wrapper -->
                                        <div class="relative overflow-hidden rounded-lg md:h-52">
                                            <!-- Item 1 -->
                                            <div>
                                                <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                            </div>
                                        </div>
  
                                    </div>

                                    <div class="mt-2 flex">
                                        <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" alt="Example Image" class="rounded-full h-7 w-7">
                                        <div>
                                            <div class="ml-2 font-semibold text-base">
                                                Nick
                                            
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-1 text-lg">
                                        I will design a timeless logo
                                    </div>

                                    <div class="mt-4 flex items-center">
                                        <svg class="h-4 w-4 black width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"/>
                                            <path d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873" fill="currentColor" />
                                        </svg>
                                        <div class="ml-1">
                                            5
                                        </div>
                                        <div class="ml-1">
                                            (
                                        </div>
                                        <div class="">
                                            1493
                                        </div>
                                        <div>
                                            )
                                        </div>
                                    </div>

                                    <div class="font-bold">
                                            From $130
                                    </div>
                                
                                </div>  

                                @endfor
                            </div>
                           
                            <div class="hidden duration-700 ease-in-out flex gap-5 justify-center py-5" data-carousel-item>
                            @for ($i = 0; $i < 5; $i++) 
                            <div class="w-64 h-90">
                                <div id="" class="relative w-full h-52">
                                    <!-- Carousel wrapper -->
                                        <div class="relative overflow-hidden rounded-lg md:h-52">
                                            <!-- Item 1 -->
                                            <div>
                                                <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                            </div>
                                        </div>
  
                                    </div>

                                    <div class="mt-2 flex">
                                        <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" alt="Example Image" class="rounded-full h-7 w-7">
                                        <div>
                                            <div class="ml-2 font-semibold text-base">
                                                Nick
                                            
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-1 text-lg">
                                        I will design a timeless logo
                                    </div>

                                    <div class="mt-4 flex items-center">
                                        <svg class="h-4 w-4 black width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"/>
                                            <path d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873" fill="currentColor" />
                                        </svg>
                                        <div class="ml-1">
                                            5
                                        </div>
                                        <div class="ml-1">
                                            (
                                        </div>
                                        <div class="">
                                            1493
                                        </div>
                                        <div>
                                            )
                                        </div>
                                    </div>

                                    <div class="font-bold">
                                            From $130
                                    </div>
                                
                                </div>  

                                @endfor
                            </div>
                           
                            <div class="hidden duration-700 ease-in-out flex gap-5 justify-center py-5" data-carousel-item>
                            @for ($i = 0; $i < 5; $i++) 
                            <div class="w-64 h-90">
                                <div id="" class="relative w-full h-52">
                                    <!-- Carousel wrapper -->
                                        <div class="relative overflow-hidden rounded-lg md:h-52">
                                            <!-- Item 1 -->
                                            <div>
                                                <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                            </div>
                                        </div>
  
                                    </div>

                                    <div class="mt-2 flex">
                                        <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" alt="Example Image" class="rounded-full h-7 w-7">
                                        <div>
                                            <div class="ml-2 font-semibold text-base">
                                                Nick
                                            
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-1 text-lg">
                                        I will design a timeless logo
                                    </div>

                                    <div class="mt-4 flex items-center">
                                        <svg class="h-4 w-4 black width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"/>
                                            <path d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873" fill="currentColor" />
                                        </svg>
                                        <div class="ml-1">
                                            5
                                        </div>
                                        <div class="ml-1">
                                            (
                                        </div>
                                        <div class="">
                                            1493
                                        </div>
                                        <div>
                                            )
                                        </div>
                                    </div>

                                    <div class="font-bold">
                                            From $130
                                    </div>
                                
                                </div>  

                                @endfor
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white border border-black group-hover:bg-white/50 ">
                                <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white border border-black group-hover:bg-white/50 ">
                                <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>


                    <div class="bg-white mt-4 w-9/12 mx-auto font-semibold text-2xl text-gray-800 leading-tight flex">
                        All Gigs
                    </div>
                    
                    <div class="w-9/12 mx-auto mt-4">
                        @php
                            $servicesChunks = $services->chunk(5);
                        @endphp

                        @foreach($servicesChunks as $serviceChunk)                                    
                            <div class="flex gap-5">
                            @foreach($serviceChunk as $service)
                            
                            
                                <div class="w-64 h-90">
                                        <div id="" class="relative w-full h-52">
                                            <!-- Carousel wrapper -->
                                                <div class="relative overflow-hidden rounded-lg md:h-52">
                                                    <!-- Item 1 -->
                                                    <div>
                                                    <a href="{{ route('service.show', ['id' => $service->id, 'user_id' => $service->user_id]) }}" class="text-decoration-none">
                                                        <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                                    </a>
                                                    </div>
                                                </div>
        
                                            </div>

                                            <div class="mt-2 flex">
                                                <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" alt="Example Image" class="rounded-full h-7 w-7">
                                                <div>
                                                    <div class="ml-2 font-semibold text-base">
                                                    {{ $service->username}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-1 text-lg">
                                            <a href="{{ route('service.show', ['id' => $service->id, 'user_id' => $service->user_id]) }}" class="text-decoration-none hover:underline">
                                            {{ $service->title}}
                                            </a>
                                            </div>

                                            <div class="mt-4 flex items-center">
                                                <svg class="h-4 w-4 black width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873" fill="currentColor" />
                                                </svg>
                                                <div class="ml-1">
                                                    {{ number_format($service->avg_star_rating, 1) }}
                                                </div>
                                                <div class="ml-1">
                                                    (
                                                </div>
                                                <div class="">
                                                    {{ $service->total_reviews}}
                                                </div>
                                                <div>
                                                    )
                                                </div>
                                            </div>

                                            <div class="font-bold">
                                                <a href="{{ route('service.show', ['id' => $service->id, 'user_id' => $service->user_id]) }}" class="text-decoration-none hover:underline">
                                                    From ${{ $service->basic_plan_price}}
                                                    </a>
                                            </div>
                                        
                                    </div>  
                                    
                                    @endforeach
                                </div>
                                
                                @endforeach
                            </div>
                     
            </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</x-app-layout>
