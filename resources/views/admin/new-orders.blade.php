<x-admin-layout>
    <h1 class="font-medium text-gray-600 2xl:text-lg text-right lg:text-left mt-2 lg:mt-0">New Orders</h1>
    <div class="bg-white overflow-x-auto p-5 rounded shadow-md mt-12 md:mt-4">
        <table class="w-full order-table" id="dashboard-orders">
            <thead>
                <tr class="text-gray-600 text-xs md:text-sm 2xl:text-base">
                    <th class="text-nowrap">Order ID</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th class="text-nowrap">Amount &nbsp;</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b cursor-pointer relative" onclick="toggleOrderItems({{ $products[1]['id'] }})">
                    <td>
                        <span class="bg-blue-100 text-blue-400 font-medium p-1 rounded">#{{ $products[1]['id'] }}</span>
                    </td>
                    <td>Edward Davis</td>
                    <td>21:57 Nov 29</td>
                    <td>123 Elm Street , Dallas , 75201</td>
                    <td>United Kingdom</td>
                    <td>€ 169.94</td>
                    <td>
                        <span class="bg-yellow-100 text-yellow-600 font-medium py-1 px-2 rounded-full">Pending</span>
                    </td>
                    <td>
                        <i class="fas fa-angle-down fa-fw" id="arrow-{{ $products[1]['id'] }}"></i>
                    </td>
                </tr>

                <tr id="order-items-{{ $products[1]['id'] }}" class="hidden bg-gray-300 md:bg-gray-100 bg-opacity-20">
                    <td colspan="8" class="border-t">
                        <table class="w-full md:w-3/4 mx-auto">
                            <thead>
                                <tr class="text-sm text-gray-600 border-b">
                                    <th></th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="flex items-center justify-center"><img src="{{ asset('images/' . $products[4]['main_photo']) }}" alt="" class="w-9 md:h-12 object-cover"></td>
                                    <td>{{ $products[4]['name'] }}</td>
                                    <td>2</td>
                                    <td>€ 69.98</td>
                                </tr>
                                <tr>
                                    <td class="flex items-center justify-center"><img src="{{ asset('images/' . $products[2]['main_photo']) }}" alt="" class="w-9 md:h-12 object-cover"></td>
                                    <td>{{ $products[2]['name'] }}</td>
                                    <td>1</td>
                                    <td>€ 29.98</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>

                <tr class="border-b cursor-pointer relative" onclick="toggleOrderItems({{ $products[3]['id'] }})">
                    <td>
                        <span class="bg-blue-100 text-blue-400 font-medium p-1 rounded">#{{ $products[3]['id'] }}</span>
                    </td>
                    <td>Edward Davis</td>
                    <td>12:49 Nov 28</td>
                    <td>123 Elm Street , Dallas , 75201</td>
                    <td>United Kingdom</td>
                    <td>€ 29.98</td>
                    <td>
                        <span class="bg-yellow-100 text-yellow-600 font-medium py-1 px-2 rounded-full">Pending</span>
                    </td>
                    <td>
                        <i class="fas fa-angle-down fa-fw" id="arrow-{{ $products[3]['id'] }}"></i>
                    </td>
                </tr>

                <tr id="order-items-{{ $products[3]['id'] }}" class="hidden bg-gray-300 md:bg-gray-100 bg-opacity-20">
                    <td colspan="8" class="border-t">
                        <table class="w-full md:w-3/4 mx-auto">
                            <thead>
                                <tr class="text-sm text-gray-600 border-b">
                                    <th></th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="flex items-center justify-center"><img src="{{ asset('images/' . $products[8]['main_photo']) }}" alt="" class="w-9 md:h-12 object-cover"></td>
                                    <td>{{ $products[8]['name'] }}</td>
                                    <td>1</td>
                                    <td>€ 29.98</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <script>
        function toggleOrderItems(orderId) {
            const orderItemsRow = document.getElementById(`order-items-${orderId}`);
            var arrow = document.getElementById('arrow-' + orderId);

            if (arrow.classList.contains('fa-angle-down')) {
                arrow.classList.remove('fa-angle-down');
                arrow.classList.add('fa-angle-up');
            } else {
                arrow.classList.remove('fa-angle-up');
                arrow.classList.add('fa-angle-down');
            }

            if (orderItemsRow) {
                orderItemsRow.classList.toggle('hidden');
            }
        }
    </script>

</x-admin-layout>