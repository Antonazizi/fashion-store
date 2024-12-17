<x-admin-layout>
    @if(session('success'))
        <div id="alert" class="bg-green-500 absolute text-xs right-3 top-3 w-fit text-white px-3 py-2.5 rounded-md">
            {{ session('success') }}
            <script>
                setTimeout(() => {
                    const alert = document.getElementById('alert');
                    if (alert) alert.remove();
                }, 3000);
            </script>
        </div>
    @endif
    <h1 class="font-medium text-gray-600 2xl:text-lg text-right lg:text-left mt-2 lg:mt-0">Products</h1>
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
            @foreach($products as $product)
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
                    <td>{{ $product['quantity'] }}</td>
                    <td>{{ $product['quantity'] }}</td>
                    <td><a href="/admin/edit-product/{{ $product['id'] }}" class="py-1 px-2 text-blue-600 font-medium text-xs rounded-full">Edit</a></td>
                    <td>
                        <form>
                            @csrf
                            @method('DELETE')
                            <a class="py-1 px-2 bg-red-600 text-white text-xs rounded-full cursor-pointer">Delete</a>
                        </form>
                    </td>                    
                </tr>
            @endforeach
        </table>
    </div>

</x-admin-layout>