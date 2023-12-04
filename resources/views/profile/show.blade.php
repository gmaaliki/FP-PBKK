<x-app-layout>
    @if(session('success'))
        <div class="flex items-center justify-center w-full h-8 py-auto bg-green-300 font-semibold">
            {{ session('success') }}
        </div>
    @endif

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex-col w-2/5 m-8">
                    <div class="flex-col align-center ">
                        <!-- Make this a component later -->
                        <div class="bg-white p-5 border-gray-300 border">
                            <img class="w-40 h-40 rounded-full bg-white border-2 mx-auto" src="https://www.svgrepo.com/show/396909/letter-s.svg" alt="Rounded avatar">
                            <div class="text-3xl">
                                <h1 class="text-center">{{ Auth::user()->name }}</h1>
                            </div>
                        </div>
                    </div>   

                    <div class="bg-white border border-gray-300 mt-6 px-4">
                        <div class="py-4">
                                <div class="mb-4">
                                    <div class="font-semibold">
                                        <h3>Description</h3>
                                    </div>    
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                                <div class="flex">
                                    <div class="w-1/2 text-left">
                                        Member since:
                                    </div>
                                    <div class="w-1/2 text-right">
                                        {{ Auth::user()->created_at->format('j F Y') }}
                                    </div>
                                </div>
                            </div>
                        <div class="flex-col align-center my-5">
                            <div class="flex font-semibold">
                                <div class="w-1/2 text-left">
                                    <h3>Languages</h3>
                                </div>
                                <div class="w-1/2 text-right">
                                    <a href="{{ route('language.create', ['id' => Auth::user()->id]) }} ">{{ __("Add new+")}}</a>
                                </div>
                            </div>
                            @foreach($languages as $language)
                                <div class="flex my-5">
                                    <!-- Add blade template logic to show from database -->
                                        <div class="w-1/2 flex text-left">
                                            <p>{{ $language->language }}</p>
                                            <p class="text-gray-600 italic">|{{ $language->language_level }}</p>
                                        </div>
                                        <div class="w-1/2 flex justify-end">
                                            <a href=""><x-edit-icon/></a>
                                            <a href=""><x-delete-icon/></a>
                                        </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex-col align-center my-5">
                            <div class="flex font-semibold">
                                <div class="w-1/2 text-left">
                                    <h3>Skills</h3>
                                </div>
                                <div class="w-1/2 text-right">
                                    <a href="">{{ __("Add new+")}}</a>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-1/2 text-left">
                                    <p>Gardening</p>
                                </div>
                                <div class="w-1/2 flex justify-end">
                                    <a href=""><x-edit-icon/></a>
                                    <a href=""><x-delete-icon/></a>
                                </div>
                            </div>
                        </div>
                        <div class="flex-col align-center my-5">
                            <div class="flex font-semibold">
                                <div class="w-1/2 text-left">
                                    <h3>Education</h3>
                                </div>
                                <div class="w-1/2 text-right">
                                    <a href="">{{ __("Add new+")}}</a>
                                </div>
                            </div>
                            <div class="flex">
                                <!-- Add blade template logic to show from database -->
                                <div class="w-1/2 text-left">
                                    <p>High School</p>
                                </div>
                                <div class="w-1/2 flex justify-end">
                                    <a href=""><x-edit-icon/></a>
                                    <a href=""><x-delete-icon/></a>
                                </div>
                            </div>
                        </div>
                        <div class="flex-col align-center my-5">
                            <div class="flex font-semibold">
                                <div class="w-1/2 text-left">
                                    <h3>Certification</h3>
                                </div>
                                <div class="w-1/2 text-right">
                                    <a href="">{{ __("Add new+")}}</a>
                                </div>
                            </div>
                            <div class="flex">
                                <!-- Add blade template logic to show from database -->
                                <div class="w-1/2 text-left">
                                    <p>World's best gardener</p>
                                </div>
                                <div class="w-1/2 flex justify-end">
                                    <a href=""><x-edit-icon/></a>
                                    <a href=""><x-delete-icon/></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                    
        

                <div class="flex-col w-3/5 m-8 bg-white border border-gray-300">
                    <div class="flex justify-center align-middle font-semibold text-3xl p-4">
                        <div>
                        {{ __("Gigs list") }}
                        </div>
                        
                        <a href="{{ route('service.create') }}">
                            <x-primary-button class="ml-5" >
                                {{ __("Add gig") }}
                            </x-primary-button>
                        </a>
                    </div>
                </div>



            </div>
        </div>
    </div>
</x-app-layout>