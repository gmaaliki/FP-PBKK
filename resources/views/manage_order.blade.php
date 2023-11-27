<x-app-layout>

<style>
    /* Add your CSS styles here */
    .tab-content {
      display: none;
    }

    .tab.active {
      /* background-color: #ffffff;  */
      border-bottom: 3px solid #000000; Underline for active tab
      color: #000000;
    }

    .tab.inactive {
      color: #c9c9c9; /* Dimmer background color for inactive tabs */
    }
  </style>

    <div class="mt-8 flex items-center justify-center">
        <div class="w-4/5 min-h-800">

                <div class="text-4xl">
                    Manage Orders
                </div>
                <div class="">
                <div class="">
                    <div class="flex mt-5">
                        <div class=" w-28 py-3 text-center tab active" data-tab="active">
                            ACTIVE
                        </div>
                        <div class=" w-28 py-3 text-center tab inactive" data-tab="late">
                            LATE
                        </div>
                        <div class=" w-28 py-3 text-center tab inactive" data-tab="delivered">
                            DELIVERED
                        </div>
                        <div class=" w-28 py-3 text-center tab inactive" data-tab="completed">
                            COMPLETED
                        </div>
                        <div class=" w-28 py-3 text-center tab inactive" data-tab="cancelled">
                            CANCELLED
                        </div>
                    </div>
                    <div class="border border-gray-200 mt-5 bg-white">
                        <div class="tab-content" id="activeContent">
                            <div class="flex p-3 px-5 font-semibold border border-b-gray-300">
                                ACTIVE ORDERS
                            </div>
                            <div class="w-full flex text-xs font-semibold">
                                <div class="w-1/6 border border-gray-200 text-center py-2">
                                        BUYER
                                </div>
                                <div class="w-1/6 border border-gray-200 text-center py-2">
                                        GIG
                                </div>
                                <div class="w-1/6 border border-gray-200 text-center py-2">
                                        DUE ON
                                </div>
                                <div class="w-1/6 border border-gray-200 text-center py-2">
                                        TOTAL
                                </div>
                                <div class="w-1/6 border border-gray-200 text-center py-2">
                                        NOTE
                                </div>
                                <div class="w-1/6 border border-gray-200 text-center py-2">
                                        STATUS
                                </div>
                            </div>
                            <div class="flex p-3 px-5 font-base border border-b-gray-300">
                                No active orders to show
                            </div>
                        </div>
                        <div class="tab-content hidden" id="lateContent">
                            <div class="flex p-3 px-5 font-semibold border border-b-gray-300">
                                LATE ORDERS
                            </div>
                            <div class="w-full flex text-xs font-semibold">
                                <div class="w-1/6 border border-gray-200 text-center py-2">
                                        BUYER
                                </div>
                                <div class="w-1/6 border border-gray-200 text-center py-2">
                                        GIG
                                </div>
                                <div class="w-1/6 border border-gray-200 text-center py-2">
                                        DUE ON
                                </div>
                                <div class="w-1/6 border border-gray-200 text-center py-2">
                                        TOTAL
                                </div>
                                <div class="w-1/6 border border-gray-200 text-center py-2">
                                        NOTE
                                </div>
                                <div class="w-1/6 border border-gray-200 text-center py-2">
                                        STATUS
                                </div>
                            </div>
                            <div class="flex p-3 px-5 font-base border border-b-gray-300">
                                No late orders to show
                            </div>
                            
                        </div>
                        <div class="tab-content hidden" id="deliveredContent">
                            <div class="flex p-3 px-5 font-semibold border border-b-gray-300">
                                DELIVERED ORDERS
                            </div>
                            <div class="w-full flex text-xs font-semibold">
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        BUYER
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        GIG
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        DUE ON
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        DELIVERED AT
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        TOTAL
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        NOTE
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        STATUS
                                </div>
                                
                            </div>
                            <div class="flex p-3 px-5 font-base border border-b-gray-300">
                                No delivered orders to show
                            </div>
                        </div>

                        <div class="tab-content hidden" id="completedContent">
                            <div class="flex p-3 px-5 font-semibold border border-b-gray-300">
                                COMPLETED
                            </div>
                            <div class="w-full flex text-xs font-semibold">
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        BUYER
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        GIG
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        DUE ON
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        DELIVERED AT
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        TOTAL
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        NOTE
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        STATUS
                                </div>
                                
                            </div>
                            <div class="flex p-3 px-5 font-base border border-b-gray-300">
                                No completed orders to show
                            </div>
                        </div>

                        <div class="tab-content hidden" id="cancelledContent">
                            <div class="flex p-3 px-5 font-semibold border border-b-gray-300">
                                CANCELLED
                            </div>
                            <div class="w-full flex text-xs font-semibold">
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        BUYER
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        GIG
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        DUE ON
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        TOTAL
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        NOTE
                                </div>
                                <div class="w-1/7 border border-gray-200 text-center py-2">
                                        STATUS
                                </div>
                                
                            </div>
                            <div class="flex p-3 px-5 font-base border border-b-gray-300">
                                No canceled orders to show
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
    document.getElementById('activeContent').style.display = 'block';

    // Add click event listener to each tab
    tabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        const tabId = this.getAttribute('data-tab');

        // Remove active class from all tabs
        tabs.forEach(function (tab) {
          tab.classList.remove('active');
          tab.classList.add('inactive');
        });

        // Add active class to the clicked tab
        this.classList.remove('inactive');
        this.classList.add('active');

        // Hide all tab contents
        tabContents.forEach(function (content) {
          content.style.display = 'none';
        });

        // Show the selected tab content
        document.getElementById(tabId + 'Content').style.display = 'block';
      });
    });
  });
</script>
</x-app-layout>