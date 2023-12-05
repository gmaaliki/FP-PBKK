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
                        <div class="bg-white p-5 border-gray-300 border">
                            <div class="flex justify-end">
                                <a href=" {{ route('profile.edit') }}">
                                    <x-edit-icon/>
                                </a>
                            </div>
                            @if(Auth::user()->image)
                                <img src="{{ asset(Storage::url(Auth::user()->image)) }}" class="w-40 h-40 rounded-full bg-white border-2 mx-auto" alt="image-service">
                            @else
                                <img class="w-40 h-40 rounded-full bg-white border-2 mx-auto" src="https://www.svgrepo.com/show/396909/letter-s.svg" alt="Rounded avatar">
                            @endif
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
                                        {{ Auth::user()->description }}
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
                                    <a href="{{ route('language.create') }} ">{{ __("Add new+")}}</a>
                                </div>
                            </div>
                            @foreach($languages as $language)
                                <div class="flex my-2">
                                        <div class="w-3/4 flex text-left">
                                            <p>{{ $language->language }}</p>
                                            <p class="text-gray-600 italic">|{{ $language->language_level }}</p>
                                        </div>
                                        <div class="w-1/4 flex justify-end">
                                            <a href=" {{ route('language.edit', ['id_language' => $language->id]) }}"><x-edit-icon/></a>
                                            <form method="POST" action="{{ route('language.destroy', ['id_language' => $language->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"><x-delete-icon/></a>
                                            </form>
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
                                    <a href="{{ route('skill.create') }}">{{ __("Add new+")}}</a>
                                </div>
                            </div>
                            @foreach($skills as $skill)
                                <div class="flex my-2">
                                        <div class="w-3/4 flex text-left">
                                            <p>{{ $skill->skill }}</p>
                                            <p class="text-gray-600 italic">|{{ $skill->experience_level }}</p>
                                        </div>
                                        <div class="w-1/4 flex justify-end">
                                            <a href=" {{ route('skill.edit', ['id_skill' => $skill->id]) }}"><x-edit-icon/></a>
                                            <form method="POST" action="{{ route('skill.destroy', ['id_skill' => $skill->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"><x-delete-icon/></a>
                                            </form>
                                        </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex-col align-center my-5">
                            <div class="flex font-semibold">
                                <div class="w-1/2 text-left">
                                    <h3>Education</h3>
                                </div>
                                <div class="w-1/2 text-right">
                                    <a href="{{ route('education.create') }}">{{ __("Add new+")}}</a>
                                </div>
                            </div>
                            @foreach($educations as $education)
                                <div class="flex my-2">
                                        <div class="w-3/4 flex text-left">
                                            <div class="flex-col">
                                                <div>
                                                    <p> {{ $education->country_of_college }} ({{ $education->year }})</p>
                                                </div>
                                                <div class="flex">
                                                    <p>{{ $education->major }}</p>
                                                    <p class="text-gray-600 italic">|{{ $education->title }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-1/4 flex justify-end items-center">
                                            <a href=" {{ route('education.edit', ['id_education' => $education->id]) }}"><x-edit-icon/></a>
                                            <form method="POST" action="{{ route('education.destroy', ['id_education' => $education->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"><x-delete-icon/></a>
                                            </form>
                                        </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex-col align-center my-5">
                            <div class="flex font-semibold">
                                <div class="w-1/2 text-left">
                                    <h3>Certification</h3>
                                </div>
                                <div class="w-1/2 text-right">
                                    <a href="{{ route('certification.create') }}">{{ __("Add new+")}}</a>
                                </div>
                            </div>
                            @foreach($certifications as $certification)
                                <div class="flex my-2">
                                        <div class="w-3/4 flex text-left">
                                            <p>{{ $certification->certificate_name }}</p>
                                            <p class="text-gray-600 italic">|{{ $certification->certification_from }}</p>
                                        </div>
                                        <div class="w-1/4 flex justify-end">
                                            <a href=" {{ route('certification.edit', ['id_certification' => $certification->id]) }}"><x-edit-icon/></a>
                                            <form method="POST" action="{{ route('certification.destroy', ['id_certification' => $certification->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"><x-delete-icon/></a>
                                            </form>
                                        </div>
                                </div>
                            @endforeach
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
                    <div class="px-10">
                        @foreach($services as $service)
                            <div class="w-full h-48 flex rounded border border-gray-300 my-5">
                                <div class="relative flex-shrink-0 w-48 h-48 overflow-hidden">
                                    <a href="{{ route('service.show', ['id' => $service->id, 'user_id' => $service->user_id]) }}" class="text-decoration-none">
                                        <img src="{{ Storage::url($service->image) }}" class="object-cover w-full h-full" alt="image-service">
                                    </a>
                                </div>

                                <div class="flex-col p-5">
                                    <div class="text-xl font-semibold flex">
                                        <a href="{{ route('service.show', ['id' => $service->id, 'user_id' => $service->user_id]) }}" class="text-decoration-none hover:underline">
                                            <p>
                                                {{ $service->title}}
                                            </p>
                                            <div class="ml-1">
                                                <a href=" {{ route('service.edit', ['id_service' => $service->id]) }}"><x-edit-icon/></a>
                                            </div>
                                            <div class="ml-1">
                                                <form method="POST" action="{{ route('service.destroy', ['id_service' => $service->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"><x-delete-icon/></a>
                                                </form>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=" w-full h-24 text-clip overflow-hidden">
                                        <p class="text-justify">
                                            {{ $service->description }}
                                        </p>
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
                                </div>
                            </div>  
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>