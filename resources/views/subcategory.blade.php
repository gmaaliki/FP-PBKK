<x-app-layout>
<style>
    /* Add your CSS styles here */
    .tab-content {
      display: none;
    }

    .tab.active {
      background-color: #f0f0f0; /* Lighter background color for active tab */
    }

  </style>

    <div class="flex items-center justify-center bg-white">
            <div class="w-4/5 min-h-800">
                <div class="mt-10 text-3xl font-bold">
                    {{$subcategoryModel->subcategory_name}}
                </div>
                <div class="mt-5 text-xl">
                    Every gigs in the subcategory
                </div>

                <div class="mt-10 border border-t-gray-300 w-full">
                </div>
                    
                <div class="">
                <div class="mt-10">
                    <div class="flex">
                        <div class="font-bold border border-gray-300 rounded-lg w-32 py-3 text-center tab inactive flex justify-center" data-tab="budget">
                            Budget
                            <svg class="ml-2 h-6 w-6 text-black"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5.5 5h13a1 1 0 0 1 0.5 1.5L14 12L14 19L10 16L10 12L5 6.5a1 1 0 0 1 0.5 -1.5" /></svg>
                        </div>
                        <div class="font-bold border border-gray-300 rounded-lg w-40 py-3 ml-4 text-center tab inactive flex justify-center" data-tab="delivery">
                            Delivery time
                            <svg class="ml-2 h-6 w-6 text-black"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5.5 5h13a1 1 0 0 1 0.5 1.5L14 12L14 19L10 16L10 12L5 6.5a1 1 0 0 1 0.5 -1.5" /></svg>
                        </div>
                    </div>
                
                        <div class="tab-content hidden mt-2 rounded-lg border border-gray-300 p-5 w-64" id="budgetContent">   
                            <div class="flex items-center">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2">
                                <label for="default-radio-1" class="ms-2 text-base font-bold">Value</label>
                                <div class="ml-5">Under $50</div>
                            </div>
                            <div class="flex items-center mt-2">
                                <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 ">
                                <label for="default-radio-2" class="ms-2 text-base font-bold ">Mid-range</label>
                                <div class="ml-5">$50 - $90</div>
                            </div>
                            <div class="flex items-center mt-2">
                                <input checked id="default-radio-3" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 ">
                                <label for="default-radio-3" class="ms-2 text-base font-bold ">High-end</label>
                                <div class="ml-5">$90 & Above</div>
                            </div>
                            <div class="mt-2">
                                <button>
                                    <div class="flex items-center">
                                        <input checked id="default-radio-4" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 ">
                                        <label for="default-radio-4" class="ms-2 text-base font-bold ">Custom</label>
                                    </div>   
                                    <div class="ml-6 mt-2 border border-black">
                                        <input type="number" name="custom" id="custom" autocomplete="custom" class="block border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                    </div>
                                </button>
                            </div>

                            <div class="mt-3 flex justify-center">
                                <button type="button" class="text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-md text-sm px-20 py-2.5 text-center inline-flex items-center dark:focus:ring-[#050708]/50 dark:hover:bg-[#050708]/30">
                                    Apply
                                </button>
                            </div>

                            
                        </div>

                        <div class="ml-36 tab-content hidden mt-2 rounded-lg border border-gray-300 p-5 w-64" id="deliveryContent">
                            <div class="flex items-center">
                                <input id="default-radio-5" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2">
                                <label for="default-radio-5" class="ms-2 text-base font-bold">Express 24H</label>
                            </div>
                            <div class="flex items-center mt-2">
                                <input checked id="default-radio-6" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 ">
                                <label for="default-radio-6" class="ms-2 text-base font-bold ">Up to 3 days</label>
                            </div>
                            <div class="flex items-center mt-2">
                                <input checked id="default-radio-7" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 ">
                                <label for="default-radio-7" class="ms-2 text-base font-bold ">Up to 7 days</label>
                            </div>
                            <div class="flex items-center mt-2">
                                <input checked id="default-radio-8" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 ">
                                <label for="default-radio-8" class="ms-2 text-base font-bold ">Anytime</label>
                            </div>
   
                        </div>
                   
                </div>
            </div>



            </div>
    </div>

    <script>
  // Add your JavaScript code here
  document.addEventListener('DOMContentLoaded', function () {
    // Get tabs and tab contents
    const tabs = document.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('.tab-content');

    // Display the Basic content by default
    // document.getElementById('basicContent').style.display = 'block';

    // Add click event listener to each tab
    tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
        const tabId = this.getAttribute('data-tab');

        // Check if the clicked tab is already active
        const isActive = this.classList.contains('active');

        // Remove active class from all tabs
        tabs.forEach(function (tab) {
            tab.classList.remove('active');
            tab.classList.add('inactive');
        });

        // Hide all tab contents
        tabContents.forEach(function (content) {
            content.style.display = 'none';
        });

        // If the clicked tab was not active, make it active and show the corresponding content
        if (!isActive) {
            this.classList.remove('inactive');
            this.classList.add('active');
            document.getElementById(tabId + 'Content').style.display = 'block';
        }
    });
});



  });


    const radioButtons = document.querySelectorAll('input[name="default-radio"]');
    const customInput = document.getElementById('custom');

    // Add event listeners to all radio buttons
    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            // Enable or disable the custom input based on the "Custom" radio button's checked status
            customInput.disabled = !document.getElementById('default-radio-4').checked;
        });
    });


    // const applyButton = document.querySelector('#applyButton');
    // const budgetContent = document.getElementById('budgetContent');
    // const deliveryContent = document.getElementById('deliveryContent');

    // applyButton.addEventListener('click', function () {
    //     // Get selected budget and delivery options
    //     const selectedBudget = document.querySelector('input[name="budget"]:checked').value;
    //     const selectedDelivery = document.querySelector('input[name="delivery"]:checked').value;

    //     // Call an API or perform AJAX request to fetch filtered services based on selected options
    //     // For simplicity, I'll just filter services client-side here
    //     const filteredServices = services.filter(function (service) {
    //         return (
    //             (selectedBudget === 'any' || service.budget === selectedBudget) &&
    //             (selectedDelivery === 'any' || service.delivery === selectedDelivery)
    //         );
    //     });

    //     // Update the displayed services with filtered services
    //     updateDisplayedServices(filteredServices);
    // });

    // function updateDisplayedServices(services) {
    //     // Clear existing services
    //     const servicesContainer = document.querySelector('#servicesContainer');
    //     servicesContainer.innerHTML = '';

    //     // Display filtered services
    //     services.forEach(function (service) {
    //         const serviceElement = document.createElement('div');
    //         serviceElement.textContent = service.service_name;
    //         servicesContainer.appendChild(serviceElement);
    //     });
    // }
</script>
</x-app-layout>