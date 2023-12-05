<x-app-layout>

<!-- <div class="flex items-center border-gray-200 bg-white border h-12">
    <div class="flex mx-auto w-3/5">
        <div class="hidden space-x-4 sm:-my-px sm:ms-5 sm:flex">
            <div class=" flex items-center justify-center h-8 w-8 bg-green-400 rounded-full">
                <div class="text-white text-xl flex items-center justify-center font-bold">1</div>
            </div>
        </div>
    </div>
</div> -->

<div class="mt-8 flex items-center justify-center">
    <form method="POST" action="{{ route('service.store', ['user_id' => Auth::user()->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="w-3/5">
            <div class="text-2xl">
                {{ __("Overview") }}
            </div>
            <div class="mt-5 mb-5 w-full border border-gray-300"></div>
            <div class=" border-gray-200 bg-white border p-6 mt-3">
                <div class="w-full flex">
                    <div class="w-1/3">
                        <div class="font-bold">
                            {{ __("Gig title") }}
                        </div>
                        <div class="mt-2 w-4/5">
                            {{ __("As your Gig storefront, your title is the most important place to include keywords that buyers would likely use to search for a service like yours.") }}
                        </div>  
                    </div>
                    <div class="w-2/3">
                        <div class="col-span-full">
                            <div class="relative">
                                <textarea id="title" name="title" rows="6" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="I will do something about"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full flex mt-7">
                    <div class="w-1/3">
                        <div class="font-bold">
                            {{ __("Category") }}
                        </div>
                        <div class="mt-2 w-4/5">
                            {{ __("Choose the category and sub-category most suitable for your Gig.") }}
                        </div>  
                        </div>
                        <div class="w-2/3 flex">
                            <div class="font-semibold text-l text-gray-800 leading-tight w-2/5">
                                <label for="category"><h4> {{ __("Category :") }} </h4></label>
                                <select class="mt-1 form-control border-gray-300 w-full rounded-md" id="category" name="category">
                                    <option value="1">1 DAY DELIVERY</option>
                                    <option value="2">2 DAYS DELIVERY</option>
                                    <option value="3">3 DAYS DELIVERY</option>
                                </select>
                            </div>
                            <div class="font-semibold text-l text-gray-800 leading-tight w-2/5 ml-20">
                                <label for="subcategory"><h4> {{ __("Sub Category :") }} </h4></label>
                                <select class="mt-1 form-control border-gray-300 w-full rounded-md" id="subcategory" name="subcategory">
                                    <option value="1">1 DAY DELIVERY</option>
                                    <option value="2">2 DAYS DELIVERY</option>
                                    <option value="3">3 DAYS DELIVERY</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-2xl mt-10">
                {{ __("Scope & Pricing") }}
            </div>

            <div class="mt-5 mb-5 w-full border border-gray-300"></div>
            <div class=" border-gray-200 bg-white border mt-3">
                <div class="w-full flex items-center">
                    <div class="w-1/4   flex items-center justify-center">
                        {{ __("Packages") }}
                    </div>
                    <div class="w-full">
                        <div class="w-full flex">
                            <div class="h-20 w-1/3 border bg-gray-100 border-gray-200 flex items-center justify-center font-semibold">
                                {{ __("BASIC") }}
                            </div>
                            <div class="w-1/3 border bg-gray-100 border-gray-200 flex items-center justify-center font-semibold">
                                {{ __("STANDARD") }}
                            </div>
                            <div class="w-1/3 border bg-gray-100 border-gray-200 flex items-center justify-center font-semibold">
                                {{ __("PREMIUM") }}
                            </div>
                        </div>
                        <div class="w-full flex">
                            <div class="h-20 w-1/3 border  border-gray-200 flex items-start">
                                <input type="text" name="basic_plan_title" id="packagetitlebasic" autocomplete="packagetitlebasic" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Name your package">
                            </div>
                            <div class="w-1/3 border  border-gray-200 flex items-start">
                                <input type="text" name="standard_plan_title" id="packagetitlestandard" autocomplete="packagetitlestandard" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Name your package">
                            </div>
                            <div class="w-1/3 border  border-gray-200 flex items-start">
                                <input type="text" name="premium_plan_title" id="packagetitlepremium" autocomplete="packagetitlepremium" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Name your package">
                            </div>
                        </div>

                        <div class="w-full flex">
                            <div class="h-20 w-1/3 border border-gray-200 flex items-start">
                                <input type="text" name="basic_plan_description" id="descriptionbasic" autocomplete="descriptionbasic" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Describe the details of your offering">
                            </div>
                            <div class="w-1/3 border  border-gray-200 flex items-start">
                                <input type="text" name="standard_plan_description" id="descriptionstandard" autocomplete="descriptionstandard" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Describe the details of your offering">
                            </div>
                            <div class="w-1/3 border  border-gray-200 flex items-start">
                                <input type="text" name="premium_plan_description" id="descriptionpremium" autocomplete="descriptionpremium" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Describe the details of your offering">
                            </div>
                        </div>

                        <div class="w-full flex">
                            <div class="w-1/3 border border-gray-200 flex items-start">
                                <select class="mt-1 form-control border-0 w-full" name="basic_plan_days" id="basic_plan_days">
                                    <option class="hidden" value="" selected disabled>DELIVERY TIME</option>
                                    <option value="1">1 DAY DELIVERY</option>
                                    <option value="2">2 DAYS DELIVERY</option>
                                    <option value="3">3 DAYS DELIVERY</option>
                                    <option value="4">4 DAYS DELIVERY</option>
                                    <option value="5">5 DAYS DELIVERY</option>
                                    <option value="6">6 DAYS DELIVERY</option>
                                    <option value="7">7 DAYS DELIVERY</option>
                                    <option value="10">10 DAYS DELIVERY</option>
                                    <option value="14">14 DAYS DELIVERY</option>
                                    <option value="21">21 DAYS DELIVERY</option>
                                    <option value="30">30 DAYS DELIVERY</option>
                                    <option value="45">45 DAYS DELIVERY</option>
                                    <option value="60">60 DAYS DELIVERY</option>
                                    <option value="75">75 DAYS DELIVERY</option>
                                    <option value="90">90 DAYS DELIVERY</option>
                                </select>
                            </div>
                            <div class="w-1/3 border  border-gray-200 flex items-start">
                                <select class="mt-1 form-control border-0 w-full" name="standard_plan_days" id="standard_plan_days">
                                    <option class="hidden" value="" selected disabled>DELIVERY TIME</option>
                                    <option value="1">1 DAY DELIVERY</option>
                                    <option value="2">2 DAYS DELIVERY</option>
                                    <option value="3">3 DAYS DELIVERY</option>
                                    <option value="4">4 DAYS DELIVERY</option>
                                    <option value="5">5 DAYS DELIVERY</option>
                                    <option value="6">6 DAYS DELIVERY</option>
                                    <option value="7">7 DAYS DELIVERY</option>
                                    <option value="10">10 DAYS DELIVERY</option>
                                    <option value="14">14 DAYS DELIVERY</option>
                                    <option value="21">21 DAYS DELIVERY</option>
                                    <option value="30">30 DAYS DELIVERY</option>
                                    <option value="45">45 DAYS DELIVERY</option>
                                    <option value="60">60 DAYS DELIVERY</option>
                                    <option value="75">75 DAYS DELIVERY</option>
                                    <option value="90">90 DAYS DELIVERY</option>
                                </select>
                            </div>
                            <div class="w-1/3 border  border-gray-200 flex items-start">
                                <select class="mt-1 form-control border-0 w-full" name="basic_plan_days" id="basic_plan_days">
                                    <option class="hidden" value="" selected disabled>DELIVERY TIME</option>
                                    <option value="1">1 DAY DELIVERY</option>
                                    <option value="2">2 DAYS DELIVERY</option>
                                    <option value="3">3 DAYS DELIVERY</option>
                                    <option value="4">4 DAYS DELIVERY</option>
                                    <option value="5">5 DAYS DELIVERY</option>
                                    <option value="6">6 DAYS DELIVERY</option>
                                    <option value="7">7 DAYS DELIVERY</option>
                                    <option value="10">10 DAYS DELIVERY</option>
                                    <option value="14">14 DAYS DELIVERY</option>
                                    <option value="21">21 DAYS DELIVERY</option>
                                    <option value="30">30 DAYS DELIVERY</option>
                                    <option value="45">45 DAYS DELIVERY</option>
                                    <option value="60">60 DAYS DELIVERY</option>
                                    <option value="75">75 DAYS DELIVERY</option>
                                    <option value="90">90 DAYS DELIVERY</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full flex items-center border border-gray-200">
                    <div class="w-1/4  flex items-center justify-center font-bold">
                            {{ __("Total Price") }}
                    </div>
                    <div class="w-full flex">
                        <div class="h-10 w-1/3 border border-gray-200 flex items-center">
                            <div class="ml-3 mr-1">$</div>
                            <input type="number" name="basic_plan_price" id="basic_plan_price" autocomplete="basic_plan_price" class="block border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 w-full">
                        </div>
                        <div class="w-1/3 border border-gray-200 flex items-center">
                            <div class="ml-3 mr-1">$</div>
                            <input type="number" name="standard_plan_price" id="standard_plan_price" autocomplete="standard_plan_price" class="block border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 w-full">
                        </div>
                        <div class="w-1/3 border border-gray-200 flex items-center">
                            <div class="ml-3 mr-1">$</div>
                            <input type="number" name="premium_plan_price" id="premium_plan_price" autocomplete="premium_plan_price" class="block border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 w-full">
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-2xl mt-10">
                {{ __("Description") }}
            </div>
            <div class="mt-5 mb-5 w-full border border-gray-300"></div>

            <div>
                <div>
                    {{ __("Briefly Describe Your Gig") }}
                </div>
                <div class="mt-3">
                    <div class="relative">
                        <textarea id="description" name="description" rows="3" class="block w-full h-60  border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6"></textarea>
                    </div>
                </div>
            </div>


            <div class="text-2xl mt-10">
                {{ __("Images") }}
            </div>
            <div class="mt-5 mb-5 w-full border border-gray-300"></div>

            <div>
                <div>
                    Add images for your gig (up to 5)
                </div>
                <div class="mt-3 flex">     

                    <div class="flex items-center justify-center w-1/4">
                        <label class="flex flex-col items-center justify-center w-56 h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800  hover:bg-gray-100 dark:border-gray-600 ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6 place">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Drag & drop a photo or browse</span></p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG</p>
                                <input type="file" class="form-control hidden" name="gambar1" required|max:2048|mimes:jpeg,png,jpg>
                            </div>
                        </label>
                    </div> 

                    <div class="flex items-center justify-center w-1/4 ml-10">
                        <label class="flex flex-col items-center justify-center w-56 h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800  hover:bg-gray-100 dark:border-gray-600 ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6 place">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Drag & drop a photo or browse</span></p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG</p>
                                <input type="file" class="form-control hidden" name="gambar2" required|max:2048|mimes:jpeg,png,jpg>
                            </div>
                        </label>
                    </div>

                    <div class="flex items-center justify-center w-1/4 ml-10">
                        <label class="flex flex-col items-center justify-center w-56 h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800  hover:bg-gray-100 dark:border-gray-600 ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6 place">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Drag & drop a photo or browse</span></p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG</p>
                                <input type="file" class="form-control hidden" name="gambar3" required|max:2048|mimes:jpeg,png,jpg>
                            </div>
                        </label>
                    </div>
                </div>


                <div class="mt-3 flex">     

                    <div class="flex items-center justify-center w-1/4">
                        <label class="flex flex-col items-center justify-center w-56 h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800  hover:bg-gray-100 dark:border-gray-600 ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6 place">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Drag & drop a photo or browse</span></p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG</p>
                                <input type="file" class="form-control hidden" name="gambar4" required|max:2048|mimes:jpeg,png,jpg>
                            </div>
                        </label>
                    </div> 

                    <div class="flex items-center justify-center w-1/4 ml-10">
                        <label class="flex flex-col items-center justify-center w-56 h-52 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800  hover:bg-gray-100 dark:border-gray-600 ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6 place">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Drag & drop a photo or browse</span></p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG</p>
                                <input type="file" class="form-control hidden" name="gambar5" required|max:2048|mimes:jpeg,png,jpg>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="mt-24 mb-5 w-full flex justify-end">
                <button type="submit" class="focus:outline-none text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2  dark:hover:bg-green-700 dark:focus:ring-green-800">
                    {{ __("Publish Gig") }}
                </button>
            </div>
    </form>
</div>

</x-app-layout>