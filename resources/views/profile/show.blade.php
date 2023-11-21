<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Profile") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex-col w-1/4 m-8">
                    <div class="flex-col align-center bg-gray-800 dark:bg-white p-4">
                        <!-- Make this a component later -->
                        <img class="w-48 h-48 rounded-full bg-white border-2 dark:border-black mx-auto" src="https://www.svgrepo.com/show/396909/letter-s.svg" alt="Rounded avatar">
                        <h1 class="text-center">{{ Auth::user()->name }}</h1>
                        <div class="py-4">
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
                    <div>
                        fadfaf
                    </div>
                </div>
                <div class="flex-col w-3/5 m-8">
                    <div class="bg-white dark:bg-gray-400">
                        safads
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>