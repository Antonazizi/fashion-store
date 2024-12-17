<x-admin-layout>
    <h1 class="font-medium text-gray-600 2xl:text-lg text-right lg:text-left mt-2 lg:mt-0">Low Stock Products</h1>
    <div class="bg-white rounded shadow-md p-2 mt-4 overflow-x-auto">
        <table class="w-full product-table">
            <tr class="text-sm text-gray-600 text-left border-b">
                <th></th>
                <th class="font-medium text-nowrap">Product Name</th>
                <th class="font-medium">Price</th>
                <th class="font-medium">Discount</th>
                <th class="font-medium">Stock</th>
                <th class="font-medium text-nowrap">Total Sales</th>
            </tr>
            @foreach($lowStockProducts as $product)
                <tr class="text-sm text-gray-600 rounded">
                    <td class="flex items-center justify-center"><img src="{{ asset('images/' . $product['main_photo']) }}" alt="" class="w-9 md:h-12 ml-4 mr-8 object-cover"></td>
                    <td class="text-sm md:text-base md:w-1/3">{{ $product['name'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>
                        @if($product['sale'])
                            {{ $product['sale'] }} %
                        @else 
                        --
                        @endif
                    </td>
                    <td class="text-red-600">{{ $product['quantity'] }}</td>
                    <td>{{ $product['quantity'] }}</td>
                    <td><a href="/admin/edit-product/{{ $product['id'] }}" class="py-1 px-2 text-blue-600 font-medium text-xs rounded-full">Edit</a></td>
                    <td><a class="py-1 px-2 bg-red-600 text-white text-xs rounded-full">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</x-admin-layout>