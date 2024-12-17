<x-admin-layout>
    <div class="container mx-auto mt-12 md:mt-0">
        <h1 class="text-2xl font-bold mb-4">Edit Product</h1>
        <form>
            @csrf
            @method('PUT')
    
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Product Name:</label>
                <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md px-3 py-2" value="{{ old('name', $product['name']) }}" required>
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea name="description" id="description" rows="4" class="w-full border-gray-300 rounded-md px-3 py-2">{{ old('description', $product['description']) }}</textarea>
                @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price:</label>
                <input type="number" name="price" id="price" class="w-full border-gray-300 rounded-md px-3 py-2" value="{{ old('price', $product['price']) }}" step="0.01" min="0" required>
                @error('price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="sale" class="block text-gray-700">Discount %:</label>
                <input 
                    type="number" 
                    name="sale" 
                    id="sale" 
                    class="w-full border-gray-300 rounded-md px-3 py-2" 
                    value="{{ old('sale', $product['sale'] ?? 0) }}" 
                    step="1" 
                    min="0" 
                    required>
                @error('sale') 
                    <span class="text-red-500 text-sm">{{ $message }}</span> 
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="quantity" class="block text-gray-700">Quantity:</label>
                <input type="number" name="quantity" id="quantity" class="w-full border-gray-300 rounded-md px-3 py-2" value="{{ old('quantity', $product['quantity']) }}" min="0" required>
                @error('quantity') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
    
            <a class="cursor-pointer bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md">Update Product</a>
        </form>
    </div>
</x-admin-layout>