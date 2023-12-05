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
            Reccomended Gigs in  
            <div class="ml-1 text-blue-600">
                {{$randomSubcategory->subcategory_name}}
            </div>
        </div>

            <div id="default-carousel" class="relative w-330 mx-auto py-4">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96 border border-gray-300">
                            <!-- Item 1 -->

                               
                            <div class="  flex gap-5 justify-center py-5" >
                            @foreach ($reccomendServices as $service) 
                            <div class="w-64 h-90">
                                <div id="" class="relative w-full h-52">
                                    <!-- Carousel wrapper -->
                                        <div class="relative overflow-hidden rounded-lg md:h-52">
                                            <!-- Item 1 -->
                                            <div>
                                                @if($service->image != 'path')    
                                                    <img src="{{ Storage::url($service->image) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="image-service">
                                                @else
                                                    <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                                @endif
                                            </div>
                                        </div>
  
                                    </div>

                                    <div class="mt-2 flex">
                                        <a href="{{ route('service.show', ['id' => $service->id, 'user_id' => $service->user_id]) }}" class="text-decoration-none">
                                            @if($service->image != 'path')    
                                                            <img src="{{ Storage::url($service->image) }}" class="rounded-full h-7 w-7" alt="image-service">
                                                        @else
                                                            <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" class="rounded-full h-7 w-7" alt="...">
                                                        @endif
                                        </a>
                                        <div>
                                            <div class="ml-2 font-semibold text-base">
                                            <a href="{{ route('profile.page.show', ['id' => $service->user_id]) }}" class="text-decoration-none">
                                            {{$service->username}}
                                            </a>
                                            
                                            
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-1 text-lg">
                                    <a href="{{ route('service.show', ['id' => $service->id, 'user_id' => $service->user_id]) }}" class="text-decoration-none">
                                        {{$service->title}}
                                    </a>
                                    </div>

                                    <div class="mt-4 flex items-center">
                                        <svg class="h-4 w-4 black width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"/>
                                            <path d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873" fill="currentColor" />
                                        </svg>
                                        <div class="ml-1">
                                        {{$service->average_star}}
                                        </div>
                                        <div class="ml-1">
                                            (
                                        </div>
                                        <div class="">
                                        {{$service->total_reviews}}
                                        </div>
                                        <div>
                                            )
                                        </div>
                                    </div>

                                    <div class="font-bold">
                                    <a href="{{ route('service.show', ['id' => $service->id, 'user_id' => $service->user_id]) }}" class="text-decoration-none">
                                    From ${{ $service->basic_plan_price}}
                                            </a>
                                    </div>
                                
                                </div>  

                                @endforeach
                            </div>
                    </div>

                    <div class="bg-white mt-4 w-330 mx-auto font-semibold text-2xl text-gray-800 leading-tight flex">
                        All Gigs
                    </div>
                    
                    <div class="w-330 mx-auto mt-4">
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
                                                    @if($service->image != 'path')    
                                                    <img src="{{ Storage::url($service->image) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="image-service">
                                                @else
                                                    <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                                @endif
                                                    </a>
                                                    </div>
                                                </div>
        
                                            </div>

                                            <div class="mt-2 flex">
                                                <img src="{{ asset('images/Thinker-Auguste-Rodin-Museum-Paris-1904.jpg') }}" alt="Example Image" class="rounded-full h-7 w-7">
                                                <div>
                                                    <div class="ml-2 font-semibold text-base">
                                                    <a href="{{ route('profile.page.show', ['id' => $service->user_id]) }}" class="text-decoration-none">
                                            {{$service->username}}
                                            </a>
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
                                                    {{ $service->average_star}}
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
