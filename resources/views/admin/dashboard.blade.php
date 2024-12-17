<x-admin-layout>
    <div class="flex flex-col gap-8 md:gap-4 lg:pt-0 pt-2">
        <h1 class="font-medium text-gray-600 2xl:text-lg text-right lg:text-left">Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="w-full grid grid-cols-2 p-4 bg-blue-10 rounded">
                <div class="flex flex-col gap-2">
                    <h4 class="text-base lg:text-sm 2xl:text-lg font-bold opacity-70 text-blue-700">Welcome back, Admin</h4>
                    <p class="text-sm lg:text-xs 2xl:text-base text-blue-700">Fashion Store Dashboard</p>
                </div>
                <div class="flex items-end">
                    <img src="{{ asset('images/icons/customer-support.png') }}" alt="">
                </div>
            </div>
            <div class="w-full bg-white p-4 flex flex-row justify-between rounded">
                <div class="flex justify-between flex-col gap-3 lg:gap-0">
                    <h1 class="text-gray-600 font-semibold text-lg md:text-2xl lg:text-lg 2xl:text-2xl">€ 12.300</h1>
                    <h5 class="text-sm 2xl:text-base text-gray-500 font-medium">Total Earnings</h5>
                    <div class="flex flex-row gap-2">
                       <p class="py-0.5 px-1.5 bg-green-200 text-green-600 text-xxs 2xl:text-xs rounded">+5.35%</p>
                       <p class="text-xs 2xl:text-sm text-gray-400">Since last week</p>
                    </div>
                </div>
                <div class="icon bg-blue-10 font-medium rounded-full h-fit px-2.5 py-1 2xl:py-2 2xl:px-3.5 text-2xl 2xl:text-4xl text-blue-700 mt-2">
                    €
                </div>
            </div>
            <div class="w-full bg-white p-4 flex flex-row justify-between rounded">
                <div class="flex justify-between flex-col gap-3 md:gap-4 lg:gap-0">
                    <h1 class="text-gray-600 font-semibold text-lg md:text-2xl lg:text-lg 2xl:text-2xl">13</h1>
                    <h5 class="text-sm 2xl:text-base text-gray-500 font-medium">Pending Orders</h5>
                    <div class="flex flex-row gap-2">
                       <p class="py-0.5 px-1.5 bg-red-200 text-red-600 text-xxs 2xl:text-xs rounded">-2.15%</p>
                       <p class="text-xs 2xl:text-sm text-gray-400">Since last week</p>
                    </div>
                </div>
                <div class="icon bg-blue-10 rounded-full h-fit px-2.5 py-1.5 2xl:py-3 2xl:px-3.5 text-lg 2xl:text-2xl text-blue-700 mt-2">
                    <i class="fas fa-truck"></i>
                </div>
            </div>
            <div class="w-full bg-white p-4 flex flex-row justify-between rounded">
                <div class="flex justify-between flex-col gap-3 md:gap-4 lg:gap-0">
                    <h1 class="text-gray-600 font-semibold text-lg md:text-2xl lg:text-lg 2xl:text-2xl">27</h1>
                    <h5 class="text-sm 2xl:text-base text-gray-500 font-medium">Total Customers</h5>
                    <div class="flex flex-row gap-2">
                       <p class="py-0.5 px-1.5 bg-green-200 text-green-600 text-xxs 2xl:text-xs rounded">+3.05%</p>
                       <p class="text-xs 2xl:text-sm text-gray-400">Since last week</p>
                    </div>
                </div>
                <div class="icon bg-blue-10 rounded-full h-fit px-2.5 py-1.5 2xl:py-3 2xl:px-3.5 text-lg 2xl:text-2xl text-blue-700 mt-2">
                    <i class="fas fa-user-friends"></i>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-5">
            <div class="flex-1 flex flex-col gap-5">
                <section class="p-3 md:p-6 bg-white rounded shadow-md h-fit">
                    <div class="flex flex-col lg:flex-row justify-between lg:items-center mb-4 gap-4">
                        <h2 class="text-xl text-gray-600 font-semibold">Earnings Overview</h2>
                        <div class="space-x-2 text-xs">
                            <button id="weekBtn" class="toggle-btn bg-blue-500 text-white px-4 py-2 rounded-md">Week</button>
                            <button id="monthBtn" class="toggle-btn bg-gray-200 text-gray-700 px-4 py-2 rounded-md">Month</button>
                            <button id="yearBtn" class="toggle-btn bg-gray-200 text-gray-700 px-4 py-2 rounded-md">Year</button>
                        </div>
                    </div>
                    <div class="relative">
                        <canvas id="earningsChart" class="w-full"></canvas>
                    </div>
                </section>
                <section class="w-full h-fit bg-white rounded shadow-md p-3 md:p-6">
                    <div class="flex flex-row justify-between">
                        <h1 class="text-xl text-gray-600 font-semibold">Recent Orders</h1>
                        <a href="" class="rounded-full bg-gray-200 text-gray-700  py-1.5 px-3 text-xs">View details</a>
                    </div>
                    <div class="mt-4">
                        <table class="w-full" id="dashboard-orders">
                            <tr class="text-gray-600 text-xs md:text-sm 2xl:text-base">
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th class="text-nowrap">Amount &nbsp;</th>
                                <th>Status</th>
                            </tr>
                            <tr class="border-b">
                            </tr>
                            <tr>
                                <td><span class="bg-blue-100 text-blue-400 font-medium p-1 rounded">#7823</span></td>
                                <td>Ethan Harris</td>
                                <td>Dec 23</td>
                                <td>€ 87.99</td>
                                <td><span class="bg-green-100 text-green-600 font-medium py-1 px-2 rounded-full">Completed</span></td>
                            </tr>
                            <tr>
                                <td><span class="bg-blue-100 text-blue-400 font-medium p-1 rounded">#5673</span></td>
                                <td>Sophia Taylor</td>
                                <td>Dec 23</td>
                                <td>€ 45.99</td>
                                <td><span class="bg-yellow-100 text-yellow-600 font-medium py-1 px-2 rounded-full">Pending</span></td>
                            </tr>
                            <tr>
                                <td><span class="bg-blue-100 text-blue-400 font-medium p-1 rounded">#4853</span></td>
                                <td>Mia Anderson</td>
                                <td>Dec 23</td>
                                <td>€ 27.99</td>
                                <td><span class="bg-green-100 text-green-600 font-medium py-1 px-2 rounded-full">Completed</span></td>
                            </tr>
                            <tr>
                                <td><span class="bg-blue-100 text-blue-400 font-medium p-1 rounded">#9218</span></td>
                                <td>Olivia Garcia</td>
                                <td>Dec 22</td>
                                <td>€ 119.99</td>
                                <td><span class="bg-red-100 text-red-500 font-medium py-1 px-2 rounded-full">Cancelled</span></td>
                            </tr>
                            
                        </table>
                    </div>
                </section>
            </div>
            <section class="w-full md:w-2/5 flex flex-col gap-4">
                <div class="bg-white p-3 md:p-6 h-fit rounded shadow-md">
                    <h2 class="text-xl text-gray-600 font-semibold mb-5">Active Customers (Yearly)</h2>
                    <canvas id="customerChart"></canvas>
                </div>
                <div class="h-fit bg-white p-3 md:p-4 rounded shadow-md">
                    <h1 class="text-lg text-gray-600 font-medium">Best Sellers</h1>
                    <div class="flex flex-row justify-between gap-4 mt-3">
                        <div class="flex flex-col gap-2 w-fit">
                            <img src="{{ asset('images/' . $products[0]['main_photo']) }}" class="w-full">
                            <h3 class="text-sm line-clamp-2">{{ $products[0]['name'] }}</h3>
                            <span class="text-xs 2xl:text-sm">Total sales: &nbsp;<span class="font-semibold text-gray-600 text-sm 2xl:text-base">{{ $products[0]['quantity'] }}</span></span>
                        </div>
                        <div class="flex flex-col gap-2 w-fit">
                            <img src="{{ asset('images/' . $products[1]['main_photo']) }}" class="w-full">
                            <h3 class="text-sm line-clamp-2">{{ $products[1]['name'] }}</h3>
                            <span class="text-xs 2xl:text-sm">Total sales: &nbsp;<span class="font-semibold text-gray-600 text-sm 2xl:text-base">{{ $products[1]['quantity'] }}</span></span>
                        </div>
                        <div class="flex flex-col gap-2 w-fit">
                            <img src="{{ asset('images/' . $products[2]['main_photo']) }}" class="w-full">
                            <h3 class="text-sm line-clamp-2">{{ $products[2]['name'] }}</h3>
                            <span class="text-xs 2xl:text-sm">Total sales: &nbsp;<span class="font-semibold text-gray-600 text-sm 2xl:text-base">{{ $products[2]['quantity'] }}</span></span>
                        </div>
                    </div>
                </div>
                <div class="bg-blue-100 rounded-full px-8 py-3">
                    <a href="/" class="text-blue-500 2xl:text-lg font-semibold flex flex-row justify-between"><span>Go to Site </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                      </a>
                </div>
                
            </section>
                
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

        const weekBtn = document.getElementById('weekBtn');
        const monthBtn = document.getElementById('monthBtn');
        const yearBtn = document.getElementById('yearBtn');
        const ctxEarnings = document.getElementById('earningsChart').getContext('2d');
        const ctxCustomer = document.getElementById('customerChart').getContext('2d');
    
        const weeklyData = [520, 850, 800, 1200, 500, 2100, 2500];
        const monthlyData = [10000, 12000, 15000, 20000, 25000, 30000, 35000];
        const yearlyData = [50000, 60000, 75000, 100000, 125000, 150000, 200000, 180000];
        const labels = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        
        const customerYearlyData = [20, 32, 50, 80, 90, 100, 105, 130];
        const customerLabels = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"];
    
        let earningsChart = new Chart(ctxEarnings, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Earnings ($)',
                    data: weeklyData,
                    backgroundColor: 'rgba(59, 130, 246, 0.8)',
                    hoverBackgroundColor: 'rgba(37, 99, 235, 1)',
                    borderRadius: 6,
                    barThickness: 30,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    x: {
                        grid: { 
                            display: false,
                        },
                        ticks: { color: '#6B7280', font: { size: 12 } }
                    },
                    y: {
                        grid: { 
                            borderDash: [4, 4],
                            color: '#E5E7EB',
                            lineWidth: 0.5
                        },
                        ticks: { color: '#6B7280', font: { size: 12 } }
                    }
                },
                animation: {
                    duration: 2000,
                    easing: 'easeOutCubic',
                },
            }
        });
    
        let customerChart = new Chart(ctxCustomer, {
            type: 'line',
            data: {
                labels: customerLabels,
                datasets: [{
                    label: 'Customers',
                    data: customerYearlyData,
                    borderColor: 'rgba(34, 197, 94, 1)',
                    backgroundColor: 'rgba(34, 197, 94, 0.2)',
                    borderWidth: 1,
                    pointBackgroundColor: 'rgba(34, 197, 94, 1)',
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    x: {
                        grid: { 
                            display: false,
                        },
                        ticks: { color: '#6B7280', font: { size: 12 } }
                    },
                    y: {
                        grid: { 
                            borderDash: [4, 4],
                            color: '#E5E7EB',
                            lineWidth: 0.5
                        },
                        ticks: { color: '#6B7280', font: { size: 12 } }
                    }
                },
                animation: {
                    duration: 2000,
                    easing: 'easeOutCubic',
                },
            }
        });
    
        weekBtn.addEventListener('click', () => updateChart(weeklyData, 'Days'));
        monthBtn.addEventListener('click', () => updateChart(monthlyData, 'Weeks'));
        yearBtn.addEventListener('click', () => updateChart(yearlyData, 'Months'));
    
        function updateChart(data, xAxisLabel) {
            earningsChart.data.labels = 
                xAxisLabel === 'Days' ? labels : 
                xAxisLabel === 'Weeks' ? ["Week 1", "Week 2", "Week 3", "Week 4"] : 
                ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"];
            
            earningsChart.data.datasets[0].data = data;
            earningsChart.update();
    
            document.querySelectorAll('.toggle-btn').forEach(btn => {
                btn.classList.remove('bg-blue-500', 'text-white');
                btn.classList.add('bg-gray-200', 'text-gray-700');
            });
            if (xAxisLabel === 'Days') 
            {
                weekBtn.classList.add('bg-blue-500', 'text-white');
                weekBtn.classList.remove('bg-gray-200');
            }
            else if (xAxisLabel === 'Weeks'){
                monthBtn.classList.add('bg-blue-500', 'text-white');
                monthBtn.classList.remove('bg-gray-200');
            }
            else{
                yearBtn.classList.add('bg-blue-500', 'text-white');   
                yearBtn.classList.remove('bg-gray-200');
            }
        }
    </script>

</x-admin-layout>