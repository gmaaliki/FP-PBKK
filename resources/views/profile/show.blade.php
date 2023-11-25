<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Profile") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex-col w-2/5 m-8">
                    <div class="flex-col align-center bg-gray-800 p-4">
                        <!-- Make this a component later -->
                        <img class="w-40 h-40 rounded-full bg-white border-2 mx-auto" src="https://www.svgrepo.com/show/396909/letter-s.svg" alt="Rounded avatar">
                        <div class="text-3xl">
                            <h1 class="text-center">{{ Auth::user()->name }}</h1>
                        </div>
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
                    </div>    
                    <div class="flex-col align-center bg-gray-800 p-4 my-5">
                        <div class="flex font-semibold">
                            <div class="w-1/2 text-left">
                                <h3>Languages</h3>
                            </div>
                            <div class="w-1/2 text-right">
                                <a href="">{{ __("Add new+")}}</a>
                            </div>
                        </div>
                        <div>
                            <!-- Add blade template logic to show from database -->
                            <p>English</p>
                        </div>
                    </div>
                    <div class="flex-col align-center bg-gray-800 p-4 my-5">
                        <div class="flex font-semibold">
                            <div class="w-1/2 text-left">
                                <h3>Skills</h3>
                            </div>
                            <div class="w-1/2 text-right">
                                <a href="">{{ __("Add new+")}}</a>
                            </div>
                        </div>
                        <div>
                            <!-- Add blade template logic to show from database -->
                            <p>Gardening</p>
                        </div>
                    </div>
                    <div class="flex-col align-center bg-gray-800 p-4 my-5">
                        <div class="flex font-semibold">
                            <div class="w-1/2 text-left">
                                <h3>Education</h3>
                            </div>
                            <div class="w-1/2 text-right">
                                <a href="">{{ __("Add new+")}}</a>
                            </div>
                        </div>
                        <div>
                            <!-- Add blade template logic to show from database -->
                            <p>High School</p>
                        </div>
                    </div>
                    <div class="flex-col align-center bg-gray-800 p-4 my-5">
                        <div class="flex font-semibold">
                            <div class="w-1/2 text-left">
                                <h3>Certification</h3>
                            </div>
                            <div class="w-1/2 text-right">
                                <a href="">{{ __("Add new+")}}</a>
                            </div>
                        </div>
                        <div>
                            <!-- Add blade template logic to show from database -->
                            <p>World's best gardener</p>
                        </div>
                    </div>
                </div>
                <div class="flex-col w-3/5 m-8">
                    <div class="flex-col align-center font-semibold text-3xl bg-gray-800 p-4">
                        {{ __("Gigs list") }}
                        <x-primary-button>
                            {{ __("Add gig") }}
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>